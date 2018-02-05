<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/xixiu/Application/Home/View/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/xixiu/Application/Home/View/Public/css/common.css">
    <link rel="stylesheet" href="/xixiu/Application/Home/View/Public/build/css/app.css">
    <title>首页</title>
</head>
<body>
<!--header头部-->
<div class="header">
    <div class="logo">
        <img src="/xixiu/Application/Home/View/Public/img/logo.png">
        <span>西秀区饮水安全监控及信息化</span>
    </div>
    <div class="user">
        <ul class="layui-nav" lay-filter="">
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="layui-icon">&#xe612;</i>&nbsp;&nbsp;Admin</a>
                <dl class="layui-nav-child"> <!-- 二级菜单 -->
                    <dd><a href="">注销登录</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav">
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="layui-icon">&#x1006;</i>&nbsp;&nbsp;退出</a>
            </li>
        </ul>
    </div>
</div>
<!--main主要内容-->
<div class="main">
    <!--left状态栏-->
    <div class="left">
        <div class="left_menu">
            <nav>
                <a href="#" style="margin-top: 20px;border-top:2px solid #3b4c67">
                    <img src="/xixiu/Application/Home/View/Public/img/d1.png" class="d1">
                    <span>水源地</span>
                </a>
                <a href="#">
                    <img src="/xixiu/Application/Home/View/Public/img/b1.png" class="b1">
                    <span>XX泵站</span>
                </a>
                <a href="#" class="current">
                    <img src="/xixiu/Application/Home/View/Public/img/s1.png" class="s1">
                    <span>XX水厂</span>
                </a>
                <a href="#">
                    <img src="/xixiu/Application/Home/View/Public/img/g1.png" class="g1">
                    <span>管&nbsp;&nbsp;网</span>
                </a>
            </nav>
        </div>
        <div class="left_nav" id="left_nav">
        </div>
    </div>
    <!--right内容-->
    <div class="right">
        <div id="container"></div>
    </div>
</div>

<!--footer底部-->
<div class="footer">
    <span>成都纵横智控科技有限公司 &nbsp;&nbsp;  |  &nbsp;&nbsp; 四川省成都市高新区益州大道888号1-1-1915  &nbsp;&nbsp; | &nbsp;&nbsp; 联系电话：028-83268936</span>
</div>

<script src="/xixiu/Application/Home/View/Public/layui/layui.js"></script>
<script src="/xixiu/Application/Home/View/Public/plug/jquery.js"></script>
<script src="/xixiu/Application/Home/View/Public/js/common.js"></script>
<script type="text/javascript">
    $.get("/Xixiu/Home/ShuiChang/Shui_nav.html", function (data) {
        $("#left_nav").html(data);
    });

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
    layui.use('element', function () {
        var element = layui.element;
    })
</script>
</body>
</html>