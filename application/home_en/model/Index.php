<?php 
namespace app\home_en\model; //定义当前类所在的命名空间
use think\Model; 	//引入Controller核心控制器
class Index extends Model{

	//主键
	protected $pk = "id";
	//时间戳维护
	protected $autoWriteTimestamp = true;


}