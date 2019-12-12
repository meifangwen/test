<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use app\home\model\Index;
use app\admin\model\News;
use app\admin\model\Team;

class RelationController extends BaseController{

    public function index(){
        return $this->fetch();
    }

    public function ajaxGetEvents(){
        if($this->request->isAjax()){
            $page = $this->request->post('page');
            $page = empty($page) ? 2 : $page;
            $list = Db::name('events')->where('is_show',0)->order('date asc')->page($page,4)->select();

            jsonReturn(1,'获取成功',$list);
        }
        jsonReturn(-1,'请求错误');
    }
}