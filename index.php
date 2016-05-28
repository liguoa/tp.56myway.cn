<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 添加slog
include './SocketLog/php/slog.function.php';
slog(array(
'enable'=>true,//是否打印日志的开关
'host'=>'localhost',//websocket服务器地址，默认localhost
'optimize'=>true,//是否显示利于优化的参数，如果运行时间，消耗内存等，默认为false
'show_included_files'=>false,//是否显示本次程序运行加载了哪些文件，默认为false
'error_handler'=>false,//是否接管程序错误，将程序错误显示在console中，默认为false
'force_client_id'=>'',//日志强制记录到配置的client_id,默认为空
'allow_client_ids'=>array('liguo_c81243')////限制允许读取日志的client_id，默认为空,表示所有人都可以获得日志。
)
,'config');
echo notice;//制造一个notice报错
slog('这里是输出的一般日志');
// 亲^_^ 后面不需要任何代码了 就是如此简单
