<?php if (!defined('THINK_PATH')) exit();?><div class="subNavBox">
    <ul>
        <li>
            <div class="subNav current"><a href="javascript:;" onclick="Goto(this);">实时监控<i class="layui-icon">&#xe61a;</i></a>
            </div>
            <ul class="navContent" style="display:block">
                <li><a href="#" class="currentNav" onclick="clickURL(this)"><i class="fa fa-shower fa-lg"></i>&nbsp;&nbsp;水位监控</a></li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-asterisk fa-lg"></i>&nbsp;&nbsp;雨量监控</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">报警管理<i
                    class="layui-icon">&#xe602;</i></a></div>
            <ul class="navContent">
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-bell-slash-o fa-lg"></i>&nbsp;&nbsp;未处理报警</a>
                </li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-history fa-lg"></i>&nbsp;&nbsp;历史记录</a>
                </li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-cogs fa-lg"></i>&nbsp;&nbsp;参数设置</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">数据统计<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent">
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-bar-chart-o fa-lg"></i>&nbsp;&nbsp;水位统计</a></li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-pie-chart fa-lg"></i>&nbsp;&nbsp;雨量统计</a></li>
            </ul>
        </li>
    </ul>
</div>