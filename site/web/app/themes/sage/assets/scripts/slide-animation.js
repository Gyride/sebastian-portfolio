(function($) {
    $(function () {
        // init
	    var controller = new ScrollMagic.Controller();
    
        // define movement of panels
        var wipeAnimation = new TimelineMax()
            .fromTo("section#about-me", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})
            .fromTo("section#allProjects", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})
            .fromTo("section#contact", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone});
    
        // create scene to pin and link animation
        var scene1 = new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: "300%"
        })
        .setPin("#pinContainer")
        .setTween(wipeAnimation)
        .addTo(controller);

        $("li").on("click", function(){
            var targetSection = 3;
            var targetPos = scene1.duration() * (targetSection - 1)/($("section").length -1);
            controller.scrollTo(targetPos);
        });
    });
})(jQuery);