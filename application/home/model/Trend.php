<?php 
namespace app\home\model; //定义当前类所在的命名空间
use think\Model; 	//引入Controller核心控制器
use think\Db;
class Trend extends Model{

	//主键
	protected $pk = "id";
	//时间戳维护
	protected $autoWriteTimestamp = true;

    /**
     * 获取banner中文
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getTrendBanner(){
        $where['is_show'] = 0;
        $where['type'] = 'suo';
        return Db::name(banner)->where($where)->select();
    }


    public function getTrendList(){
        $indexData = Db::name('trend')->field('part,title,content,src')->select();
        $arr = array();
        foreach ($indexData as $key => $value) {
            foreach ($value as $k => $v) {
                $arr[$value['part']][$k] = $v;
            }
        }
        return getLangContent($arr);
    }
}