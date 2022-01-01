// initialise ScrollMagic controller
var controller = new ScrollMagic.Controller();

// create Tween
var tween = TweenMax.to("#js-animation", 0.4, {
	backgroundPosition: "0 100%", 
	ease: SteppedEase.config(18)
})

// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#js-animation"})
	.triggerHook("onLeave")
	.setTween(tween)
	.addTo(controller);