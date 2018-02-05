<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/common.css">
    <title>操作记录</title>
</head>
<body>
<div class="layui-container">
    <br/>
    <div class="layui-row">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>历史操作记录</legend>
                <div class="operate_his layui-field-box">
                    表格（操作用户、操作类型、操作时间）
                    <!-- <div id="operate_his1"></div> -->
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>操作用户</th>
                                <th>操作参数</th>
                                <th>操作类型</th>
                                <th>时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>4</td>
                                <td>XX管理员</td>
                                <td>1#水泵</td>
                                <td>关闭</td>
                                <td>2018-02-02 14：56</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>XX管理员</td>
                                <td>1#水泵</td>
                                <td>打开</td>
                                <td>2018-02-02 14：32</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>XX管理员</td>
                                <td>1#水管</td>
                                <td>关闭</td>
                                <td>2018-02-02 14：21</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>XX管理员</td>
                                <td>1#水管</td>
                                <td>打开</td>
                                <td>2018-02-02 14：01</td>
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