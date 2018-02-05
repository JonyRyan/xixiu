<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/common.css">
    <title>历史警报管理</title>
</head>
<body>
<div class="layui-container">
    <br/>
    <div class="layui-row">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>历史告警记录</legend>
                <div class="warn_his layui-field-box">
                    <!-- 表格（id、告警设备、告警类型、警报状态、告警时间） -->
                    <!-- <div id="operate_his1"></div> -->
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>告警设备</th>
                                <th>参数</th>
                                <th>告警类型</th>
                                <th>警报状态</th>
                                <th>时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>5</td>
                                <td>1#水管</td>
                                <td>压力</td>
                                <td>超过最大值</td>
                                <td>已解除</td>
                                <td>2018-02-02 14：01</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>1#水管</td>
                                <td>流量</td>
                                <td>超过最大值</td>
                                <td>已解除</td>
                                <td>2018-02-02 14：00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>1#缓冲水池</td>
                                <td>水位</td>
                                <td>低于最小值</td>
                                <td>已解除</td>
                                <td>2018-02-02 13：36</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>3#原水池</td>
                                <td>水位</td>
                                <td>低于最小值</td>
                                <td>已解除</td>
                                <td>2018-02-02 12：48</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1#原水池</td>
                                <td>水位</td>
                                <td>低于最小值</td>
                                <td>已解除</td>
                                <td>2018-02-01 09：22</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
</body>
</html>