<?php trait Zi {function text(){echo "Hello<br>";}public$loc;public$side;public$E_array=array();function __construct($square,$side){$this->loc=array($square[0],$square[1]);$this->side=$side;}function __ray_cntr($array){foreach($array as $sq){array_push($this->E_array, $sq);}}} 
class bing {use Zi;} class 帅 {use Zi;} class Rook {use Zi;} 
$rook = new bing("d8","f");
$rook->text(); 
print_r($rook);?>

<!-- http://chess/testing-progress/testing-archive/Experiment-archive/6th-abbrv/trait.use-test.php
"Yahoo" Babh https://www.youtube.com/watch?v=OJ5fmrMMcDU #Gi -->