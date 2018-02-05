// 按钮‘水池水位’——显示三个水池水位统计图表
function showPool() {
	$('#data_pool').css('display','inline');
	$('#data_pressure').css('display','none');
	$('#data_flow').css('display','none');
}
// 按钮‘出水压力’——显示出水压力统计图表
function showPressure() {
	$('#data_pool').css('display','none');
	$('#data_pressure').css('display','inline');
	$('#data_flow').css('display','none');
}
// 按钮‘出水流量’——显示出水流量统计图表
function showFlow() {
	$('#data_pool').css('display','none');
	$('#data_pressure').css('display','none');
	$('#data_flow').css('display','inline');
}


//(缓冲)水池1水位图表
 var pool1Chart = echarts.init(document.getElementById('pool1'));

		var dataAxis = ['缓冲', '水', '池', '：', '水', '位', '状', '态', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '];
		var data = [2.2, 1.8, 1.9, 2.3, 2.9, 3.3, 3.1, 2.2, 1.9, 2.3, 2.4, 2.3, 2.1, 2.2, 2.3, 2.3, 1.9, 1.2, 1.2, 2.2];
		var yMax = 5;
		var dataShadow = [];

		for (var i = 0; i < data.length; i++) {
		    dataShadow.push(yMax);
		}

		optionPL1 = {
		    title: {
		        text: '缓冲水池：水位状态',
		        subtext: '参数：水位（米）'
		    },
		    xAxis: {
		        data: dataAxis,
		        axisLabel: {
		            // inside: true,
		            textStyle: {
		                color: '#fff'
		            }
		        },
		        axisTick: {
		            show: false
		        },
		        axisLine: {
		            show: false
		        },
		        z: 10
		    },
		    yAxis: {
		        axisLine: {
		            show: false
		        },
		        axisTick: {
		            show: false
		        },
		        axisLabel: {
		            textStyle: {
		                color: '#999'
		            }
		        }
		    },
		    dataZoom: [
		        {
		            type: 'inside'
		        }
		    ],
		    series: [
		        { // For shadow
		            type: 'bar',
		            itemStyle: {
		                normal: {color: 'rgba(0,0,0,0.05)'}
		            },
		            barGap:'-100%',
		            barCategoryGap:'40%',
		            data: dataShadow,
		            animation: false
		        },
		        {
		            type: 'bar',
		            itemStyle: {
		                normal: {
		                    color: new echarts.graphic.LinearGradient(
		                        0, 0, 0, 1,
		                        [
		                            {offset: 0, color: '#83bff6'},
		                            {offset: 0.5, color: '#188df0'},
		                            {offset: 1, color: '#188df0'}
		                        ]
		                    )
		                },
		                emphasis: {
		                    color: new echarts.graphic.LinearGradient(
		                        0, 0, 0, 1,
		                        [
		                            {offset: 0, color: '#2378f7'},
		                            {offset: 0.7, color: '#2378f7'},
		                            {offset: 1, color: '#83bff6'}
		                        ]
		                    )
		                }
		            },
		            data: data
		        }
		    ]
		};

		// Enable data zoom when user click bar.
		var zoomSize = 6;
		pool1Chart.on('click', function (params) {
		    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
		    pool1Chart.dispatchAction({
		        type: 'dataZoom',
		        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
		        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
		    });
		});
		pool1Chart.setOption(optionPL1);

//(原)水池2水位图表
 var pool2Chart = echarts.init(document.getElementById('pool2'));

		var dataAxis = ['原', '水', '池', '：', '水', '位', '状', '态', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '];
		var data = [2.2, 1.8, 1.9, 2.3, 2.9, 2.3, 2.1, 2.2, 2.2, 2.3, 2.3, 2.3, 2.1, 2.2, 1.3, 2.3, 1.9, 1.2, 1.2, 2.2];
		var yMax = 5;
		var dataShadow = [];

		for (var i = 0; i < data.length; i++) {
		    dataShadow.push(yMax);
		}

		optionPL2 = {
		    title: {
		        text: '原水池：水位状态',
		        subtext: '参数：水位（米）'
		    },
		    xAxis: {
		        data: dataAxis,
		        axisLabel: {
		            // inside: true,
		            textStyle: {
		                color: '#fff'
		            }
		        },
		        axisTick: {
		            show: false
		        },
		        axisLine: {
		            show: false
		        },
		        z: 10
		    },
		    yAxis: {
		        axisLine: {
		            show: false
		        },
		        axisTick: {
		            show: false
		        },
		        axisLabel: {
		            textStyle: {
		                color: '#999'
		            }
		        }
		    },
		    dataZoom: [
		        {
		            type: 'inside'
		        }
		    ],
		    series: [
		        { // For shadow
		            type: 'bar',
		            itemStyle: {
		                normal: {color: 'rgba(0,0,0,0.05)'}
		            },
		            barGap:'-100%',
		            barCategoryGap:'40%',
		            data: dataShadow,
		            animation: false
		        },
		        {
		            type: 'bar',
		            itemStyle: {
		                normal: {
		                    color: new echarts.graphic.LinearGradient(
		                        0, 0, 0, 1,
		                        [
		                            {offset: 0, color: '#83bff6'},
		                            {offset: 0.5, color: '#188df0'},
		                            {offset: 1, color: '#188df0'}
		                        ]
		                    )
		                },
		                emphasis: {
		                    color: new echarts.graphic.LinearGradient(
		                        0, 0, 0, 1,
		                        [
		                            {offset: 0, color: '#2378f7'},
		                            {offset: 0.7, color: '#2378f7'},
		                            {offset: 1, color: '#83bff6'}
		                        ]
		                    )
		                }
		            },
		            data: data
		        }
		    ]
		};

		// Enable data zoom when user click bar.
		var zoomSize = 6;
		pool2Chart.on('click', function (params) {
		    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
		    pool2Chart.dispatchAction({
		        type: 'dataZoom',
		        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
		        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
		    });
		});
		pool2Chart.setOption(optionPL2);

//(污)水池3水位图表
 var pool3Chart = echarts.init(document.getElementById('pool3'));

		var dataAxis = ['污', '水', '池', '：', '水', '位', '状', '态', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '];
		var data = [2.9, 2.3, 2.1, 2.2, 2.2, 2.3, 2.1, 2.2, 2.2, 2.3, 2.1, 2.2, 2.1, 2.2, 1.3, 1.3, 1.2, 1.2, 1.9, 2.2];
		var yMax = 5;
		var dataShadow = [];

		for (var i = 0; i < data.length; i++) {
		    dataShadow.push(yMax);
		}

		optionPL3 = {
		    title: {
		        text: '污水池：水位状态',
		        subtext: '参数：水位（米）'
		    },
		    xAxis: {
		        data: dataAxis,
		        axisLabel: {
		            // inside: true,
		            textStyle: {
		                color: '#fff'
		            }
		        },
		        axisTick: {
		            show: false
		        },
		        axisLine: {
		            show: false
		        },
		        z: 10
		    },
		    yAxis: {
		        axisLine: {
		            show: false
		        },
		        axisTick: {
		            show: false
		        },
		        axisLabel: {
		            textStyle: {
		                color: '#999'
		            }
		        }
		    },
		    dataZoom: [
		        {
		            type: 'inside'
		        }
		    ],
		    series: [
		        { // For shadow
		            type: 'bar',
		            itemStyle: {
		                normal: {color: 'rgba(0,0,0,0.05)'}
		            },
		            barGap:'-100%',
		            barCategoryGap:'40%',
		            data: dataShadow,
		            animation: false
		        },
		        {
		            type: 'bar',
		            itemStyle: {
		                normal: {
		                    color: new echarts.graphic.LinearGradient(
		                        0, 0, 0, 1,
		                        [
		                            {offset: 0, color: '#83bff6'},
		                            {offset: 0.5, color: '#188df0'},
		                            {offset: 1, color: '#188df0'}
		                        ]
		                    )
		                },
		                emphasis: {
		                    color: new echarts.graphic.LinearGradient(
		                        0, 0, 0, 1,
		                        [
		                            {offset: 0, color: '#2378f7'},
		                            {offset: 0.7, color: '#2378f7'},
		                            {offset: 1, color: '#83bff6'}
		                        ]
		                    )
		                }
		            },
		            data: data
		        }
		    ]
		};

		// Enable data zoom when user click bar.
		var zoomSize = 6;
		pool3Chart.on('click', function (params) {
		    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
		    pool3Chart.dispatchAction({
		        type: 'dataZoom',
		        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
		        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
		    });
		});
		pool3Chart.setOption(optionPL3);

//出水压力统计图表
 var pressChart = echarts.init(document.getElementById('pressure1'));
		var xAxisData = [];
		var data1 = [];
		var data2 = [];
		for (var i = 0; i < 100; i++) {
		    xAxisData.push('时刻' + i);
		    data1.push((Math.sin(i / 5) * (i / 5 -10) + i / 6) * .1 + 1);
		    data2.push((Math.cos(i / 5) * (i / 5 -10) + i / 6) * .1 + 1);
		}

		optionPR = {
		    title: {
		        text: '出水压力(Mpa)统计图表'
		    },
		    legend: {
		        data: ['水管1', '水管2'],
		        align: 'left'
		    },
		    toolbox: {
		        // y: 'bottom',
		        feature: {
		            magicType: {
		                type: ['stack', 'tiled']
		            },
		            dataView: {},
		            saveAsImage: {
		                pixelRatio: 2
		            }
		        }
		    },
		    tooltip: {},
		    xAxis: {
		        data: xAxisData,
		        silent: false,
		        splitLine: {
		            show: false
		        }
		    },
		    yAxis: {
		    },
		    series: [{
		        name: '水管1',
		        type: 'bar',
		        data: data1,
		        animationDelay: function (idx) {
		            return idx * 10;
		        }
		    }, {
		        name: '水管2',
		        type: 'bar',
		        data: data2,
		        animationDelay: function (idx) {
		            return idx * 10 + 100;
		        }
		    }],
		    animationEasing: 'elasticOut',
		    animationDelayUpdate: function (idx) {
		        return idx * 5;
		    }
		};
		pressChart.setOption(optionPR);

//出水流量统计图表
 var flowChart = echarts.init(document.getElementById('flow1'));
		var xAxisData = [];
		var data1 = [];
		var data2 = [];
		for (var i = 0; i < 100; i++) {
		    xAxisData.push('时刻' + i);
		    data1.push((Math.sin(i / 5) * (i / 3 -10) + i / 6) * 1 + 10);
		    data2.push((Math.cos(i / 5) * (i / 3 -10) + i / 6) * 1 + 15);
		}

		optionFL = {
		    title: {
		        text: '出水流量（L/S）统计图表'
		    },
		    legend: {
		        data: ['水管1', '水管2'],
		        align: 'left'
		    },
		    toolbox: {
		        // y: 'bottom',
		        feature: {
		            magicType: {
		                type: ['stack', 'tiled']
		            },
		            dataView: {},
		            saveAsImage: {
		                pixelRatio: 2
		            }
		        }
		    },
		    tooltip: {},
		    xAxis: {
		        data: xAxisData,
		        silent: false,
		        splitLine: {
		            show: false
		        }
		    },
		    yAxis: {
		    },
		    series: [{
		        name: '水管1',
		        type: 'bar',
		        data: data1,
		        animationDelay: function (idx) {
		            return idx * 10;
		        }
		    }, {
		        name: '水管2',
		        type: 'bar',
		        data: data2,
		        animationDelay: function (idx) {
		            return idx * 10 + 100;
		        }
		    }],
		    animationEasing: 'elasticOut',
		    animationDelayUpdate: function (idx) {
		        return idx * 5;
		    }
		};
		flowChart.setOption(optionFL);
