(function($) {
    var words = ["Web Applications", "Music", "Video Games"];
    var i = 0;
    var current = words[i];
    setTimeout(function() {
        $(".fade").fadeOut(500);
    }, 2000);
    setInterval(function() {
        i = (i + 1) % words.length;
        current = words[i];
        $(".fade").html(current);
        $(".fade").fadeIn(500);
        setTimeout(function() {
            $(".fade").fadeOut(500);
        }, 2000);
    }, 3000);
})(jQuery);