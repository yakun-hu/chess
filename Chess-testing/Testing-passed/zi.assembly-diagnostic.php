<?php
/* function zi_assembly_helper($zi_char, $网格, $side) {
	if ($zi_char == 'B') { ${$side . $zi_char} = ${$side . $zi_char} . $网格 . ","; }
	elseif ($zi_char == 'N') { ${$side . $zi_char} = ${$side . $zi_char} . $网格 . ","; } 
	elseif ($zi_char == 'Q') { ${$side . $zi_char} = ${$side . $zi_char} . $网格; }
	elseif ($zi_char == 'K') { ${$side . $zi_char} = ${$side . $zi_char} . $网格; } 
	elseif ($zi_char == 'R') { ${$side . $zi_char} = ${$side . $zi_char} . $网格 . ","; } 
	else ($zi_char == 'P') { ${$side . $zi_char} = ${$side . $zi_char} . $网格 . ","; }
} */

$f_N = "N";
$side = "f_";
$zi_char = "N";
$网格 = "e3";
${$side . $zi_char} = ${$side . $zi_char} . $网格 . ",";

// Line by line reconstruction of function zi_assembly_helper<fbno>:<Turing>

$s_B = 'B['; $s_N = 'N['; $s_Q = 'Q-'; $s_K = 'K-'; $s_R = 'R['; $s_P = 'P['; 
$F_B = 'B['; $F_N = 'N['; $F_Q = 'Q-'; $F_K = 'K-'; $F_R = 'R['; $F_P = 'P['; 

function zi_assembly_helper($zi_char, $网格, $side) {
	if ($zi_char == 'B') { ${$side . $zi_char} = ${$side . $zi_char} . $网格 . ","; }
	elseif ($zi_char == 'N') { $GLOBALS[$side . $zi_char] = $GLOBALS[$side . $zi_char] . $网格 . ","; } 
	elseif ($zi_char == 'Q') { ${$side . $zi_char} = ${$side . $zi_char} . $网格; }
	elseif ($zi_char == 'K') { ${$side . $zi_char} = ${$side . $zi_char} . $网格; } 
	elseif ($zi_char == 'R') { ${$side . $zi_char} = ${$side . $zi_char} . $网格 . ","; } 
	else { ${$side . $zi_char} = ${$side . $zi_char} . $网格 . ","; }
}

zi_assembly_helper("N", "e3", 'F_'); 
echo $F_N . "]";

// Problem: else contains a condition in the broken-OG # 
// Problem-2: $GLOBALS or global prefix needed to reference global-funcs # 
?>
<!--FIN-->

<!-- http://chess/testing-progress/chess-testing/zi.assembly-diagnostic.php 
x.ref-FEN,render-->