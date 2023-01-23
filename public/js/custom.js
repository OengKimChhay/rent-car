$(document).ready(function () {
    $(window).scroll(function(){
        if ( $(window).scrollTop() > 80 ) {   
            $('#header').css({"background":"rgb(54 121 163)","transition":"0.2s"});
        } else {
            $('#header').css({"background":"transparent"});
        }
    })

});
