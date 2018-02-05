<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/common.css">
    <title>未处理警报</title>
</head>
<body>
<div class="layui-container">
    <br/>
    <div class="layui-row">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>未处理警报列表</legend>
                <div class="warn_new layui-field-box">
                    表格（id、告警设备、告警类型、警报状态、告警时间）
                    <!-- <div id="warn_new"></div> -->
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr class="layui-bg-orange">
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
                                <td>3</td>
                                <td>1#缓冲水池</td>
                                <td>水位</td>
                                <td>低于最小值</td>
                                <td>未解除</td>
                                <td>2018-02-12 14：28</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2#水管</td>
                                <td>压力</td>
                                <td>超过最大值</td>
                                <td>未解除</td>
                                <td>2018-02-12 14：26</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2#污水池</td>
                                <td>水位</td>
                                <td>低于最小值</td>
                                <td>未解除</td>
                                <td>2018-02-12 14：22</td>
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