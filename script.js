$(function(){
  var startPos = 0,winScrollTop = 0;
  $(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos) {
        if(winScrollTop >= 200){
            $('.site-header').addClass('hide');
        }
    } else {
        $('.site-header').removeClass('hide');
    }
    startPos = winScrollTop;
});
var navFlag = false;
$('.menu').on('click',function(){
    $('.menu__line').toggleClass('active');
    $('.gnav').fadeToggle();
    
    if(!navFlag) {
        $('.gnav__menu__item').each(function(i){
            $(this).delay(i*300).animate({
                'margin-left' : 0,
                'opacity' : 1,
            },500, 'easeOutBack');
        });
        $('.site-logo').animate({
            'opacity' : 0,
        },300);
        navFlag =true;
    }else{
        $('.gnav__menu__item').css({
            'margin-left' : 100,
            'opacity' :0,
        });
        $('.site-logo').css({
            'opacity' : 1,
        });
        navFlag = false;
    }
});

$('.gnav__menu__item a').on('click',function(){
    $('.gnav').hide();
    $('.menu__line').toggleClass('active');
    $('.gnav__menu__item').css({
        'margin-left' : 100,
        'opacity' :0,
    });
    $('.site-logo').css({
        'opacity' : 1,
    });
    navFlag = false;
});

$(window).scroll(function(){
    $('.fadein').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if(scroll + windowHeight - elemPos > 100){
            $(this).addClass('scrollin');
        }
    });
});

});
