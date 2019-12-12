<?php 
namespace app\admin\validate;
use think\Validate;
class User extends Validate{
	//规则
	protected $rule = [
		'name' => 'require|unique:user',
		'password' => 'require'
	];
	//信息
	protected $message = [
		'name.require' => '用户名必填',
		'name.unique' => '用户名已存在',
		'password.require' => '密码必填'
	];
	//场景
	protected $scene = [
		'login' =>['name'=>"require",'password'],
		'add' =>['name','password'],
		'upd' =>['password']
	];
}