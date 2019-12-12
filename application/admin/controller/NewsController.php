<?php 
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\News;
use think\Db;
class NewsController extends CommonController{

	//用户列表页
	public function index(){
		//取出用户的数据。分配到模板中
		$newsModel = new News();
		$newsData = $newsModel->paginate(10);

		// halt($newsData);
		return $this->fetch('',[
			'newsData' => $newsData
		]);
	}

	public function is_show(){

        $id = input('id');
        $usersData = Db::table('news')->where('id',$id)->find();
        
        if($usersData){
        	if($usersData["is_show"] == 0){
        		Db::table('news')->where('id', $id)->update(['is_show' => 1]);
        		$response = ['code' => 1,'msg'=>'操作成功']; 
                return json($response);
        	}else{
        		Db::table('news')->where('id', $id)->update(['is_show' => 0]);
        		$response = ['code' => 2,'msg'=>'操作成功']; 
                return json($response);
        	}
        } 
	}

	public function add(){

        if(request()->isPost()){
            //2.接受参数
            $postData = input('post.');
            $time = time();
            $postData["time"] = $time;
            
            $file = request()->file('img');

            if($file){

                $uploadDir = "./news/"; //定义上传的目录
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

                $postData["img"] = $goodsImg;
            }

            // 3.验证器验证
            $result = $this->validate($postData,'News.add',[],true);
            // halt($result);
            if($result !== true){
                $this->error( implode(',',$result) );
            }

            $userAdd = Db::table('news')->insert($postData);
            if($userAdd){
                $this->success("添加成功",url("admin/news/index"));
            }else{
                $this->error('添加失败');
            }
        }
        return $this->fetch();
	}

    public function upd(){

        if (request()->isPost()){

            //接收参数
            $postData = input("post.");
            
            $files = request()->file('img');

            if($files){
                //halt($files); // [file1,file2] 或 []
                $uploadDir = "./news/"; //定义上传的目录
                //定义上传的验证条件
                $validate = [
                    'size' => 1024*1024*3, //3M
                    'ext'  => 'jpg,jpeg,png,gif'
                ];

                $info = $files->validate($validate)->move($uploadDir);
                if($info){
                    //上传成功，把路径存储到$goodsImg数组中去
                    $goodsImg = str_replace('\\','/',$info->getSaveName());
                }
                $postData["img"] = $goodsImg;
            }else{
                $postData["img"] = $postData["img_path"];
            }

            $result = $this->validate($postData,"News.upd",[],true);//验证
            if ($result !== true) {
                $this->error(implode(",", $result));
            }

            $newsModel = new News();
            if($newsModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('编辑成功',url('/admin/news/index'));
            }else{
                $this->success('编辑成功',url('/admin/news/index'));
            }
        }

        $id = input("id");
        $newsModel = new News();
        $newsData = $newsModel->find($id);

        return $this->fetch('',[
            'newsData' => $newsData
        ]);

    }

    public function del(){

        $newsModel = new News();

        if ($this->submitcheck('deletesubmit')){
            $postData = input("post.");
            $ids = $postData["ids"];

            if(!empty($ids)&&count($ids)>1){
                foreach ($ids as $id){

                    $newsData = $newsModel->find($id);

                    if(file_exists("./news/".$newsData['img'])){
                        unlink("./news/".$newsData['img']);
                    }
                }
            }elseif(!empty($ids)&&count($ids)==1) {
                $newsData = $newsModel->find($ids);

                if(file_exists("./news/".$newsData['img'])){
                    unlink("./news/".$newsData['img']);
                }
            }else{
                $this->error("请至少勾选一个");
            }

            if ($newsModel->destroy($ids)) {
                $this->success("删除成功",url("/admin/news/index"));
            }else{
                $this->error("删除失败");
            }

        }else{

            $id = input("id");

            $newsData = $newsModel->find($id);

            if(file_exists("./news/".$newsData['img'])){
                unlink("./news/".$newsData['img']);
            }

            if ($newsModel->destroy($id)) {
                $this->success("删除成功",url("/admin/news/index"));
            }else{
                $this->error("删除失败");
            }
        }
    }
}