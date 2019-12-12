<?php 
namespace app\admin\validate;
use think\Validate;
class Team extends Validate{
	//规则
	protected $rule = [
		'name' => 'require',
		'position' => 'require',
		'content' => 'require',
	];
	//信息
	protected $message = [
		'title.require' => '姓名必填',
		'title.require' => '职务必填',
		'title.require' => '简介必填'
	];
	//场景
	protected $scene = [

		'add' =>['title'],
		'upd' =>['title']

	];
}