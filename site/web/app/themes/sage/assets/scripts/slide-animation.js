(function($) {
    $(function () {

        function projectsChain() {
            var j = $(".projects").length;
            var res = "";
            for (var i = 1; i < j; i++) {
                res = res + '.fromTo("section#project' + i + '", 1, {x: "100%"}, {x: "0%", ease: Linear.easeNone})';
            }
            return res;
        }

        // init vertical
	    var controller = new ScrollMagic.Controller();
    
        // define movement of panels
        var wipeAnimation = eval('new TimelineMax()' +
            '.fromTo("section#about-me", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})' +
            '.fromTo("section#project0", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})' +
            projectsChain() +
            '.fromTo("section#contact", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})' );
    
        // create scene to pin and link animation
        var scene = new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: "300%"
        })
        .setPin("#pinContainer")
        .setTween(wipeAnimation)
        .addTo(controller);

        $("li").on("click", function(){
            var targetSection = 1;
            if ( $(this).hasClass("a") ) {
                targetSection = 2;
            } else if ( $(this).hasClass("p") ) {
                targetSection = 3;
            } else if ( $(this).hasClass("c") ) {
                targetSection = 3 + $(".projects").length;
            }
            var targetPos = scene.duration() * (targetSection - 1)/($("body div section").length -1);
            $('html, body').animate({scrollTop: targetPos},'1000');            
        });
    });
})(jQuery);