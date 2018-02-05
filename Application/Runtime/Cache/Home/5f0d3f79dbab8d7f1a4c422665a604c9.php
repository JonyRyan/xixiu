<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>设备报警</title>
    <link rel="stylesheet" href="/Xixiu/Application/Home/View/Public/layui/css/layui.css">
</head>
<body>
<div class="layui-container">
    <div class="layui-fluid">
        <div class="layui-col-md12">
            <button class="layui-btn" id="test" style="margin: 10px;">查看设备</button>
        </div>
        <div class="layui-col-md12" id="table">
            <table class="layui-table">
                <colgroup>
                    <col width="150">
                    <col width="200">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>设备名称</th>
                    <th>加入时间</th>
                    <th>开关状态</th>
                    <th>报警原因</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>水位监测器</td>
                    <td>2018-1-1</td>
                    <td>
                        <div class="layui-unselect layui-form-checkbox" lay-skin=""><span>关</span><i
                                class="layui-icon"></i></div>
                    </td>
                    <td style="color: red">水位异常</td>
                </tr>
                <tr>
                    <td>水位监测器</td>
                    <td>2018-1-12</td>
                    <td>
                        <div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin=""><span>开</span><i
                                class="layui-icon"></i></div>
                    </td>
                    <td style="color: red">水位异常</td>
                </tr>
                <tr>
                    <td>加氯机</td>
                    <td>2018-1-14</td>
                    <td>
                        <div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin=""><span>开</span><i
                                class="layui-icon"></i></div>
                    </td>
                    <td style="color: red">工作异常</td>
                </tr>
                <tr>
                    <td>加压泵组</td>
                    <td>2018-1-14</td>
                    <td>
                        <div class="layui-unselect layui-form-checkbox layui-form-checked" lay-skin=""><span>开</span><i
                                class="layui-icon"></i></div>
                    </td>
                    <td style="color: red">工作异常</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/Xixiu/Application/Home/View/Public/layui/layui.js"></script>
<script type="text/javascript">
    layui.use('layer', function(){
        var layer = layui.layer;
        $ = layui.jquery;
        $('#test').on('click',function () {
            var ii = layer.load();
            layer.open({
                type: 1,//1（页面层）2（iframe层）3（加载层）
                title: "查看设备",
                maxmin:true,
                area: ['600px','400px'],
                shadeClose: true,//点击遮罩关闭
                content: $('#table'),///project/Shui/Alarm/test.html
                success: function(layero, index){
                    layer.close(ii);
                    //console.log(layero, index);//回调函数
                }
            })
        });
    });
    //var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
    //parent.layer.close(index);
</script>
</body>
</html>