<?php require'innate.M-trait,class.inc-test.php';?>

Desi'r-pu: <3:2>form'd for a sq: F: B[g5,]K- R[e5,] | S: N[*e3,]K- P[f2,] 

e5$e3 
f2🛡️e3 
g5$e3 
<1:2><br>

E-array of N-1<e3>; discuss: a probl of dat-redun'c rels are bi-dir, and stor-onc; E_Sum[Q-fy]<br>
Q:[philo]is it more pert to displ rel from the send.or-rec? Standard Anki: there is an off-bias<br>
Either, sum<|type|>sums can be resembl'd since lo'less; theref<br>
<?php $E_sum = array(0,0);$贴协_s=array("e3"=>"N","f2"=>"P");$贴协_f=array("g5"=>"B","e5"=>"R");$ranker=array(5=>array("e","g"),3=>"e",2=>"f");$filer=array("e"=>array(5,3),"g"=>"5","f"=>"2");?>
MIC: For each elem in 贴协[s], run lines-crines by its type; and constr E_出 by looping through $liner[both] where E_出dt=(inx.类-班), a 关系数组, 按发现排 | 
	and, foreach E_出.elem add to that elem's E-sum dependent on a bi-dir, abs-val split if-calc | ppt-calc<fbno~!><br><br>
	
Lines-crine:types,
	R: Loop both rails, find key-matches 2) <br>
	Diags[P,K], from the kai-sq, calc: from the emen, +/-+1 exac var.1-x, by matrix-add where m,m 
		Loop-cnt a matrx.transf'm-fctr, and fork +(+-)-(+-)
	a) +- b) -- c) ++ d) -+; for $lim=16, terminate when # both m's>8 | if match, run a 2nd phase to calc # <br>
	
<p style="text-indent:10px">Lvl-2:assembl $E_sum(s)
<?php $N_王=new L_码("e3","s","N",0);
$loc="e5";$type="R";$side="f";$E_出=array("e3"=>"s");$N_王->E_sum[1]=$N_王->E_sum[1]+1;
$loco="f2";$typo="P";$sido="s";$O_出=array("e3"=>"s");$N_王->E_sum[0]=$N_王->E_sum[0]+1;
$loci="g5";$tipo="B";$sydo="f";$y_出=array("e3"=>"s");$N_王->E_sum[1]=$N_王->E_sum[1]+1;print_r($N_王->E_sum);?></p>

<br>E2: <b>Output</b> | Output-cheq<br>
<table><tr><td><?php echo array_keys($贴协_s)[0];?>-P<?php // echo strtok($贴协_s[array_keys($贴协_s)[0]]->财产["专名"],"_");?><span class="prot-E"><<?php echo $N_王->E_sum[0].":".$N_王->E_sum[1];?>></span></td><td><?php echo array_keys($贴协_f)[0];?>-K</td></tr>
<tr><td><?php echo array_keys($贴协_s)[1];?>-K<span class="neutr"><0></span></td><td><?php echo array_keys($贴协_f)[1];?>-R</td></tr></table>

<br>Summary: Let lines-crines by led by E, then M | The P has M that is not E <ch.56-opp>

<!-- http://chess/testing-progress/E_summation-vert.php -->
<!-- Notes -->

<style>.prot-E{background-color:00FF00}.neutr{background-color:607399;color:white}.eE{background-color:red}</style>
<script>document.getElementsByTagName("TITLE")[0].text="E_summation-vert.php"</script>