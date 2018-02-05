<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/Pump/css/common.css">
    <title>告警参数上下限设置</title>
</head>
<body>
<div class="layui-container">
    <br/>
    <div class="layui-row">
        <div class="layui-col-xs12">
            <fieldset class="layui-elem-field">
                <legend>监测数据上下限设置</legend>
                <div class="layui-field-box">
                    请在相应单元格点击输入数据限值，按"Enter"键保存
                    <table class="layui-table" lay-data="{id:'set_limit'}" lay-filter="set_limit">
                        <thead>
                        <tr>
                            <!-- field为定位和选择作用，edit设置是否可编辑 -->
                            <th lay-data="{field:'data_device'}">监测项目</th>
                            <th lay-data="{field:'data_type'}">监测参数</th>
                            <th lay-data="{field:'上限', edit: 'text'}">参数上限</th>
                            <th lay-data="{field:'下限', edit: 'text'}">参数下限</th>
                            <th lay-data="{field:'单位'}">单位</th>
                            <th lay-data="{field:'set_time'}">上次修改时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1#缓冲水池</td>
                            <td>水位</td>
                            <td>5</td>
                            <td>1</td>
                            <td>m</td>
                            <td>2018-02-02 14：56</td>
                        </tr>
                        <tr>
                            <td>2#原水池</td>
                            <td>水位</td>
                            <td>5</td>
                            <td>1</td>
                            <td>m</td>
                            <td>2018-02-02 14：57</td>
                        </tr>
                        <tr>
                            <td>3#污水池</td>
                            <td>水位</td>
                            <td>3</td>
                            <td>0</td>
                            <td>m</td>
                            <td>2018-02-02 14：57</td>
                        </tr>
                        <tr>
                            <td>1#水泵</td>
                            <td>出水压力</td>
                            <td>4</td>
                            <td>0.8</td>
                            <td>Mpa</td>
                            <td>2018-02-02 14：58</td>
                        </tr>
                        <tr>
                            <td>2#水泵</td>
                            <td>出水压力</td>
                            <td>4</td>
                            <td>0.8</td>
                            <td>Mpa</td>
                            <td>2018-02-02 14：58</td>
                        </tr>
                        <tr>
                            <td>1#水管</td>
                            <td>出水流量</td>
                            <td>80</td>
                            <td>0</td>
                            <td>L/S</td>
                            <td>2018-02-02 14：58</td>
                        </tr>
                        <tr>
                            <td>2#水管</td>
                            <td>出水流量</td>
                            <td>80</td>
                            <td>0</td>
                            <td>L/S</td>
                            <td>2018-02-02 14：58</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<script src="/Xixiu/Application/Home/View/Public/layui/layui.js" charset="utf-8"></script>
<script>
    layui.use('table', function () {
        var table = layui.table; //单元格编辑为动态表格功能，需转化

        var $ = layui.$, active = {
            parseTable: function () {
                table.init('set_limit', { //转化静态表格
                    //height: 'full-500'
                });
            }
        };
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';

        //监听单元格编辑
        table.on('edit(set_limit)', function (obj) {
            var value = obj.value //得到修改后的值
                , data = obj.data //得到所在行所有键值
                , field = obj.field; //得到字段
            layer.msg('[' + data.data_device + ' ' + data.data_type + '] ' + ' ' + field + ' 设置为：' + value);
        });
    });
</script>
</body>
</html>