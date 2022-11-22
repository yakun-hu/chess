<?php // echo 3;
echo intval($_POST['message']) * 2 . '👁️'; 
?>
<!-- http://chess/testing-progress/Math.games-testing/server-read.php -->
<!-- test log: 
	9:39 PM: 
		Bug reports:
			($_POST['message']) echoed on its own returns undefined, currently. 
			Therefore, undefined is what is being fed from the POST on AJAX.PHP+1
			Not clear if this is the feed, from loop 1st iteration, or from the
			active loop. Intval and +2 from this, returns 2 on the display #, but
			there is no incrementation, which means it's being reset to undefined
			after running through AJAX.PHP+1. I have a variable that exists
			across scripts, and across languages. -->
