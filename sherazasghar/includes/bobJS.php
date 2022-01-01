        <script>


            var instance = $(".bob").spriteClip({
                totalFrames: 99,
                frameRate: 30,
                stops: [0]
            }).data("spriteClip");

			instance.play()
            instance.$el
                .on("mouseover", function () {
                    instance.play();
                })
                .on("mouseout", function () {
                  instance.rewindtoAndStop(10);
	            });


		/*            instance.$dispatcher
						.on(SpriteClip.Event.ENTER_FRAME, function (e, clip) {
		
							$(".currentFrame span").text(instance.currentFrame);
						});
		
		*/
		</script>
