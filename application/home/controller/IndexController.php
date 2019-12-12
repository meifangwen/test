<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Cache;
use app\home\model\Index;
use app\home\validate\Messages;

class IndexController extends BaseController{

    /**
     * 首页
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index(){
		$indexModel = new Index();
		$bannerList = $indexModel->getBanner();
		$indexData = $indexModel->getIndexList();


		//返回当前控制器名称
		$this->assign('current',$this->request->controller());
		$this->assign('banner',$bannerList);
		$this->assign('data',$indexData);
		$this->assign('company_config',$this->arr['system']);
		return $this->fetch('');
    }

    /**
     * 提交留言
     */
    public function ajaxSendMessage(){
        if($this->request->isAjax()){
            $postData = $this->request->post();

            $indexModel = new Index();
            $indexModel->sendMessage($postData);
        }
        jsonReturn(-1,'提交方式错误');
    }
}