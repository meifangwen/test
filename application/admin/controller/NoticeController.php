<?php 
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Notice;
use think\Db;
class NoticeController extends CommonController{

	public function index(){
		//取出用户的数据。分配到模板中
		$noticeModel = new Notice();
		$noticeData = $noticeModel->paginate(10);

		return $this->fetch('',[
			'noticeData' => $noticeData
		]);
	}
 
	public function is_show(){

        $id = input('id');
        $noticeData = Db::table('notice')->where('id',$id)->find();
        
        if($noticeData){
        	if($noticeData["is_show"] == 0){
        		Db::table('notice')->where('id', $id)->update(['is_show' => 1]);
        		$response = ['code' => 1,'msg'=>'操作成功']; 
                return json($response);
        	}else{
        		Db::table('notice')->where('id', $id)->update(['is_show' => 0]);
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

                $uploadDir = "./notice/"; //定义上传的目录
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
            $result = $this->validate($postData,'Notice.add',[],true);

            if($result !== true){
                $this->error( implode(',',$result) );
            }

            $noticeAdd = Db::table('notice')->insert($postData);
            if($noticeAdd){
                $this->success("添加成功",url("admin/notice/index"));
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

                $uploadDir = "./notice/"; //定义上传的目录
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

            $result = $this->validate($postData,"Notice.upd",[],true);//验证
            if ($result !== true) {
                $this->error(implode(",", $result));
            }

            $noticeModel = new Notice();
            if($noticeModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('编辑成功',url('/admin/notice/index'));
            }else{
                $this->success('编辑成功',url('/admin/notice/index'));
            }
        }

        $id = input("id");
        $noticeModel = new Notice();
        $noticeData = $noticeModel->find($id);

        return $this->fetch('',[
            'noticeData' => $noticeData
        ]);

    }

    public function del(){

        $noticeModel = new Notice();

        if ($this->submitcheck('deletesubmit')){
            $postData = input("post.");
            $ids = $postData["ids"];


            if(count($ids)>1){
                foreach ($ids as $id){

                    $noticeData = $noticeModel->find($id);

                    if(file_exists("./notice/".$noticeData['img'])){
                        unlink("./notice/".$noticeData['img']);
                    }
                }
            }elseif(count($ids)==1){
                $noticeData = $noticeModel->find($ids);

                if(file_exists("./notice/".$noticeData['img'])){
                    unlink("./notice/".$noticeData['img']);
                }
            }else{
                $this->error("请至少勾选一个");
            }

            if ($noticeModel->destroy($ids)) {
                $this->success("删除成功",url("/admin/notice/index"));
            }else{
                $this->error("删除失败");
            }

        }else{

            $id = input("id");

            $noticeData = $noticeModel->find($id);

            if(file_exists("./notice/".$noticeData['img'])){
                unlink("./notice/".$noticeData['img']);
            }

            if ($noticeModel->destroy($id)) {
                $this->success("删除成功",url("/admin/notice/index"));
            }else{
                $this->error("删除失败");
            }
        }
    }
}