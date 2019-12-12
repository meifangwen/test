<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use app\home\model\Index;
use app\home\model\News;

class NewsController extends BaseController{

    protected $page_size = 10;

    public function index(){
        $newsModel = new News();
        $newsList = $newsModel->getNews();
        //总新闻数量
        $total = Db::name('News')->where('is_show',0)->count();
        //获取banner
        $indexModel = new Index();
        $banner = $indexModel->getBanner();

        $this->assign('total',$total);
        $this->assign('page_size',$this->page_size);
        $this->assign('banner',$banner);
        $this->assign('news_list',$newsList);
        $this->assign('current',$this->request->controller());
        return $this->fetch();
    }

    //ajax分页
    public function ajaxPage(){
        if($this->request->isAjax()){
            $page = $this->request->post('page');
            $page = (empty($page) || !isset($page)) ? 1 : $page;
            $newsModel = new News();

            $newsList = $newsModel->getNews($page);
            if(empty($newsList)){
                return jsonReturn(-1,'暂无数据');
            }
            return jsonReturn(1,'获取成功',$newsList);
        }
        return jsonReturn(-1,'操作有误');
    }

    public function detail(){
        $id = $this->request->param('id');

        $details = Db::name('news')->where('id',$id)->find();

        //上一篇文章
        $prev = Db::name('news')->where('id','<',$id)->order('id desc')->fetchSql(false)->find();
        //下一篇文章
        $next = Db::name('news')->where('id','>',$id)->order('id asc')->fetchSql(false)->find();

        $this->assign('current',$this->request->controller());
        $this->assign('next',$next);
        $this->assign('prev',$prev);
        $this->assign('details',$details);
        return $this->fetch();
    }
}