//点击菜单current
$(".left_menu a").click(function () {
    $(".left_menu a").each(function () {
        $(".left_menu a").removeClass("current");
    });
    $(this).addClass("current");
    var mark = $(".left_menu .current img").attr("class");
    if (mark == 'd1') {
        $("#left_nav").html('');
        $.get("/Xixiu/Home/WaterSource/Water_nav.html", function (data) {
            $("#left_nav").html(data);
        });
    } else if (mark == 'b1') {
        $("#left_nav").html('');
        $.get("/Xixiu/Home/PumpStation/Pump_nav.html", function (data) {
            $("#left_nav").html(data);
        });
    } else if (mark == 's1') {
        $("#left_nav").html('');
        $.get("/Xixiu/Home/ShuiChang/Shui_nav.html", function (data) {
            $("#left_nav").html(data);
        });
    } else if (mark == 'g1') {
        $("#left_nav").html('');
        $.get("/Xixiu/Home/PipeLine/Pipe_nav.html", function (data) {
            $("#left_nav").html(data);
        });
    }
    ;
    /*$(".left_menu .current img").addClass("i1");*/
});

//左边状态栏left_menu
function leftbarauto() {
    var height = $(window).height();
    var fhgt = $('.header').height();
    var foohgt = $('.footer').height();
    var leftheight = height - fhgt - foohgt - 20;
    $(".left_menu").css("min-height", leftheight);
    var iframeHgt = leftheight - 10;
    $('.layui-tab-item').find('iframe').css('min-height', iframeHgt);
    /*$(".left_nav").css("min-height", leftheight);*/
}

leftbarauto();
$(window).resize(function () {
    leftbarauto();
});

//左边状态栏left_nav
function Goto(obj) {
    $(obj).parents('.subNav').toggleClass("current").siblings(".subNav").removeClass("current");
    if ($(obj).parents('.subNav').hasClass('current')) {
        $(obj).parents('.subNav').find('i').html('&#xe61a;');
    } else {
        $(obj).parents('.subNav').find('i').html('&#xe602;');
    }
    $(obj).parents('.subNav').next(".navContent").slideToggle(300).siblings(".navContent").slideUp(500);
}

function clickURL(obj) {
    $(".navContent").each(function () {
        $(".navContent li a").removeClass("currentNav");
    });
    $(obj).addClass("currentNav");
}

