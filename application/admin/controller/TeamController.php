<?php 
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Team;
use think\Db;
class TeamController extends CommonController{

	public function index(){
		//取出用户的数据。分配到模板中
		$teamModel = new Team();
		$teamData = $teamModel->paginate(10);

		// halt($newsData);
		return $this->fetch('',[
			'teamData' => $teamData
		]);
	}

	public function add(){

        if(request()->isPost()){
            //2.接受参数
            $postData = input('post.');
            // halt($postData);
            
            $file = request()->file('img');

            if($file){
                
                $uploadDir = "./team/"; //定义上传的目录
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
            $result = $this->validate($postData,'Team.add',[],true);
            // halt($result);
            if($result !== true){
                $this->error( implode(',',$result) );
            }

            $userAdd = Db::table('team')->insert($postData);

            if($userAdd){
                $this->success("添加成功",url("admin/team/index"));
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
            // halt($postData);
            
            $files = request()->file('img');

            if($files){
                //halt($files); // [file1,file2] 或 []
                $uploadDir = "./team/";//定义上传的目录
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

            $result = $this->validate($postData,"Team.upd",[],true);//验证
            if ($result !== true) {
                $this->error(implode(",", $result));
            }

            $teamModel = new Team();
            if($teamModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('编辑成功',url('/admin/team/index'));
            }else{
                $this->success('编辑成功',url('/admin/team/index'));
            }
        }

        $id = input("id");
        $teamModel = new Team();
        $teamData = $teamModel->find($id);

        return $this->fetch('',[
            'teamData' => $teamData
        ]);

    }

    public function del(){

        $teamModel = new Team();

        if ($this->submitcheck('deletesubmit')){
            $postData = input("post.");
            $ids = $postData["ids"];

            if(count($ids)>1){
                foreach ($ids as $id){

                    $teamData = $teamModel->find($id);

                    if(file_exists("./team/".$teamData['img'])){
                        unlink("./team/".$teamData['img']);
                    }
                }
            }elseif(count($ids)==1) {
                $teamData = $teamModel->find($ids);

                if(file_exists("./team/".$teamData['img'])){
                    unlink("./team/".$teamData['img']);
                }
            }else{
                $this->error("请至少勾选一个");
            }

            if ($teamModel->destroy($ids)) {
                $this->success("删除成功",url("/admin/team/index"));
            }else{
                $this->error("删除失败");
            }

        }else{

            $id = input("id");

            $teamData = $teamModel->find($id);

            if(file_exists("./team/".$teamData['img'])){
                unlink("./team/".$teamData['img']);
            }

            if ($teamModel->destroy($id)) {
                $this->success("删除成功",url("/admin/team/index"));
            }else{
                $this->error("删除失败");
            }
        }
    }
}