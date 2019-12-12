<?php
namespace app\home\model; //定义当前类所在的命名空间
use think\Model; 	//引入Controller核心控制器
use think\Db;
class News extends Model{

    public function getNews($page=1,$page_size=10){
        return Db::name('news')->where('is_show',0)->order('time','desc')->page($page,$page_size)->select();
    }
}
