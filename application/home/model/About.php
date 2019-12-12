<?php
namespace app\home\model; //定义当前类所在的命名空间
use think\Model; 	//引入Controller核心控制器
use think\Db;
use think\Validate;
class About extends Model{
    /**
     * 获取企业大事记
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getEvents(){
        $events = Db::name('events')->where('is_show',0)->order('id asc,date asc')->select();
        //将数组分割为每4个一组
        $events = array_chunk($events,4);

        foreach ($events as $key => $value) {
            foreach ($value as $k => $v) {
                if($k==1 && isset($value[$k+1])){
                    $events[$key][$k] = $value[$k+1];
                }elseif($k==2 && isset($value[$k-1])){
                    $events[$key][$k] = $value[$k-1];
                }
            }
        }

        return $events;
    }

}