<?php $file_dictionary = array(1=>"a", 2=>"b", 3=>"c", 4=>"d", 5=>"e", 6=>"f", 7=>"g", 8=>"h"); 
// echo $file_dictionary[3];
function zi_assembly_helper($zi_char, $网格, $side) {
	if ($zi_char == 'B') { $GLOBALS[$side . $zi_char] = $GLOBALS[$side . $zi_char] . $网格 . ","; }
	elseif ($zi_char == 'N') { $GLOBALS[$side . $zi_char] = $GLOBALS[$side . $zi_char] . $网格 . ","; } 
	elseif ($zi_char == 'Q') { $GLOBALS[$side . $zi_char] = $GLOBALS[$side . $zi_char] . $网格; }
	elseif ($zi_char == 'K') { $GLOBALS[$side . $zi_char] = $GLOBALS[$side . $zi_char] . $网格; } 
	elseif ($zi_char == 'R') { $GLOBALS[$side . $zi_char] = $GLOBALS[$side . $zi_char] . $网格 . ","; } 
	else { $GLOBALS[$side . $zi_char] = $GLOBALS[$side . $zi_char] . $网格 . ","; }
	// append result to a variable and there will only be 1 result, per run of the helper # 
	// I think we do have to declare a separate variable for each type of zi, per side, so 12 sub-assemblies total # 
}?>
<h3>Enter FEN into form:</h3><form method="post">
<input type="text" id="username" name="username" minlength="1" maxlength="100" style="width:300px" >
<input type="submit" name="submit" value="Convert"> <button><a href "fen.render-test.php">Refresh-output</a></button>
<br><br>C.U-B,C.output: <p>
<?php // Input-catcher # 
$FEN = "rnbqk1nr/pp2ppbp/2p3p1/8/2pP1B2/2N1P3/PP3PPP/R2QKBNR w KQkq - 1 6";
if (isset ($_POST['username'])) { $FEN = $_POST['username']; $f_output ='';}
// echo $FEN . "<br>";

// Pre-processing:
$FEN_pos = strtok($FEN, " "); $side_to_move = strtok(" "); $castling_avail = strtok(" "); $en_passant = strtok(" "); $ch18_50 = strtok(" "); $full_turn = strtok(" "); 
// echo $FEN_pos; 
$FEN_length = strlen($FEN_pos);
// echo $FEN_length;
$intval_counter = 0; $slash_counter = 0;

// Function-main: 
$s_B = 'B['; $s_N = 'N['; $s_Q = 'Q-'; $s_K = 'K-'; $s_R = 'R['; $s_P = 'P['; 
$F_B = 'B['; $F_N = 'N['; $F_Q = 'Q-'; $F_K = 'K-'; $F_R = 'R['; $F_P = 'P['; 
$rank_counter = 8; $file_counter = 0;
for ($str_数 = 0; $str_数 < $FEN_length; $str_数++) { 
	if (intval($FEN_pos[$str_数])!==0) 
		{ $file_counter = $file_counter + intval($FEN_pos[$str_数]);
		// echo $file_counter . "<br>";
		$intval_counter = $intval_counter + 1;}
	elseif ($FEN_pos[$str_数]=="/")
		{ $file_counter = 0;
		$rank_counter = $rank_counter - 1;
		// echo $rank_counter . "<br>";
		$slash_counter = $slash_counter + 1;} 
	else 
		{ $file_counter = $file_counter + 1; 
		$网格 = $file_dictionary[$file_counter] . $rank_counter;
		if (ctype_upper($FEN_pos[$str_数])==true) { // Identifies f or s; 
			zi_assembly_helper($FEN_pos[$str_数], $网格, 'F_'); }
		else { 
			zi_assembly_helper(strtoupper($FEN_pos[$str_数]), $网格, 's_');}
		// echo $FEN_pos[$str_数]; 
		}
	} 
// Echo-funcs:
$filler = '';
echo $full_turn; if ($side_to_move=="w") { echo "-f: "; } else { echo "s :"; } if ($ch18_50 > 9) { echo "50-progress: " . $ch18_50; } 
echo "F: "; if ($F_B!=="B[") { echo $F_B . "]"; } if ($F_N!=="N[") { echo $F_N . "]"; } if ($F_Q!=="Q-") { echo $filler . $F_Q . " "; } echo $filler . $F_K . " " . $F_R . "]" . $F_P. "] | S: " . $s_B . "]" . $s_N . "]" . $s_Q . " " . $s_K . " " . $s_R . "]" . $s_P . "]";
// echo "<br>" . $s_Q; // the extraneous 1 is due to the post-side extraneii # 2 hourss later: fixed
// echo "<br>" . $intval_counter;
// echo "<br>" . $slash_counter;
// write a function that loops through the string $FEN as an array: 
?></p>

<!-- http://chess/testing-progress/chess-testing/fen.render-test,3.php -->
<!-- Issues / to do:
// open-source this # 

Skip Castling ability, unless the position has some special-char # that is test-worthy #
"En passant" notation appears only when-req; can skip all subsequent "-"
Termination: terminate after both file and rank counters have reached 8, and read one more char thereafter: side to move # 

Hn+1S1: Catching POST same page demonstrates a micro.inner-RAM # 

Copy icon; test this later: https://stackoverflow.com/a/63600698 attempt-1 12.31-22,4th.17: could not get it to work on <p>

Rather than use PHP-break in the for-main, which would add an extra CPU-unit per loop-run, in this long.run-func, we can add a single
post-processing step using some sort of str.recog-cut | 

Post-processing: aggregate Pawns, easiest to do it within the loop, if the char is specifically a "P", and have a "P_f_" and "P_S_"
We can even aggregate all the zi and display such B[e8, d8] K[g8] N[d2, b2] and so forth # and these can be displayed # in a thematic order:
B, N, Q, K, R, P | Eg: B[f4,c1] N[f3,g1] Q-d1 K-e1 R[a1,h1] P[a2-b2-d4-e3-f2-g2-h2] 
Note: the post-processing can also be PRE-processing, 

Hu: This is assembly<x.ref-internal[fbno],helper>multiple-level # 

Parlay: Blind-chess.com, where you can # submit moves in sequence, generate links to send # and games are entered by a secure ID, 
can even enter IP addresses for extra-sec, self-responsible, db, 

Build a controller that echoes a "hidden" attr to the <p> that will display # the output B-C, if no $_POST,yet 

Add email capture + page counter if I put this online # 
-->

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

Fen-sass: lichess.org/Tdtzvs7s Bxe6!
-->