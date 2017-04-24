/**
 * Created by Administrator on 2017/4/24.
 */
$(document).ready(function(){
//	小屏轮播
    var j=0;
    var img1=$('.bannerxm').find('.screen');//
    var letter1=$('.bannerxm .circle div');//
    function move1(way='right'){
        if(way=='right'){
            j++;
            if(j>=img1.length){
                j=0;
            }
        }
        if(way=='left'){
            j--;
            if(j<0){
                j=img1.length-1;
            }
        }
        img1.css('opacity','0').eq(j).css('opacity','1');
        letter1.removeClass('active').eq(j).addClass('active');
    }
    var t1=setInterval(move1,1000);
    $('.bannerxm>.list>a').each(function(index,value){
        value.addEventListener('touchstart',function(){
            $('.bannerxm>.list>a').removeClass('active1');
            $(this).addClass('active1');
        })
    })
})
