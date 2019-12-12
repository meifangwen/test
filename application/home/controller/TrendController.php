<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use app\home\model\Trend;
use app\admin\model\News;
use app\admin\model\Team;

class TrendController extends BaseController{

    /**
     * 首页
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index(){
        $TrendModel = new Trend();
        $bannerList = $TrendModel->getTrendBanner();
        $TrendData = $TrendModel->getTrendList();

        //返回当前控制器名称
        $this->assign('current',$this->request->controller());
        $this->assign('banner',$bannerList);
        $this->assign('data',$TrendData);
        return $this->fetch('');
    }
}