<?php 
namespace app\admin\model; //定义当前类所在的命名空间
use think\Model; 	//引入Controller核心控制器
class User extends Model{

	//主键
	protected $pk = "id";
	//时间戳维护
	protected $autoWriteTimestamp = true;

	public function checkUser($username,$password){
		//定义一个判断的where条件
		$where = [
			'name' => $username,
			'password' => md5($password.config('password_salt'))
		];
		$userInfo =$this->where($where)->find();
		if($userInfo){
			//把用户的信息写入到session中进行保存
			session('name',$userInfo['name']);
			session('id',$userInfo['id']);
			// halt($_SESSION);
			// echo "拥有该用户,登陆成功";
			return true;
		}else{
			//失败返回false
			return false;
		}
	}

	public static function init(){

		User::event("before_insert",function($user){
			//上面的形参$user是表单提交过来的当前模型的数据对象
			// halt($user);
			$user["password"] = md5($user["password"].config("password_salt"));
		});

		//编辑的前事件，实现密码的加密处理
		User::event('before_update',function($user){
		
			//或者两者密码相等，需要对密码进行MD5加密
			$user['password'] = md5($user['password'].config('password_salt'));
		});
	}
}
