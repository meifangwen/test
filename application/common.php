<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


error_reporting(0);
define("UPLOADS",'/upload/');
define("VIDEO",'/video/');
define("__STATIC__",'/static');

//多余字符以省略号显示
function cut_str($str,$len,$suffix="..."){
    if(function_exists('mb_substr')){
        if(strlen($str) > $len){
            $str= mb_substr($str,0,$len,'utf-8').$suffix;
        }
        return $str;
    }else{
        if(strlen($str) > $len){
            $str= substr($str,0,$len,'utf-8').$suffix;
        }
        return $str;
    } 
}

/**
 * 返回中/英文内容
 * @param $arr   需要重构的数组
 * @param int $index  需要获取的语言 默认0为中文内容，1为英文内容
 */
function getLangContent($arr,$index=0){
    $newArray = array();
    foreach ($arr as $key => $value) {
        if(is_array($value)){
            foreach ($value as $k => $v) {
                $val = explode('||',$v);
                $newArray[$key][$k] = $val[$index];
            }
        }else{
            $newArray[$key] = $value;
        }
    }
    return $newArray;
}

/**
 * 返回json数据
 * @param $code     1返回成功  -1失败
 * @param $msg
 * @param string $data
 */
function jsonReturn($code,$msg,$data=''){
    $json = array(
        'code' => $code,
        'msg' => $msg,
        'data' => $data
    );
    echo json_encode($json);exit;
}