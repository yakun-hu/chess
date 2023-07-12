<?php 
$贴协_s=array("e3"=>"N","f2"=>"P");$贴协_f=array("g5"=>"B","e5"=>"R");$filer=array();$ranker=array();
function 造铁($贴协_s,$贴协_f){print_r(array_keys(array_merge($贴协_s,$贴协_f)));global$filer;global$ranker;
foreach(array_keys(array_merge($贴协_s,$贴协_f)) as $sq/*✅*/){echo$sq;if(array_key_exists($sq[0],$filer)){$filer[$sq[0]]=array($filer[$sq[0]],$sq[1]);/*$filer,mention$sq[1]*/}else{$filer[$sq[0]]=$sq[1];}if(array_key_exists($sq[1],$ranker)){$ranker[$sq[1]]=array($ranker[$sq[1]],$sq[0]);}else{$ranker[$sq[1]]=$sq[0];}} 
}
print_r($filer);print_r($ranker); 
造铁($贴协_s,$贴协_f);
?>

<!-- http://chess/testing-progress/array.manipu-test.php -->
<!-- Notes 
	PHP:function.array-merge.php for each sq, the indx[0]is file, the keys of filer; I need all the unique filers; and also to assoc
		the files w/ assoc'd ranks; so the distinc'fy cannot remove the assoc'n PHP:function.array-push.php stackoverflow.com/a/20468000/20256608 push to assoc-array -->

<style>.prot-E{background-color:00FF00}.neutr{background-color:607399;color:white}.eE{background-color:red}</style>
<script>document.getElementsByTagName("TITLE")[0].text="E_summation-vert.php"</script>