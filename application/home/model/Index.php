<?php 
namespace app\home\model; //定义当前类所在的命名空间
use think\Model; 	//引入Controller核心控制器
use think\Db;
use think\Validate;
class Index extends Model{

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
    public function getBanner(){
        $where['is_show'] = 0;
        $where['type'] = 'index';
        return Db::name(banner)->where($where)->select();
    }

    public function getIndexList(){
        $indexData = Db::name('index')->field('part,title,title_en,content,src')->select();
        $arr = array();
        foreach ($indexData as $key => $value) {
            foreach ($value as $k => $v) {
                $arr[$value['part']][$k] = $v;
            }
        }
        return getLangContent($arr);
    }

    /**
     * 提交消息
     * @param $postData
     * @return false|string
     */
    public function sendMessage($postData){
        //参数验证
        $validate = new Validate([
            'name' => 'require',
            'phone' => 'require|regex:/^1[3456789]\d{9}$/ims',
            'content' => 'require',
        ], [
            'name.require' => '姓名必填',
            'phone.require' => '手机号必填',
            'phone.regex' => '请输入正确的手机号',
            'content.require' => '内容必填'
        ]);
        if ($validate->check($postData) === false) {
            echo jsonReturn(-1,$validate->getError());
        }
        //添加数据
        $return = Db::name('messages')->insert($postData);
        if($return>0){
            echo jsonReturn(1,'提交成功');
        }else{
            echo jsonReturn(-1,'提交失败');
        }
    }
}