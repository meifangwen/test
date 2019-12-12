<?php
namespace app\home_en\controller;
use think\Controller;
use app\home_en\model\Index;


class IndexController extends Controller{

    public function index(){
 
		//取出用户的数据。分配到模板中
		$indexModel = new Index();
		$indexData = $indexModel->select();
		// halt($indexData);
		$i = [];
		foreach ($indexData as $k => $v) {
			$i[] = $v;
		}
		$indexData1 = [];
		$indexData2 = [];
		foreach ($i as $k => $v) {
			// halt($v["title"]);
			$indexData1["title"] = explode("||",$v["title"])[1];
			$indexData1["content"] = explode("||",$v["content"])[1];
			$indexData1["src"] = explode("||",$v["src"])[1];
			$indexData2[] = $indexData1;
		}

		include_once("./data/data_system.php");

		$content = $arr['system'];
		
		// halt($content);

		return $this->fetch('',[
			'indexData2' => $indexData2, 
			"content" => $content
		]);
    }
}