<?php 
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Messages;
use think\Db;
class MessagesController extends CommonController{

    //用户列表页
    public function index(){
        //取出用户的数据。分配到模板中
        $MessagesModel = new Messages();
        $MessagesData = $MessagesModel->paginate(10);

        return $this->fetch('',[
            'MessagesData' => $MessagesData
        ]);
    }

    public function is_show(){

        $id = input('id');
        $usersData = Db::table('messages')->where('id',$id)->find();
        
        if($usersData){
            if($usersData["is_show"] == 0){
                Db::table('messages')->where('id', $id)->update(['is_show' => 1]);
                $response = ['code' => 1,'msg'=>'操作成功']; 
               return json($response);
            }else{
                Db::table('messages')->where('id', $id)->update(['is_show' => 0]);
                $response = ['code' => 2,'msg'=>'操作成功']; 
                return json($response);
            }
        } 
    }

    public function upd(){

        if (request()->isPost()){

            $postData = input("post.");
             if (!empty($postData["reply"])){
             $postData["status"]=1;
             }
            $messagesModel = new messages();
  
            if($messagesModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('操作成功',url('/admin/messages/index'));
            }else{
                $this->success('操作成功',url('/admin/messages/index'));
            }  
        }

        $id = input("id");
        $messagesModel = new messages();
        $messagesData = $messagesModel->find($id);

        return $this->fetch('',[
            'messagesData' => $messagesData,
        ]);
    }
}