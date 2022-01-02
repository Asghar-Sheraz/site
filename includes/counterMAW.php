<script>
	$(document).ready(function(){
		$("#countdown").countdown({
			date: "15 jul 2016 10:00:00",
			format: "on"
		},
		function() {
			// callback function
		});
	});
</script>

            	<ul class="timer-area">
                    <li>
                        <ul id="countdown">
                            <li>
                                <p class="days num">00</p>
                                <p class="num"><? echo $spaceFix ?>.<? echo $spaceFix ?></p>
                                <p class="timeRefDays text">days</p>
                            </li>
                            <li>
                                <p class="hours num">00</p>
                                <p class="num"><? echo $spaceFix ?>.<? echo $spaceFix ?></p>
                                <p class="timeRefHours text">hrs</p>
                            </li>
                            <li>
                                <p class="minutes num">00</p>
                                <p class="num"><? echo $spaceFix ?>.<? echo $spaceFix ?></p>
                                <p class="timeRefMinutes text">min</p>
                            </li>
                            <li>
                                <p class="seconds num">00</p>
                                <p class="num"><? echo $spaceFix ?>.<? echo $spaceFix ?></p>
                                <p class="timeRefSeconds text">sec</p>
                            </li>
                        </ul>
					</li>
            </ul> <!-- end timer-area -->
