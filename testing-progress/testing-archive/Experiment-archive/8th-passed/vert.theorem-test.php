<?php $root="g7";$feed="b2";$分区=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,"g"=>7,"h"=>8);
function vert_insc($root,$feed){global$分区;/*encode*/
/*assembl*/
/*decode*/$ins_1=$root[0].$feed[1];$inc_2=$feed[0].$root[1];
/*out*/echo$ins_1." | ".$inc_2;}
echo vert_insc($root,$feed);?>

<!-- test-prog -->
<!-- Notes: ANALY: R: reconstr.by-partsh,Swap -->
<!-- Issues / to do: -->
<!-- references: http://chess/testing-progress/testing-archive/Experiment-archive/8th-passed/vert.theorem-test.php -->