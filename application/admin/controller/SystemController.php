<?php 
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\common\controller\CacheController;
use app\admin\model\System;
use think\Db;

class SystemController extends CommonController{

    public function index(){

        if (request()->isPost()){
            //接收参数
            $postData = input("post.");

            $logo = request()->file('logo');
            
            $qrcode = request()->file('qrcode');
            $wechat_public = request()->file('wechat_public');

            //二维码
            if($qrcode){

                $uploadDir = "./qrcode/"; //定义上传的目录
                //定义上传的验证条件
                $validate = [
                    'size' => 1024*1024*3, //3M
                    'ext'  => 'jpg,jpeg,png,gif'
                ];

                $info = $qrcode->validate($validate)->move($uploadDir);
                if($info){
                    //上传成功，把路径存储到$goodsImg数组中去
                    $goodsImg = str_replace('\\','/',$info->getSaveName());
                }

                $postData["qrcode"] = $goodsImg;
            }else{
                $postData["qrcode"] = $postData["qrcode_path"];
            }

            //logo图标
            if($logo){
                $uploadDir = "./logo/"; //定义上传的目录
                //定义上传的验证条件
                $validate = [
                    'size' => 1024*1024*3, //3Mqrcode
                    'ext'  => 'jpg,jpeg,png,gif'
                ];

                $info = $logo->validate($validate)->move($uploadDir);
                if($info){
                    //上传成功，把路径存储到$goodsImg数组中去
                    $goodsImg = str_replace('\\','/',$info->getSaveName());
                }

                $postData["logo"] = $goodsImg;
            }else{
                $postData["logo"] = $postData["img_path"];
            }

            //微信公众号
            if($wechat_public){

                $uploadDir = "./wechat_public/"; //定义上传的目录
                //定义上传的验证条件
                $validate = [
                    'size' => 1024*1024*3, //3M
                    'ext'  => 'jpg,jpeg,png,gif'
                ];

                $info = $wechat_public->validate($validate)->move($uploadDir);
                if($info){
                    //上传成功，把路径存储到$goodsImg数组中去
                    $goodsImg = str_replace('\\','/',$info->getSaveName());
                }

                $postData["wechat_public"] = $goodsImg;
            }else{
                $postData["wechat_public"] = $postData["wechat_path"];
            }

            $systemModel = new System();
            $cache = new CacheController();
            $res = $systemModel->allowField(true)->isUpdate(true)->save($postData);
            if($res!==false){

                $cache->system_cache();/*掉用生成系统配置缓存文件方法*/

                $this->success('编辑成功',url('/admin/system/index'));
            }else{
                $this->success('编辑失败');
            }
        }

        $id = input("id");
        $systemModel = new System();
        $systemData = $systemModel->find($id);

        return $this->fetch('',[
            'systemData' => $systemData
        ]);

    }  
}