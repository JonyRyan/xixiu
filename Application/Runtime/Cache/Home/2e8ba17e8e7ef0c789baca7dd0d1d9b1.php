<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/build/css/app.css">
</head>
<body>
<div class="subNavBox">
    <ul>
        <li>
            <div class="subNav current"><a href="javascript:;">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></div>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">实时监控<i
                    class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent"  kit-navbar>
                <li>
                    <a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/control_device.html',icon:'fa-power-off fa-lg',title:'设备监控',id:'2'}" onclick="clickURL(this)"><i class="fa fa-power-off fa-lg"></i>&nbsp;&nbsp;设备控制</a>
                </li>
                <li>
                    <a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/control_craft.html',icon:'fa-flask fa-lg',title:'工艺控制',id:'3'}" onclick="clickURL(this)"><i class="fa fa-flask fa-lg"></i>&nbsp;&nbsp;工艺控制</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">视频监控<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent" kit-navbar>
                <li>
                    <a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/video.html',icon:'fa-play-circle-o fa-lg',title:'视频展示',id:'4'}" onclick="clickURL(this)"><i class="fa fa-play-circle-o fa-lg"></i>&nbsp;&nbsp;视频展示</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">报警管理<i
                    class="layui-icon">&#xe602;</i></a></div>
            <ul class="navContent" kit-navbar>
                <li>
                    <a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/alarm_device.html',icon:'&#xe628;',title:'设备报警',id:'5'}" onclick="clickURL(this)"><i class="layui-icon" style="font-size: 20px;">&#xe628;</i>&nbsp;&nbsp;设备报警</a>
                </li>
                <li>
                    <a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/alarm_data.html',icon:'&#xe857;',title:'数据异常报警',id:'6'}" onclick="clickURL(this)"><i class="layui-icon" style="font-size: 20px;">&#xe857;</i>&nbsp;&nbsp;数据异常报警</a>
                </li>
                <li>
                    <a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/alarm_scene.html',icon:'&#xe756;',title:'现场环境报警',id:'7'}" onclick="clickURL(this)"><i class="layui-icon" style="font-size: 20px;">&#xe756;</i>&nbsp;&nbsp;现场环境报警</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">数据统计<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent" kit-navbar>
                <li><a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/count_device.html',icon:'fa-database fa-lg',title:'设备监控数据',id:'8'}" onclick="clickURL(this)"><i class="fa fa-database fa-lg"></i>&nbsp;&nbsp;设备监控数据</a></li>
                <li><a href="javascript:;" kit-target data-options="{url:'/Xixiu/Home/ShuiChang/count_craft.html',icon:'fa-cube fa-lg',title:'工艺参数数据',id:'9'}" onclick="clickURL(this)"><i class="fa fa-cube fa-lg"></i>&nbsp;&nbsp;工艺参数数据</a></li>
            </ul>
        </li>
    </ul>
</div>
<script type="text/javascript">
    layui.config({
        base: '/Xixiu/Application/Home/View/Public/build/js/'
    }).use(['app'], function () {
        var app = layui.app;
        $ = layui.jquery;
        layer = layui.layer;
        var height = $(window).height();
        var fhgt = $('.header').height();
        var foohgt = $('.footer').height();
        var iframeHgt = height - fhgt - foohgt - 30;
        $('#container').find('.layui-tab-title').html('');
        var navHtml = '<li class="layui-this"><i class="layui-icon">&#xe68e;</i> 首&nbsp;&nbsp;页</li>';
        $('#container').find('.layui-tab-title').append(navHtml);
        $('#container').find('.layui-tab-content').html('');
        $('#home').html('<div class="layui-tab-item layui-show"><iframe src="/Xixiu/Home/ShuiChang/home.html" frameborder="0"></iframe></div>');
        $('#home').find('iframe').css('min-height', iframeHgt);
        //主入口
        app.set({
            type: 'iframe'
        }).init();
    });
</script>
</body>
</html>