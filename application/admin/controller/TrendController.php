<?php
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Trend;

class TrendController extends CommonController{

    public function index(){

        //取出用户的数据。分配到模板中
		$trendModel = new Trend();
		$trendData = $trendModel->order('id','asc')->paginate(10);

		return $this->fetch('',[
			'trendData' => $trendData
		]);
    }

    public function upd(){

        if (request()->isPost()){
            //接收参数
            $postData = input("post.");

            $time = time();
            $postData["time"] = $time;

            $file = request()->file('src');

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

                $postData["src"] = $goodsImg;
            }else{
                $postData["src"] = $postData["img_path"];
            }

            $result = $this->validate($postData,"Trend.upd",[],true);//验证
            if ($result !== true) {
                $this->error(implode(",", $result));
            }

            $TrendModel = new Trend();
            if($TrendModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('编辑成功',url('/admin/trend/index'));
            }else{
                $this->success('编辑失败');
            }
        }

        $id = input("id");
        $trendModel = new Trend();
        $trendData = $trendModel->find($id);
        
        return $this->fetch('',[
            'trendData' => $trendData
        ]);
	}         
}