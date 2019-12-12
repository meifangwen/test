<?php 
namespace app\common\controller; //定义当前类所在的命名空间
use app\admin\model\System;
use think\Controller;   //引入Controller核心控制器
class CacheController extends Controller {

    public $arr = [];

    //更新前端会员等级
    public function system_cache() {

        //取出用户的数据。分配到模板中
        $systemModel = new System();
        $systemData = $systemModel->select();

        // halt($systemData);

        foreach ($systemData as $key => $value) {

            $this->arr['system'] = [
                'id' => $value['id'],
                'logo' => $value['logo'],
                'describe' => $value['describe'],
                'web_name' => $value['web_name'],
                'seo' => $value['seo'],
                'web_close' => $value['web_close'],
                'company' => $value['company'],
                'address' => $value['address'],
                'close_desc' => $value['close_desc'],
                'record' => $value['record'],
                'wechat' => $value['wechat'],
                'email' => $value['email'],
                'qq' => $value['qq'],
                'zx_phone' => $value['zx_phone'],
                'weibo' => $value['weibo'],
                'wechat_public' => $value['wechat_public'],
                'latitude' => $value['latitude'],
                'longitude' => $value['longitude'],
                'phone' => $value['phone'],
                'qrcode' => $value['qrcode']
            ];
        }

       $this->sconfig=$this->arr['system'];

 // print_r($this->sconfig);die;
        $this->cache_write('system', "arr['system']", $this->arr['system']);
    }
        
    //写入
    public function cache_write($name, $var, $values,$path="") {
        $path = empty($path)?"":$path."/";
        $cachefile = './data/'.$path.'data_'.$name.'.php';
        // halt($cachefile);
        $str = $this->arrayeval($values);
        $cachetext = "<?php\r\n".'$'.$var.'='.$str."\r\n?>";

        if(!$this->swritefile($cachefile, $cachetext)) {
            exit("File: $cachefile write error.");
        }
    }


    //数组转换成字串
    public function arrayeval($array, $level = 0) {
        $space = '';
        for($i = 0; $i <= $level; $i++) {
            $space .= "\t";
        }
        $evaluate = "Array\n$space(\n";
        $comma = $space;
        foreach($array as $key => $val) {
            $key = is_string($key) ? '\''.addcslashes($key, '\'\\').'\'' : $key;
            $val = !is_array($val) && (!preg_match("/^\-?\d+$/", $val) || strlen($val) > 12 || substr($val, 0, 1)=='0') ? '\''.addcslashes($val, '\'\\').'\'' : $val;

            if(is_array($val)) {
                $evaluate .= "$comma$key => ".$this->arrayeval($val, $level + 1);
            } else {
                $evaluate .= "$comma$key => $val";
            }
            $comma = ",\n$space";
        }
        $evaluate .= "\n$space)";
        return $evaluate;
    }

    //写入文件
    public function swritefile($filename, $writetext, $openmod='w') {
        if(@$fp = fopen($filename, $openmod)) {

            flock($fp, 2);
            fwrite($fp, $writetext);
            fclose($fp);
            return true;
        } else {
            return false;
        }
    }

    //获取文件内容
    function sreadfile($filename) {
        $content = '';
        if(function_exists('file_get_contents')) {
            @$content = file_get_contents($filename);
        } else {
            if(@$fp = fopen($filename, 'r')) {
                @$content = fread($fp, filesize($filename));
                @fclose($fp);
            }
        }
        return $content;
    }
   

}