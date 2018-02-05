var dom = document.getElementById("flow_out");
var myChart = echarts.init(dom);
var app = {};
option = null;
var category = [];
var dottedBase = +new Date();
var lineData = ['0.69','0.71','0.72','0.73','0.721','0.7','0.69','0.68','0.69','0.7'];

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
        data:['出厂流量']
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
            name:'出厂流量',
            type:'line',
            itemStyle: {color: '#7cb9e8'},
            areaStyle: {color: '#7cb9e8'},
            data:lineData
        }
    ]
};
myChart.setOption(option, true);
//---自适应---
window.addEventListener("resize", function () {
    myChart.resize();
});