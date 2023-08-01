<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="php_local_libs/CSS-external.php"></head>
<?php require "php_local_libs/innate.M-inc.php";
$file_dictionary = array(1=>"a", 2=>"b", 3=>"c", 4=>"d", 5=>"e", 6=>"f", 7=>"g", 8=>"h"); 
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
}?><h1>Material in Programming:</h1>
<h2>Blind-chess Engine:</h2>
<h3 id="h3">Ch-10: Enter FEN into form:</h3><form method="post">
<input type="text" id="username" name="username" minlength="1" maxlength="100" style="width:300px" >
<input type="submit" name="submit" value="Convert"> <button><a href "fen.render-test.php">Refresh-output</a></button>
<br><p><u>C.U-B,C</u>.<b>output</b>: [a8->h,7->1] 
<?php // Input-catcher # 
$FEN = "";
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
		{ $file_counter = $file_counter + intval($FEN_pos[$str_数]); }
		// echo $file_counter . "<br>";
		// $intval_counter = $intval_counter + 1;}
	elseif ($FEN_pos[$str_数]=="/")
		{ $file_counter = 0;
		$rank_counter = $rank_counter - 1; }
		// echo $rank_counter . "<br>";
		// $slash_counter = $slash_counter + 1;} 
	else { $file_counter = $file_counter + 1; 
		$网格 = $file_dictionary[$file_counter] . $rank_counter;
		if (ctype_upper($FEN_pos[$str_数])==true) { // Identifies f or s; 
			zi_assembly_helper($FEN_pos[$str_数], $网格, 'F_'); }
		else { zi_assembly_helper(strtoupper($FEN_pos[$str_数]), $网格, 's_');}
		// echo $FEN_pos[$str_数]; 
		} } 
// Echo-funcs; recombine f/s_echo into 1-line:
$f_echo = "<b>F</b>: "; if ($F_B!=="B[") { $f_echo .= $F_B . "]"; } if ($F_N!=="N[") { $f_echo .= $F_N . "]"; } if ($F_Q!=="Q-") { $f_echo .= $F_Q . " "; } $f_echo .= $F_K . " "; if ($F_R!=="R[") { $f_echo .= $F_R . "]"; } if ($F_P!=="P[") { $f_echo .= $F_P. "]"; } 
$s_echo = "<b>S</b>: "; if ($s_B!=="B[") { $s_echo .= $s_B . "]"; } if ($s_N!=="N[") { $s_echo .= $s_N . "]"; } if ($s_Q!=="Q-") { $s_echo .= $s_Q . " "; } $s_echo .= $s_K . " "; if ($s_R!=="R[") { $s_echo .= $s_R . "]"; } if ($s_P!=="P[") { $s_echo .= $s_P. "]"; }
echo $full_turn; if ($side_to_move=="w") { echo "-f: " . $f_echo . " | " . $s_echo; } else { echo "-s: " . $s_echo . " | " . $f_echo; } if ($ch18_50 > 9) { echo "50-progress: " . $ch18_50; } 

// echo "<br>" . $s_Q; // the extraneous 1 is due to the post-side extraneii # 2 hours later: fixed
// echo "<br>" . $intval_counter;
// echo "<br>" . $slash_counter;
// write a function that loops through the string $FEN as an array: 
?></p>
<h3>Ch-3: Effect-stacking:</h3>
<p>Write continuating functions using the C.U-B,C.output as the prog-interf, stacking tertiary analyses, which are themselves, further builders. 
These analyses can be toggled and activated, some default, constituting 1.2-2.4,7 layer into MIC; Legal Move Storage System | E.diff-delta | 
Moves vs Board States; first lvl-interact w/ B-code; 1-2 total inputs, compr-互动 all.2-D; Stanislav-Render[ch-62]; 基本箭头 Fin.verbal-1</p>
Zi dropdown::Square input: 
<p><b>E-output:</b><!-- Total M, occupied-$,🛡️ | E-diff; if only sq entered, E-diff output only --></p>
<!-- Try requiring Ch-10 from Ch-3 -->
<h3>Ch.19-20: Anki-reps:</h3>
<h3>Ch.47-9,6: Mental-act'v:</h3>
<h3>Ch.53-Super,E:</h3>
<h3>Ch.63-Employ门:</h3>
<h3>小-interl:</h3>
<p>Pegula: Hu is explaining his Usage of the Press Box: Hu: I need Space to Maneuver. Manipulation from Behind a 2-D flat provides me with
only so many Inputs. Garcia: The Box puts you behind a Screen, as well. Hu: the Press Box is an analogy for providing me access to the
Facilities, plus Face to Face is Valuable Time<Flare><💧to🔥>Terry; Sorry, Quinn, I'm not up to date on the Theory.$-there. Hu: Yeah no
worries, Terry<corporate>, Data Transfer Rate as a Function of Higher Frame Rate, and Resolution, Protocol'd Communication increases
the rate of Pedagogical State Transference<b-2019>. Terry; Closes his eyes for a moment<high-IQ>, we calculated, ahead of time, that our
Fracking of the Rustic.T-Well<B-Hu!>would potentially cause an Earthquake:</p>
<h3>Citation:</h3>
<p>IPAA<a-r>: Induced earthquakes are more commonly linked to wastewater injection — a completely separate process from fracking.
Most notably, a landmark 2016 U.S. Environmental Protection Agency study concluded that, “Hydraulic fracturing operations
are unlikely to generate sufficient pressure to drive fluids into shallow drinking water zones.” The EPA reached this conclusion even
after expanding the definition of fracking to include a wide range of other oilfield activities, demonstrating the safety of the entire
development process.</p>
<h3>Theory:</h3>
<p>*A common mistake in calculating the quadratic equation, even with the correct inputs, is taking the sqrt of the entire term ( b2 - 4ac ) / 
( 2a ); correct instead is to take the sqrt of only the terms ( b2 - 4ac ) and to divide the result of that sqrt function’s output by 2a. ** 
A second common mistake is neglecting to divide the term to the left of the operator ± on the right side of the equation, -b, also by ( 2a ). 
The quadratic equation allows us to eliminate one of the answers, depending on whether the operation + or - is applied from the ±, based on the 
parameters of the solution; since the hypotenuse of the right side triangle is only 16, the length of h, a non-hypotenuse side, cannot exceed the 
hypotenuse, and therefore we can eliminate 32.8cm as a possible answer, leaving only 7.2cm. |=P Therefore, we have confirmed x = 7.2cm in both 
the left side and the right side triangle by using the pythagorean theorem in conjunction with the quadratic formula to solve for the right side 
triangle. |=P As a final check, we can see that 7.2cm + (20cm - 7.2cm) = 7.2cm + 12.8cm = 20cm, returning the length of the composite triangle’s 
base in the original diagram # Fin-v3. H5S3: PV = nRT 3) The Ideal Gas Law - phase chemistry. P ⇒ the metric of pressure unit = atm (n.) = 
atmospheres V = the metric of volume unit = Liters n => the count of the number of molecules in the gas, unit = moles. T => the temperature of 
the gas, unit = Kelvin. R is the ideal | gas | constant unit = Liters * atmosphere / (mol * Kelvin) <C-Masi, a-r> H5S4: Ex = RT / zF * ln ( [X]2 
/ [X]1 The Nernst Equation - cell | biology.  The purpose of the Nernst | Equation is to find an equilibrium | potential, E, which is a quantity 
that has the unit of volts, and the protagonist of the sentence, or equation, is this ion “X”, with the variable “X” being used as a container for 
any ion that a scientist may want to measure using the Nernst Equation, and when the equation is applied, the ion X will be specified as a specific
 ion, such as Chloride # Ex => the equilibrium potential of an ion, “X”, R => the ideal gas constant unit = 0.08206 Liters * atmosphere / 
 (mol * Kelvin) T => the absolute temperature of the cell and its extracellular | environment,</p>
<h3>Ch-38: Double attack res conditions</h3>
<p>and other such conditional lists in MIC #</p>
<!-- http://chess/analyzer-1.php#h3 -->
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

Build a controller that echoes a "hidden" attr to the <p> that will display # the output B-C, if no $_POST,yet https://www.w3schools.com/TAGS/att_hidden.asp

Add email capture + page counter if I put this online # 

Build a deeper analyzer before E: P-str, etc; what would be lightest? And, I can use my bl-string, and generate these analyses, without a board
	and also generate "higher-IQ" tables, dichotomous trees, and otherwise diagrams, with colors, and highlighting. 
	Hu: Going deeper, into an interest area, excavating MIC, pushing to book, excerpt to sections, will help me bullet analyses for others #gold?
	PNG to FEN, PNG to board code, with analyses # 
	
Build a legal move checker next, where a FEN input is stored in RAM # and you can type in a move in algebraic #<firm>to check for feedback # 
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