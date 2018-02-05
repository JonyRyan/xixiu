$(function(){
    function mapauto() {
        var height = $(window).height();
        var mapheight = height - 160;
        $("#map").css("height", mapheight);
    }
    mapauto();
    $(window).resize(function () {
        mapauto();
    });
});

// 百度地图API功能
var map = new BMap.Map("map");
var point = new BMap.Point(105.953434,26.259793);
map.centerAndZoom(point, 13);
map.enableScrollWheelZoom();//启用滚轮放大缩小
var defaultHTML = "<div style='width:260px;height:auto!important;height:100px;min-height:100px;margin-top:3px;text-overflow : ellipsis;white-space : nowrap; overflow : hidden;' title=''>" + "设备信息";
defaultHTML += "<div style='margin-top:5px;border-bottom:1px dashed black;'></div>";
defaultHTML += "<ul style='padding: 0;'>";
defaultHTML += "<li class='info_li'><a  class='info_A'style='color:#ff9936' href='/project/Shui/Index'>" + "设备名称：水厂实时监控设备</a></li>";
defaultHTML += "<li class='info_li'><a  class='info_A'>" + "在线状态：在线</a></li>";
defaultHTML += "<li class='info_li'><a  class='info_A'>" + "设备电流：39A</a></li>";
defaultHTML += "<li class='info_li'><a  class='info_A'>" + "设备电压：8KV</a></li>";
defaultHTML += "<li class='info_li'><a  class='info_A'>" + "供电状态：正常</a></li>";
defaultHTML += "<li class='info_li'><a  class='info_A'>" + "更新时间：2018-01-15</a></li>";
defaultHTML += "</ul></div>";
var infoWindow = new BMap.InfoWindow(defaultHTML);  // 创建信息窗口对象
map.openInfoWindow(infoWindow,point); //开启信息窗口
var data_info = [[105.953203,26.254734,"地址：贵州省安顺市西秀区市政府"],
    [105.971615,26.251631,"地址：贵州省安顺市西秀区人民政府"]];
var opts = {
    width : 250,     // 信息窗口宽度
    height: 80,     // 信息窗口高度
    title : "水厂信息" , // 信息窗口标题
    enableMessage:true//设置允许信息窗发送短息
};
for(var i=0;i<data_info.length;i++){
    var marker = new BMap.Marker(new BMap.Point(data_info[i][0],data_info[i][1]));  // 创建标注
    var content = data_info[i][2];
    map.addOverlay(marker);               // 将标注添加到地图中
    addClickHandler(content,marker);
}
function addClickHandler(content,marker){
    marker.addEventListener("click",function(e){
        openInfo(content,e)}
    );
}
function openInfo(content,e){
    var p = e.target;
    var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
    var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow,point); //开启信息窗口
}
