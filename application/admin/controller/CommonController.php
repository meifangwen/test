<?php 
namespace app\admin\controller; //定义当前类所在的命名空间
use think\Controller; 	//引入Controller核心控制器
class CommonController extends Controller {

    public function _initialize(){

    	//判断session是否存在
        // print_r($_SESSION);
    	if(!session('id')){
    		//提示登录
    		$this->success('请先登录',url('/admin/public/login'));
    	}
    }

    public function submitcheck($var) {
    	
        if(!empty($_POST[$var]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            if((empty($_SERVER['HTTP_REFERER']) || preg_replace("/https?:\/\/([^\:\/]+).*/i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("/([^\:]+).*/", "\\1", $_SERVER['HTTP_HOST']))) {
                return true;
            }else {
                exit();
            }
        }
    }
}