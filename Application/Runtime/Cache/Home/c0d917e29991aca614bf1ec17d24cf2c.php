<?php if (!defined('THINK_PATH')) exit();?><div class="subNavBox">
    <ul>
        <li>
            <div class="subNav current"><a href="javascript:;">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></div>
            <!-- <ul class="navContent" style="display:block">
                <li><a href="#" class="currentNav" onclick="clickURL(this)">实时状态</a></li>
                <li><a href="#" onclick="clickURL(this)">控制功能</a></li>
                <li><a href="#" onclick="clickURL(this)">实时告警</a></li>
            </ul> -->
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">设置功能<i class="layui-icon">&#xe602;</i></a></div>
             <ul class="navContent">
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-bell-o fa-lg"></i>&nbsp;&nbsp;告警数据上下限</a></li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-support fa-lg"></i>&nbsp;&nbsp;自动控制参数</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">报警管理<i class="layui-icon">&#xe602;</i></a></div>
             <ul class="navContent">
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-bell-slash-o fa-lg" style="color: red;"></i>&nbsp;&nbsp;未处理报警</a>
                </li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-history fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;历史报警</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">数据统计<i class="layui-icon">&#xe602;</i></a></div>
             <ul class="navContent" kit-navbar>
                <li><a href="javascript:;" data-url="form.html" data-icon="fa-user" data-title="表单" kit-target data-id='2' onclick="clickURL(this)"><i class="fa fa-spinner fa-lg"></i>&nbsp;&nbsp;检测数据报表</a></li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-wrench fa-lg"></i>&nbsp;&nbsp;设备数据报表</a></li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-list-ul fa-lg"></i>&nbsp;&nbsp;操作记录</a></li>
            </ul>
        </li>
    </ul>
</div>