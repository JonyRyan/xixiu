<?php
namespace Home\Controller;
use Think\Controller;
class PumpStationController extends Controller {
    public function  home(){
        $this->display();
    }
    public function data_device(){         //设备数据报表
        $this->display();
    }
    public function data_measure(){        //测量数据报表
        $this->display();
    }
    public function data_operate(){        //操作记录
        $this->display();
    }

    public function set_control(){         //控制参数设置
        $this->display();
    }
    public function set_warnings(){        //告警上下限参数设置
        $this->display();
    }

    public function warn_history(){        //历史警报
        $this->display();
    }
    public function warn_unprocessed(){    //未处理警报
        $this->display();
    }

}