<p><button type="button" onclick="start_counting()">Enter-room</button>
<script> var counter = 1;
function start_counting(){
<!-- The millisecond interval is set to video consensus 30 frames/sec>
setInterval(count, 33);
}

function count() {
	counter = counter + 1; 
	console.log(counter);
} 
</script>

<!-- http://chess/testing-progress/Math.games-testing/JS.global-variable,function.incrementer.php -->
<!-- test log:
	4:44 PM:
		Clicked "Enter-room" and opened Inspect->Console
			Test passed: Count is increasing rapidly and automatically. 
--> 