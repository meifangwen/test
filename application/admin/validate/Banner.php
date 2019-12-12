<?php 
namespace app\admin\validate;
use think\Validate;
class Banner extends Validate{
	//规则
	protected $rule = [
		'title' => 'require',
		'src' => 'require',
	];
	//信息
	protected $message = [
		'title.require' => '标题必填',
		'src.require' => '请上传图片',
	];
	//场景
	protected $scene = [
		'add' =>['title','src'],
		'upd' =>['title','src'],
	];
}