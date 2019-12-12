<?php 
namespace app\admin\validate;
use think\Validate;
class Plan extends Validate{
	//规则
	protected $rule = [
		'title' => 'require',
		'content' => 'require',
		'src' => 'require'
	];
	//信息
	protected $message = [
		'title.require' => '标题必填',
		'content.require' => '内容必填',
		'src.require' => '上传文件不能为空',
	];
	//场景
	protected $scene = [
		'upd' =>["title","content","src"]
	];
}