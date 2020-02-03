/*$(function(){

    function RippleStyle(width, height, posX, posY){
        this.width = (width <= height ) ? height : width;
        this.height = (width <= height ) ? height : width;
        this.top = posY - (this.height * .5);
        this.left =posX - (this.width * .5);
    }

    $('btn').click(function(e){
        var rippleEl = $('<span class=".btn-ripple)"></span>').apprendTo(this);
        var pos = $(this).offset();

        var width = $(this).outerWidth();
        var height = $(this).outerHeignt();

        var posX = e.pageX - pos.left;
        var posY = e.pageY - pos.top;

        var rippleStyle = new RippleStyle(width, height, posX, posY);

        rippleEl.css(rippleStyle);
    });

    $('.btn').on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', '.btn-ripple', function(){
        $(this).remove();
    })
});
*/


$(document).ready(function() {

    $(".button").click(function(e) {
        var parentOffset = $(this).offset(),
            cursorX      = e.pageX - parentOffset.left,
            cursorY      = e.pageY - parentOffset.top;
        $(this).children(".ripple").remove();
        $(this).append('<div class="ripple"></div>');
        $(this).children(".ripple").css({"left" : cursorX + "px", "top" : cursorY + "px"});
        $(".ripple").one("webkitAnimationEnd mozAnimationEnd oAnimationEnd oanimationend animationend", function() {
            $(this).remove();
        });
    });


    $(".button").hover(function(e) {
        
        var parentOffset = $(this).offset(),
            cursorX      = e.pageX - parentOffset.left,
            cursorY      = e.pageY - parentOffset.top;
        $(this).children(".ripple").remove();
        $(this).append('<div class="ripple"></div>');
        $(this).children(".ripple").css({"left" : cursorX + "px", "top" : cursorY + "px"});

        $(".ripple").one("webkitAnimationEnd mozAnimationEnd oAnimationEnd oanimationend animationend", function() {
            $(this).remove();
        });
        

    });
});