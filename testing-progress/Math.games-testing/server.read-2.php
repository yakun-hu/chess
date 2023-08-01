<?php // echo 3;
/* Research how to generalize the function to modify ($_POST['message']),
how math as functions interconvert, string, int, or tertiary. I might
need operator 1, value 1, operator 2, value 2, consider how math operations
work and try to build the most generalized solution. Graphing could
be interesting as well. HTML/CSS line drawing, that responds to an int. 
HTML buttons that correspond to PHP math-funcs, with pre-built sub-prompts
[Turing], and # of iterations, checkbox for graphing. */
echo intval($_POST['message']) + 1 . ' | 🏙️'; 
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