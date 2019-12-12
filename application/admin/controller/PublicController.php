<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User;

class PublicController extends Controller{

    public function login(){

        if(request()->isPost()){
            //2.接受参数
            $postData = input('post.');

            $result = $this->validate($postData,'User.login',[],true);
            if($result !== true){
                $this->error( implode(',',$result) );
            }
            //4.调用模型的方法checkUser检查用户名和密码是否匹配
            $userModel = new User();
            $passData = $userModel->field("pass")->where("name",$postData["name"])->find();

            $status = $userModel->checkUser($postData['name'],$postData['password']);

            if($status){
                if($passData["pass"] == 1){
                    $this->error('账号异常');
                }
                $this->redirect("admin/index/index");
            }else{
                $this->error('用户名或密码失败');
            }
        }

        return $this->fetch();
    }

    public function logout(){
        //清除session信息
        session('name',null);
        session('id',null);

        //重定向到登录页
        $this->redirect("admin/public/login");
    }
}
