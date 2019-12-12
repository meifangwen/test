<?php
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Events;
use think\Db;
class EventsController extends CommonController{

    public function index(){
        //取出用户的数据。分配到模板中
        $eventsModel = new Events();
        $eventsData = $eventsModel->paginate(10);

        return $this->fetch('',[
            'data' => $eventsData
        ]);
    }

    public function add(){
        if($this->request->isPost()){
            $postData = input('post.');

            $result = Db::name('events')->insert($postData);

            if($result){
                $this->success('添加成功',url('/admin/events/index'));
            }else{
                $this->success('添加失败');
            }

        }
        return $this->fetch();
    }

    public function upd(){

        if (request()->isPost()){
            //接收参数
            $postData = input("post.");
            $id = $postData['id'];
            unset($postData['id']);

            if(Db::name('events')->where('id',$id)->update($postData)){
                $this->success('编辑成功',url('/admin/events/index'));
            }else{
                $this->success('编辑失败');
            }
        }

        $id = input("id");
        $data = Db::name('events')->where('id',$id)->find();

        return $this->fetch('',[
            'data' => $data
        ]);
    }


    public function is_show(){

        $id = input('id');
        $usersData = Db::table('events')->where('id',$id)->find();

        if($usersData){
            if($usersData["is_show"] == 0){
                Db::table('events')->where('id', $id)->update(['is_show' => 1]);
                $response = ['code' => 1,'msg'=>'操作成功'];
                return json($response);
            }else{
                Db::table('events')->where('id', $id)->update(['is_show' => 0]);
                $response = ['code' => 2,'msg'=>'操作成功'];
                return json($response);
            }
        }
    }


    public function del(){
        if ($this->submitcheck('deletesubmit')){
            $postData = $this->request->post();
            $ids = $postData['ids'];
            $ids = implode(',',$ids);
            $result = Db::name('events')->where('id','in',$ids)->delete();
        }else{
            $id = input("id");

            $result = Db::name('events')->where('id',$id)->delete();
        }

        if ($result) {
            $this->success("删除成功",url("/admin/events/index"));
        }else{
            $this->error("删除失败");
        }
    }
}