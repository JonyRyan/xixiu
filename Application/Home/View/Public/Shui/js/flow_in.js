var dom = document.getElementById("flow_in");
var myChart = echarts.init(dom);
var app = {};
option = null;
var category = [];
var dottedBase = +new Date();
var lineData = ['0.8','0.72','0.78','0.75','0.76','0.79','0.8','0.81','0.82','0.83'];

for (var i = 0; i < 10; i++) {
    var date = new Date(dottedBase += 3600 * 24 * 1000);
    category.push([
        date.getFullYear()-1,
        date.getMonth(),
        date.getDate()
    ].join('-'));
}

option = {
    title: {
        /*text: '进厂流量图',*/
        subtext:'虚拟数据'
    },
    tooltip : {
        trigger: 'axis',
        axisPointer: {
            type: 'cross',
            label: {
                backgroundColor: '#6a7985'
            }
        }
    },
    legend: {
        data:['进厂流量']
    },
    toolbox: {
        show: true,
        feature: {
            dataView: {readOnly: false},
            saveAsImage: {}
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : category
        }
    ],
    yAxis : [
        {
            type : 'value',
            axisLabel : {
                formatter: '{value} m³/s'
            }
        }
    ],
    series : [
        {
            name:'进厂流量',
            type:'line',
            itemStyle: {},
            areaStyle: {},
            data:lineData
        }
    ]
};
myChart.setOption(option, true);
//---自适应---
window.addEventListener("resize", function () {
    myChart.resize();
});