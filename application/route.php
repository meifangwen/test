<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::group("admin",function(){
	Route::any('/public/login','admin/public/login');
	Route::any('/public/logout','admin/public/logout');
	Route::any('/index/index','admin/index/index');
	Route::any('/index/upd','admin/index/upd');
	Route::any('/user/index','admin/user/index');
	Route::any('/user/titles','admin/user/titles');
	Route::any('/user/add','admin/user/add');
	Route::any('/user/upd','admin/user/upd');
	Route::any('/user/del','admin/user/del');
	Route::any('/news/index','admin/news/index');
	Route::any('/news/is_show','admin/news/is_show');
	Route::any('/news/add','admin/news/add');
	Route::any('/news/upd','admin/news/upd');
	Route::any('/news/del','admin/news/del');
	Route::any('/banner/index','admin/banner/index');
	Route::any('/banner/add','admin/banner/add');
	Route::any('/banner/unicode2utf8','admin/banner/unicode2utf8');
	Route::any('/banner/fileupload','admin/banner/fileupload');
	Route::any('/banner/is_show','admin/banner/is_show');
	Route::any('/banner/del','admin/banner/del');
	Route::any('/banner/upd','admin/banner/upd');
	Route::any('/banner/delpic','admin/banner/delpic');
	Route::any('/system/index','admin/system/index');
	Route::any('/system/index','admin/system/index');
	Route::any('/notice/index','admin/notice/index');
	Route::any('/notice/add','admin/notice/add');
	Route::any('/notice/upd','admin/notice/upd');
	Route::any('/notice/del','admin/notice/del');
	Route::any('/notice/is_show','admin/notice/is_show');
	Route::any('/messages/index','admin/messages/index');
	Route::any('/messages/upd','admin/messages/upd');
	Route::any('/messages/del','admin/messages/del');
	Route::any('/messages/is_show','admin/messages/is_show');
	Route::any('/team/index','admin/team/index');
	Route::any('/team/add','admin/team/add');
	Route::any('/team/upd','admin/team/upd');
	Route::any('/team/del','admin/team/del');
	Route::any('/plan/index','admin/plan/index');
	Route::any('/plan/upd','admin/plan/upd');
	Route::any('/plan/del','admin/plan/del');
	Route::any('/trend/index','admin/trend/index');
	Route::any('/trend/add','admin/trend/add');
	Route::any('/trend/upd','admin/trend/upd');
	Route::any('/trend/del','admin/trend/del');
	Route::any('/events/index','admin/events/index');
    Route::any('/events/add','admin/events/add');
	Route::any('/events/upd','admin/events/upd');
    Route::any('/events/del','admin/events/del');
    Route::any('/events/is_show','admin/events/is_show');

});

Route::group("home",function(){
    Route::any('/about/index','home/about/index');
	Route::any('/index/index','home/index/index');
	Route::any('/index/ajaxSendMessage','home/index/ajaxSendMessage');
	Route::any('/messages/index','home/messages/index');
	Route::any('/messages/submit','home/messages/submit');
	Route::any('/trend/index','home/trend/index');
	Route::any('/news/index','home/news/index');
	Route::any('/news/ajaxPage','home/news/ajaxPage');
    Route::get('/news/detail', 'home/news/detail');
	Route::any('/plan/index','home/plan/index');
	Route::any('/relation/index','home/relation/index');

});

Route::group("",function(){
	Route::any('','home/index/index');
});

Route::group("home_en",function(){
	Route::any('/index/index','home_en/index/index');
});
