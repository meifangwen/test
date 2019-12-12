<?php 
namespace app\admin\validate;
use think\Validate;
class Notice extends Validate{
	//规则
	protected $rule = [
		'title' => 'require',
	];
	//信息
	protected $message = [
		'title.require' => '标题必填',
	];
	//场景
	protected $scene = [

		'add' =>['title'],
		'upd' =>['title']

	];
}