<?php 
namespace app\home\validate;
use think\Validate;
class Messages extends Validate{
	//规则
	protected $rule = [
		'name' => 'require',
		'phone' => 'require',
		'content' => 'require',
	];
	//信息
	protected $message = [
		'name.require' => '姓名必填',
		'phone.require' => '手机号必填',
		'content.require' => '内容必填'
	];
	//场景
	protected $scene = [

		'submit' =>["name","email","phone","content"]

	];
}