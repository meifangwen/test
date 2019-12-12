<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Request;

class BaseController extends Controller{
    public $arr = [];

    public function __construct()
    {
        include("./data/data_system.php");
        $this->arr = $arr;
        if($arr['system']['web_close']==1){
            echo "紧急关闭";die;
        }
        parent::__construct();
    }
}