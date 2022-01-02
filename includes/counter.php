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

                <h2>NEXT Challenge</h2>
                <h3>Bike & Run Across Canada 6000km</h3>
            	<div class="timer-area">
                    <ul id="countdown">
                        <li>
                            <span class="days">00</span>
                            <div class="timeRefDays">days</div>
                        </li>
                        <li>
                            <span class="hours">00</span>
                            <div class="timeRefHours">hrs</div>
                        </li>
                        <li>
                            <span class="minutes">00</span>
                            <div class="timeRefMinutes">min</div>
                        </li>
                        <li>
                            <span class="seconds">00</span>
                            <div class="timeRefSeconds">sec</div>
                        </li>
                    </ul>
			</div> <!-- end timer-area -->
