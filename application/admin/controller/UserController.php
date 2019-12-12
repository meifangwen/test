<?php 
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\User;
use think\Db;
class UserController extends CommonController{

	//用户列表页
	public function index(){
		//取出用户的数据。分配到模板中
		$userModel = new User();

		$usersData = $userModel->paginate(10);

		return $this->fetch('',[
			'usersData' => $usersData
		]);
	}
  
	public function titles(){

        $id = input('id');
        $usersData = Db::table('user')->where('id',$id)->find();
        
        if($usersData){
        	if($usersData["pass"] == 0){
        		Db::table('user')->where('id', $id)->update(['pass' => 1]);
        		$response = ['code' => 1,'msg'=>'封号成功']; 
               return json($response);
        	}else{
        		Db::table('user')->where('id', $id)->update(['pass' => 0]);
        		$response = ['code' => 2,'msg'=>'解封成功']; 
               return json($response);
        	}
        } 
	}

	public function add(){

        if(request()->isPost()){

            $postData = input('post.');

            $result = $this->validate($postData,'User.add',[],true);
            if($result !== true){
                $this->error( implode(',',$result) );
            }

            $userModel = new User();
			if ($userModel->allowField(true)->save($postData)){
                $this->success("添加成功",url("admin/user/index"));
            }else{
                $this->error('用户名或密码失败');
            }
        }

        return $this->fetch();

	}
	public function upd(){

        if (request()->isPost()){
			//接收参数
			$postData = input("post.");
			// halt($postData);
			$result = $this->validate($postData,"User.upd",[],true);//验证
			if ($result !== true) {
				$this->error(implode(",", $result));
			}

			$userModel = new User();
			if($userModel->allowField(true)->isUpdate(true)->save($postData)){
				$this->success('编辑成功',url('/admin/user/index'));
			}else{
				$this->error("编辑失败/没做修改");
			}
		}

		$id = input("id");
		$userModel = new User();
		$userData = $userModel->find($id);

		return $this->fetch('',[
			'userData' => $userData
		]);

	}


	public function del(){

        $userModel = new User();

        if ($this->submitcheck('deletesubmit')){
            $postData = input("post.");
            $ids = $postData["ids"];

            if(count($ids)>=1){

                if ($userModel->destroy($ids)) {
                    $this->success("删除成功",url("/admin/team/index"));
                }else{
                    $this->error("删除失败");
                }
            }else{
                $this->error("请至少勾选一个");
            }

        }else{

            $id = input("id");

            if ($userModel->destroy($id)) {
                $this->success("删除成功",url("/admin/user/index"));
            }else{
                $this->error("删除失败");
            }
        }
    }
}