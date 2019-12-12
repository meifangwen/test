<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use app\home\model\Messages;

class MessagesController extends BaseController{

    public function index(){

    	$messagesModel = new Messages();
		$messagesData = $messagesModel->where("is_show",0)->select();

		foreach ($messagesData as $v) {

			$v["time"] = $this->get_last_time($v["time"]);
		}

		return $this->fetch("", [
			"messagesData" => $messagesData
		]);

    }

    public function submit(){

        if(request()->isPost()){

            $postData = input('post.');

            $result = $this->validate($postData,'Messages.submit',[],true);

            if($result !== true){
                $this->error( implode(',',$result) );
            }

            $messagesAdd = Db::table('messages')->insert($postData);
            if($messagesAdd){
                $this->success("添加成功",url("home/messages/index"));
            }else{
                $this->error('添加失败');
            }
        }
    }

    function get_last_time($targetTime){
	    // 今天最大时间
	    $todayLast   = strtotime(date('Y-m-d 23:59:59'));
	    $agoTimeTrue = time() - $targetTime;
	    $agoTime     = $todayLast - $targetTime;
	    $agoDay      = floor($agoTime / 86400);

	    if ($agoTimeTrue < 60) {
	        $result = '刚刚';
	    } elseif ($agoTimeTrue < 3600) {
	        $result = (ceil($agoTimeTrue / 60)) . '分钟前';
	    } elseif ($agoTimeTrue < 3600 * 12) {
	        $result = (ceil($agoTimeTrue / 3600)) . '小时前';
	    } elseif ($agoDay == 0) {
	        $result = '今天 ' . date('H:i', $targetTime);
	    } elseif ($agoDay == 1) {
	        $result = '昨天 ' . date('H:i', $targetTime);
	    } elseif ($agoDay == 2) {
	        $result = '前天 ' . date('H:i', $targetTime);
	    } elseif ($agoDay > 2 && $agoDay < 16) {
	        $result = $agoDay . '天前 ' . date('H:i', $targetTime);
	    } else {
	        $format = date('Y') != date('Y', $targetTime) ? "Y-m-d H:i" : "m-d H:i";
	        $result = date($format, $targetTime);
	    }
	    return $result;
	}
}
