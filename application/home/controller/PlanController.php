<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Index;
use app\admin\model\News;
use app\admin\model\Team;

class PlanController extends BaseController{

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
			$indexData1["title"] = explode("||",$v["title"])[0];
			$indexData1["content"] = explode("||",$v["content"])[0];
			$indexData1["src"] = explode("||",$v["src"])[0];
			$indexData2[] = $indexData1;
		}

		include_once("./data/data_system.php");

		$content = $arr['system'];
		
		$newsModel = new News();
		$newsData = $newsModel->select();

		$teamModel = new Team();
		$teamData = $teamModel->select();

		return $this->fetch('',[
			'indexData2' => $indexData2, 
			"content" => $content,
			"newsData" => $newsData,
			"teamData" => $teamData
		]);

    }
}