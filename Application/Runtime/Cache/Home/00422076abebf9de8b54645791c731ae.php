<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/common.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/data_measure.css">
    <title>监测数据报表</title>
</head>
<body>
<div class="layui-container">
    <br/>
    <div class="layui-row">
        <div class="layui-col-xs4">
            <button class="layui-btn layui-btn-fluid" onclick="showPool()">水池水位</button>
        </div>
        <div class="layui-col-xs4">
            <button class="set-mgn layui-btn layui-btn-fluid" onclick="showPressure()">出水压力</button>
        </div>
        <div class="layui-col-xs4">
            <button class="set-mgn2 layui-btn layui-btn-fluid" onclick="showFlow()">出水流量</button>
        </div>
    </div>
    <hr>
    <div class="layui-row" id="data_pool">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>缓冲水池水位图表</legend>
                <div class="pool_level layui-field-box">
                    <div id="pool1"></div>
                </div>
            </fieldset>
        </div>
        <hr>
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>原水池水位图表</legend>
                <div class="pool_level layui-field-box">
                    <div id="pool2"></div>
                </div>
            </fieldset>
        </div>
        <hr>
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>污水池水位图表</legend>
                <div class="pool_level layui-field-box">
                    <div id="pool3"></div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="layui-row" id="data_pressure">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>出水压力图表</legend>
                <div class="water_pressure layui-field-box">
                    <div id="pressure1"></div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="layui-row" id="data_flow">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>出水流量图表</legend>
                <div class="water_flow layui-field-box">
                    <div id="flow1"></div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<script src="/Xixiu/Application/Home/View/Public/plug/jquery.js" charset="utf-8"></script>
<script src="/Xixiu/Application/Home/View/Public/Pump/plug/echarts.min.js" charset="utf-8"></script>
<script src="/Xixiu/Application/Home/View/Public/Pump/js/data_measure.js" charset="utf-8"></script>
</body>
</html>