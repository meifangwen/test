<?php
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Index;

class IndexController extends CommonController{

    public function index(){

        //取出用户的数据。分配到模板中
		$indexModel = new Index();
		$indexData = $indexModel->order('id','asc')->select();

		return $this->fetch('',[
			'indexData' => $indexData
		]);
    }

    public function upd(){

        if (request()->isPost()){
            //接收参数
            $postData = input("post.");

            $time = time();
            $postData["time"] = $time;

            //获取图片
            //file里面的参数填的是form表单 <input type="file" name="src[]"/> 里面的name属性值
            $file = request()->file('src');

            if($file){
				$uploadDir = "./upload/"; //定义上传的目录
				//定义上传的验证条件
				$validate = [
					'size' => 1024*1024*3, //3M
					'ext'  => 'jpg,jpeg,png,gif'
				];

				$info = $file->validate($validate)->move($uploadDir);
				if($info){
					//上传成功，把路径存储到$goodsImg数组中去
					$goodsImg = str_replace('\\','/',$info->getSaveName());
				}
	            $postData["src"] = $goodsImg;
            }else{
            	$postData["src"] = $postData["img_path"];
            }

            $result = $this->validate($postData,"Index.upd",[],true);//验证
            if ($result !== true) {
                $this->error(implode(",", $result));
            }

            $indexModel = new Index();
            if($indexModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('编辑成功',url('/admin/index/index'));
            }else{
                $this->success('编辑失败');
            }
        }

        $id = input("id");
        $indexModel = new Index();
        $indexData = $indexModel->find($id);

        return $this->fetch('',[
            'indexData' => $indexData
        ]);
	}

}