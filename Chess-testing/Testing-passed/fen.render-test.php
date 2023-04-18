Enter FEN into form:
<form method="post">
<input type="text" id="username" name="username" minlength="1" maxlength="100" style="width:300px" >
<input type="submit" name="submit" value="Convert"><button><a href "fen.render-test.php">Refresh-output</a></button>
<br><br>C.U-B,C.output: 

<?php 

$FEN = '[no-output]';
$rank_counter = 0;
$file_counter = 0;
$file_dictionary = array(1=>"a", 2=>"b", 3=>"c", 4=>"d", 5=>"e", 6=>"f", 7=>"g", 8=>"h");
// echo $file_dictionary[3];
if (isset ($_POST['username'])) { $FEN = $_POST['username']; }
// echo $FEN . "<br>";
$FEN = "rnbqk1nr/pp2ppbp/2p3p1/8/2pP1B2/2N1P3/PP3PPP/R2QKBNR w KQkq - 1 6";
$FEN_length = strlen($FEN);
$b_c_output = 'no-post';
// echo $FEN_length;
$str_counter = 0;
for ($str_数 = 0; $str_数 < $FEN_length; $str_数++) { 
	if (gettype($FEN[$str_数])=="string") { echo "t"; $str_counter = $str_counter + 1;}
	} 
echo $b_c_output; 
echo "<br>" . $str_counter;
// write a function that loops through the string $FEN as an array: 

?>



<!-- http://chess/testing-progress/chess-testing/fen.render-test.php -->
<!-- Issues / to do:
// open-source this # 

Skip Castling ability, unless the position has some special-char # that is test-worthy #
"En passant" notation appears only when-req; can skip all subsequent "-"
Termination: terminate after both file and rank counters have reached 8, and read one more char thereafter: side to move # 

Hn+1S1: Catching POST same page demonstrates a micro.inner-RAM # 

Copy icon; test this later: https://stackoverflow.com/a/63600698 attempt-1 12.31-22,4th.17: could not get it to work on <p>

<!-- references:
Sample strings:

rnbqk1nr/pp2ppbp/2p3p1/8/2pP1B2/2N1P3/PP3PPP/R2QKBNR w KQkq - 1 6 https://lichess.org/KNyd2OPJ/white
r2q1rk1/pp2pp1p/6p1/3P1b2/2PbN3/1P4P1/P4PBP/R1B1K2R w KQ - 0 13 https://lichess.org/Z4hXnGNx/black 
r1q2rk1/1pp2ppp/p2p4/4p1Nb/1nP1P1n1/1P1P2P1/Pb3PBP/1QRN1R1K w - - 0 18 https://lichess.org/DcooWwmJ/white

Piece names: 

= 'P' | 'N' | 'B' | 'R' | 'Q' | 'K' via https://www.chessprogramming.org/Forsyth-Edwards_Notation

Side to move: "w" but not "b" is a unique-char, up to their appearance # 

Loop through chars in a string: https://www.tutorialkart.com/php/php-loop-through-characters-in-string/

Break statement, for loop: https://www.php.net/manual/en/control-structures.break.php

https://www.php.net/manual/en/control-structures.continue.php:
	"Continue is used within looping structures to skip the rest of the current loop iteration and continue execution at the condition evaluation and then the beginning of the next iteration."
		Hu: Continue really means to skip; skip the rest of this iteration of the loop # 
		Hu: "Condition evaluation" = termination condition, specified in the loop-header<definition>
	Hu: Continue can take, optionally, an argument, a number, specifying how many, where skipping the rest of the current, is 1, iterations to skip # <80% 12.31-22,4th.18>

Library: if (gettype($FEN[$str_数])==integer) { } elseif () { } elseif () { } else { } 

str_length counts spaces in a string as a char in count https://www.php.net/manual/en/function.strlen.php

-->