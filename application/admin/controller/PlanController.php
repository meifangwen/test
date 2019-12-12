<?php
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Plan;

class PlanController extends CommonController{

    public function index(){

        //取出用户的数据。分配到模板中
		$planModel = new Plan();
		$planData = $planModel->paginate(10);


		return $this->fetch('',[
			'planData' => $planData
		]);
    }

    public function upd(){

        if (request()->isPost()){
            //接收参数
            $postData = input("post.");
            
            $title = implode("||",$postData["title"]);
            $postData["title"] = $title;

            $content = implode("||",$postData["content"]);
            $postData["content"] = $content;

            $time = time();
            $postData["time"] = $time;

            $file = request()->file('src');

            $video = request()->file('video');

            if($file){

                $uploadDir = "./video/"; //定义上传的目录
                //定义上传的验证条件
                $validate = [
                    'size' => 1024*1024*100,
                    'ext'  => 'mp4,jpg,jpeg,png,gif'
                ];

                $info = $file->validate($validate)->move($uploadDir);
                if($info){
                    //上传成功，把路径存储到$goodsImg数组中去
                    $goodsImg = str_replace('\\','/',$info->getSaveName());
                }else{
                    $this->error("上传文件格式不正确,必须是mp4,jpg,jpeg,png,gif为后缀的文件");
                }

                $postData["src"][] = $goodsImg;
            }else{
                $postData["src"][] = $postData["img_path"][0];
            }

            if($video){

                $uploadDir = "./video/"; //定义上传的目录
                //定义上传的验证条件
                $validate = [
                    'size' => 1024*1024*100,
                    'ext'  => 'mp4,jpg,jpeg,png,gif'
                ];

                $info = $video->validate($validate)->move($uploadDir);
                if($info){
                    //上传成功，把路径存储到$goodsImg数组中去
                    $goodsImg = str_replace('\\','/',$info->getSaveName());
                }else{
                    $this->error("上传文件格式不正确,必须是mp4,jpg,jpeg,png,gif为后缀的文件");
                }

                $postData["src"][] = $goodsImg;
            }else{

                $postData["src"][] = $postData["img_path"][1];
            }

            $src = implode("||",$postData["src"]);
            $postData["src"] = $src;

            $result = $this->validate($postData,"Plan.upd",[],true);//验证
            if ($result !== true) {
                $this->error(implode(",", $result));
            }

            $planModel = new Plan();
            if($planModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('编辑成功',url('/admin/plan/index'));
            }else{
                $this->success('编辑失败',url('/admin/plan/index'));
            }
        }

        $id = input("id");
        $planModel = new Plan();
        $planData = $planModel->find($id);
        
        return $this->fetch('',[
            'planData' => $planData
        ]);
	}
}