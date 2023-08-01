<?php
// array_rand — Pick one or more random keys out of an array https://www.php.net/manual/en/ref.array.php
$fun_mojis = array('👁️', '👀', '🧿');
$key = array_rand($fun_mojis, 1); 
echo $fun_mojis[$key];
?>

<!-- http://chess/testing-progress/Randomization-testing/array.rand-test.php -->
<!-- test-log:
	22:46 11/21/22: Test passed:
		1 of 3 selected at random. Echo successful to page. 