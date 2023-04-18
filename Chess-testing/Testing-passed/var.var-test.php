<?php
$f_N = "Ma_Long"; $s_N = "Zhang";
$side = 'f';
$append = "_N";
echo ${$side . $append};
$output = ${$side . $append};
echo " | " . $output;
if (1==1) { echo " | " . ${$side . $append}; } // works
?>
<!-- http://chess/testing-progress/chess-testing/var.var-test.php -->
<!-- references: WP.MIC-vars, https://stackoverflow.com/a/50594497 -->