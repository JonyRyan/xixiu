<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/data_device.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/common.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/layui/css/layui.css">
    <title>设备数据报表</title>
</head>
<body>
<div class="layui-container">
    <br/>
    <div class="layui-row">
        <div class="layui-col-xs6">
            <button class="layui-btn layui-btn-fluid " onclick="showPump()">水泵</button>
        </div>
        <div class="layui-col-xs6">
            <button class="set-mgn layui-btn layui-btn-fluid" onclick="showValve()">阀门</button>
        </div>
    </div>
    <hr>
    <div class="layui-row" id="data_pump">
        <div class="layui-col-xs7">
            <!-- <div class="">水泵1启停图表</div> -->
            <fieldset class="layui-elem-field">
                <legend>1#水泵启停图表</legend>
                <div class="pump_status layui-field-box" id="pump_status1">
                </div>
            </fieldset>
        </div>
        <div class="layui-col-xs5">
            <fieldset class="layui-elem-field">
                <legend>1#水泵参数</legend>
                <div class="layui-field-box">
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>参数</th>
                                <th>值</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>上次工作时间</td>
                                <td>2018/01/30 13:00-13:06</td>
                            </tr>
                            <tr>
                                <td>累计工作时间</td>
                                <td>
                                    0小时06分钟
                                    <input type="text" class="inp-fluid" id="pump_work1" placeholder="选择时间范围">
                                </td>
                            </tr>
                            <tr>
                                <td>上次检修时间</td>
                                <td>2018/01/28 10:00 - 2018/01/28 17:00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </fieldset>
        </div>
        <hr>
        <div class="layui-col-xs7">
            <!-- <div class="">水泵1启停图表</div> -->
            <fieldset class="layui-elem-field">
                <legend>2#水泵启停图表</legend>
                <div class="pump_status layui-field-box" id="pump_status2">
                </div>
            </fieldset>
        </div>
        <div class="layui-col-xs5">
            <fieldset class="layui-elem-field">
                <legend>2#水泵参数</legend>
                <div class="layui-field-box">
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>参数</th>
                                <th>值</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>上次工作时间</td>
                                <td>2018/01/30 13:00-13:12</td>
                            </tr>
                            <tr>
                                <td>累计工作时间</td>
                                <td>
                                    0小时12分钟
                                    <input type="text" class="inp-fluid" id="pump_work2" placeholder="选择时间范围">
                                </td>
                            </tr>
                            <tr>
                                <td>上次检修时间</td>
                                <td>2018/01/29 10:00 - 2018/01/29 17:00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="layui-row" id="data_valve">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>水阀启停图表</legend>
                <div class="valve_status layui-field-box" id="valve_status1">
                </div>
            </fieldset>
        </div>
    </div>
</div>
<script src="/Xixiu/Application/Home/View/Public/layui/layui.js"></script>
<script src="/Xixiu/Application/Home/View/Public/plug/jquery.js"></script>
<script src="/Xixiu/Application/Home/View/Public/Pump/plug/echarts.min.js"></script>
<script src="/Xixiu/Application/Home/View/Public/Pump/js/data_device.js"></script>
<script>
    layui.use('laydate', function () {
        var laydate = layui.laydate;
        laydate.render({
            elem: '#pump_work1'
            , type: 'datetime'
            , range: true
        });
        laydate.render({
            elem: '#pump_work2'
            , type: 'datetime'
            , range: true
        });
    });
</script>
</body>
</html>