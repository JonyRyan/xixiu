// 按钮‘水泵’——显示水泵启停图表
function showPump() {
	$('#data_pump').css('display','inline');
	$('#data_valve').css('display','none');
}
// 按钮‘水阀’——显示水阀启停图表
function showValve() {
	$('#data_pump').css('display','none');
	$('#data_valve').css('display','inline');
}

//水泵1启停图表
 var pump1Chart = echarts.init(document.getElementById('pump_status1'));

		var dataAxis = ['水', '泵', '1', '：', '启', '停', '状', '态', '停', '停', '停', '停', '停', '停', '启', '启', '启', '启', '启', '启'];
		var data = [22, 18, 19, 23, 29, 33, 31, 12, 0, 0, 0, 0, 0, 0, 13, 33, 19, 12, 12, 22];
		var yMax = 50;
		var dataShadow = [];

		for (var i = 0; i < data.length; i++) {
		    dataShadow.push(yMax);
		}

		optionP1 = {
		    title: {
		        text: '水泵1：启停状态',
		        subtext: '参数：流量（立方米）'
		    },
		    xAxis: {
		        data: dataAxis,
		        axisLabel: {
		            inside: true,
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
		pump1Chart.on('click', function (params) {
		    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
		    pump1Chart.dispatchAction({
		        type: 'dataZoom',
		        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
		        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
		    });
		});
		pump1Chart.setOption(optionP1);

//水泵2启停图表
 var pump2Chart = echarts.init(document.getElementById('pump_status2'));

		var dataAxis = ['水', '泵', '2', '：', '停', '停', '停', '停', '停', '停', '启', '启', '启', '启', '启', '启', '启', '启', '启', '启'];
		var data = [22, 18, 19, 23, 0, 0, 0, 0, 0, 0, 12, 13, 29, 33, 31, 33, 22, 19, 12, 12];
		var yMax = 50;
		var dataShadow = [];

		for (var i = 0; i < data.length; i++) {
		    dataShadow.push(yMax);
		}

		optionP2 = {
		    title: {
		        text: '水泵2：启停状态',
		        subtext: '参数：流量（立方米）'
		    },
		    xAxis: {
		        data: dataAxis,
		        axisLabel: {
		            inside: true,
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
		pump2Chart.on('click', function (params) {
		    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
		    pump2Chart.dispatchAction({
		        type: 'dataZoom',
		        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
		        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
		    });
		});
		pump2Chart.setOption(optionP2);

//水阀启停图表
 var valveChart = echarts.init(document.getElementById('valve_status1'));
 		// $('#valve_status1').css('width',$('#pump_status1').width);
		var dataAxis = ['水', '阀', '1', '：', '启', '启', '启', '启', '启', '启', '启', '启', '启', '启', '停', '停', '停', '停', '停', '停'];
		var data = [32, 26, 29, 33, 22, 23, 29, 43, 41, 43, 32, 29, 22, 12, 0, 0, 0, 0, 0, 0];
		var yMax = 50;
		var dataShadow = [];

		for (var i = 0; i < data.length; i++) {
		    dataShadow.push(yMax);
		}

		optionV1 = {
		    title: {
		        text: '水阀：启停状态',
		        subtext: '参数：流量（立方米）'
		    },
		    xAxis: {
		        data: dataAxis,
		        axisLabel: {
		            inside: true,
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
		valveChart.on('click', function (params) {
		    console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
		    valveChart.dispatchAction({
		        type: 'dataZoom',
		        startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
		        endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
		    });
		});
		valveChart.setOption(optionV1);