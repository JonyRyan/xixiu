<?php
return array(
	//'配置项'=>'配置值'

    /* 数据库设置 */
    /*'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    //'DB_HOST'               =>  '115.28.86.143', // 服务器地址
    //'DB_NAME'               =>  'mjwater',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8*/

	'TMPL_PARSE_STRING'     => array(
		'__JS__'               =>  __ROOT__.'/Application/Home/View/Public/js',
		'__CSS__'              =>  __ROOT__.'/Application/Home/View/Public/css',
		'__IMG__'              =>  __ROOT__.'/Application/Home/View/Public/img',
        '__PLUG__'             =>  __ROOT__.'/Application/Home/View/Public/plug',
        '__LAYUI__'            =>  __ROOT__.'/Application/Home/View/Public/layui',
        '__BUILD__'            =>  __ROOT__.'/Application/Home/View/Public/build',
        '__PumpCSS__'          =>  __ROOT__.'/Application/Home/View/Public/Pump/css',
        '__PumpJS__'           =>  __ROOT__.'/Application/Home/View/Public/Pump/js',
        '__PumpIMG__'          =>  __ROOT__.'/Application/Home/View/Public/Pump/img',
        '__PumpPLUG__'         =>  __ROOT__.'/Application/Home/View/Public/Pump/plug',
        '__ShuiCSS__'          =>  __ROOT__.'/Application/Home/View/Public/Shui/css',
        '__ShuiJS__'           =>  __ROOT__.'/Application/Home/View/Public/Shui/js',
        '__ShuiIMG__'          =>  __ROOT__.'/Application/Home/View/Public/Shui/img',
        '__ShuiPLUG__'         =>  __ROOT__.'/Application/Home/View/Public/Shui/plug',

		)
);