<?php $P_王 = new bing(); echo $P_王->loc; print_r($P_王); $P_王->set_loc("a", "7"); print_r($P_王);
$K_嫁 = new 帅(); print_r($K_嫁); ?>

<!-- http://chess/testing-progress/class.instansh-obj,decl.vert-test.php -->
<!-- Notes: -->

<style>.prot-E{background-color:00FF00}.neutr{background-color:607399;color:white}.eE{background-color:red}</style>
<?php class bing {public $loc = array("b", "8"); function set_loc($file, $rank){$this->loc = array($file, $rank);}} 
class 帅 {}?>

<!-- test-prog 
ini-ret: bing Object ( [loc] => Array ( [0] => b [1] => 8 ) ) 帅 Object ( )
	upd-loc Object ( [loc] => Array ( [0] => a [1] => 7 ) ) -->
<!-- refs:
	w3schools.com/php/phptryit.asp?filename=tryphp_keyword_new
	wonderdevelop.com/php-create-new-object/<defn, call, meth's>
	You can use the instanceof keyword to check if an object belongs to a specific class: ->