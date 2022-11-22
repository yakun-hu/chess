<p><button type="button" onclick="retrieve_more_msg()">Retrieve-msg</button>
| <button type="button" onclick="clear_msg()">Clear</button> | 
<button type="button" onclick="test_msg()">Test</button></p>
<p id="msg">1</p>
<script>function retrieve_msg() {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      document.getElementById("msg").innerHTML = this.responseText;
    }
var message = "message=" + document.getElementById("msg").innerHTML;
  xmlhttp.open("POST", "server-read.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(message);
  // document.write(message);
  } 
function clear_msg() {
	document.getElementById("msg").innerHTML = 'no more msg';
}
function retrieve_more_msg(){
<!-- The millisecond interval is set to video consensus 30 frames/sec>
	setInterval(retrieve_msg, 33);
}
function test_msg(){
	var message = "message=" + document.getElementById("msg").innerHTML;
	document.write(message);
}</script>

<?php
/* Write an AJAX XMLHTTPRequest that is triggered by an HTML button,
that calls a PHP script. The PHP script will execute a math function
on a number that is submitted via POST by the AJAX, with the correct
encoding paradigm, pulled from the flare-github, step-wise to my 
own calculator xD, the AJAX will pull the output, and spit that exact
output out again, in the next setInterval, and PHP will perform
the same function, on the updated number. 

Next step: write an input form, that allows me to write a X-wise formula
<Turing>, to customize the calculation that is performed, on the php-side.*/

// Step-1: Import AJAX and PHP code from the flare-github. 
?>

<!-- http://chess/testing-progress/Math.games-testing/AJAX.PHP+1.php -->
<!-- testing-log:
	9:59 PM:
		After applying the fix from 9:44 PM: I click retrieve-msg, and 1 is updated
		to 2, but there is no further incrementation. Clicking retrieve-msg again, and 
		I still see 2. Fix: updated .value 
	9:44 PM:
		1: document.write(message) shows message=undefined, so the string concat
		is partially working; .send is also working, being as what is in the
		variable message, is also what is being fed to the other side, such that
		it can be echoed back. Therefore, the issue seems to be with the clause:
		document.getElementById("msg").value. 
		2: According to w3, .value of getElementByID does set a string; however, 
		this seems to be working #; a number or a string echoed by server-read.php
		is able to update the <p>tag, replacing the value in it, even. 
		3: At some point, the value in "msg" does display 2; whether it's a string or 
		an int shouldn't matter; the undefined reset is occuring in this file, I believe,
		since document.write confirms this, on this side. In any case, intval converts
		the output from this side into an int over on server-read.php, anyways. 
		Fix: Changed .value to .innerHTML; .value is for pulling value from an input field,
		whereas .innerHTML is for pulling value from <p> tag and other such elements, apparently. 
