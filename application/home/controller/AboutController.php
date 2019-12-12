<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use app\home\model\Index;
use app\home\model\About;

class AboutController extends BaseController{

    public function index(){
        $indexModel = new Index();
        $banner = $indexModel->getBanner();

        //获取企业大事记
        $aboutModel = new About();
        $events = $aboutModel->getEvents();
        $this->assign('events',$events);
        $this->assign('banner',$banner);
        $this->assign('current',$this->request->controller());
        return $this->fetch();
    }
}