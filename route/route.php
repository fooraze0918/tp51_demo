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

use think\facade\Route;

//Route::rule('/', 'index/index/index');
//Route::rule('login', 'index/login/index');
//Route::rule('verify', 'index/verify');
//Route::rule('logout', 'index/login/logout');


Route::rule('/', 'index/index/index');
Route::rule('login', 'index/login/index');
Route::rule('verify', 'index/login/verify');
Route::rule('logout', 'index/login/logout');

return [

];
