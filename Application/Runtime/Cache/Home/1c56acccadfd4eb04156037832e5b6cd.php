<?php if (!defined('THINK_PATH')) exit();?><div class="subNavBox">
    <ul>
        <li>
            <div class="subNav current"><a href="javascript:;" onclick="Goto(this);">实时监控<i class="layui-icon">&#xe61a;</i></a>
            </div>
            <ul class="navContent" style="display:block">
                <li><a href="#" class="currentNav" onclick="clickURL(this)"><i class="fa fa-power-off fa-lg"></i>&nbsp;&nbsp;设备控制</a></li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-flask fa-lg"></i>&nbsp;&nbsp;工艺控制</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">视频监控<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent">
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-play-circle-o fa-lg"></i>&nbsp;&nbsp;视频展示</a></li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">报警管理<i
                    class="layui-icon">&#xe602;</i></a></div>
            <ul class="navContent">
                <li><a href="#" onclick="clickURL(this)"><i class="layui-icon" style="font-size: 20px;">&#xe628;</i>&nbsp;&nbsp;设备报警</a>
                </li>
                <li><a href="#" onclick="clickURL(this)"><i class="layui-icon" style="font-size: 20px;">&#xe857;</i>&nbsp;&nbsp;数据异常报警</a>
                </li>
                <li><a href="#" onclick="clickURL(this)"><i class="layui-icon" style="font-size: 20px;">&#xe6b2;</i>&nbsp;&nbsp;闯入报警</a>
                </li>
                <li><a href="#" onclick="clickURL(this)"><i class="layui-icon" style="font-size: 20px;">&#xe756;</i>&nbsp;&nbsp;现场环境报警</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="subNav"><a href="javascript:;" onclick="Goto(this);">数据统计<i class="layui-icon">&#xe602;</i></a>
            </div>
            <ul class="navContent">
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-database fa-lg"></i>&nbsp;&nbsp;设备监控数据</a></li>
                <li><a href="#" onclick="clickURL(this)"><i class="fa fa-cube fa-lg"></i>&nbsp;&nbsp;工艺参数数据</a></li>
            </ul>
        </li>
    </ul>
</div>