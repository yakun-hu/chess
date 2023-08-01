<?php /*require'innate.M-trait,class.inc-test.php';*/require'e.sum-func,2.php';
$R_出=array("d8"=>"f","d6"=>"s","e4"=>"s","h4"=>"s");$Rer="d4";$this_side="s";
$E_出=array("f6"=>"f","d6"=>"s","b8"=>"s","c3"=>"f");$观点="e5";$side_this="f";
$贴协_s=array("d6"=>"P","e4"=>"P","h4"=>"Q","d6"=>"B","b8"=>"K","d4"=>"R");$贴协_f=array("d8"=>"P","f6"=>"R","c3"=>"N","e5"=>"B");
使转($贴协_s,"s");使转($贴协_f,"f");//print_r($贴协_f);echo"<br><br>";
function 接_查($R_出,$Rer,$二侧){global$分区;$S=array();$N=array();$W=array();$E=array();global$分区;
	foreach($R_出 as $出_sq=>$side)
	{if($Rer[0]==/*same-fl*/$出_sq[0]){if($Rer[1]>/*N-of*/$出_sq[1]){/*echo"~✅S:".$出_sq;*/$S[abs($Rer[1]-$出_sq[1])]=array($出_sq,$side);}else{/*echo"✅N:".$出_sq;*/$N[abs($Rer[1]-$出_sq[1])]=array($出_sq,$side);}}
	else{if(strcmp($Rer[0],$出_sq[0])==-1){/*echo"✅E:".$出_sq;*/$E[abs(array_search($Rer[0],$分区)-array_search($出_sq[0],$分区))]=array($出_sq,$side);}else{/*echo"✅W:".$出_sq;*/$W[abs(array_search($Rer[0],$分区)-array_search($出_sq[0],$分区))]=array($出_sq,$side);}}}
	$方向阵列=array($N,$W,$S,$E);foreach($方向阵列 as $方向){if($方向!=array()){ksort($方向);$方向=array_values($方向);推加(0.5,$方向[0][1],$方向[0][0],$二侧);/*echo$方向[0][0]."[0.5_]";*/foreach($方向 as $正方){/*testecho"<br>";print_r($正方);*/推加(0.5,$正方[1],$正方[0],$二侧);/*echo$正方[0]."[0.5]";*/}}
	/*print-ln, refn indx-0 of the $dir-array */}
	/*trub-sh echo" | ";print_r($W);print_r($E);*/}
function 接_歪($E_出,$观点,$二侧){global$分区;$NW=array();$NE=array();$SE=array();$SW=array();
	foreach($E_出 as $出_sq=>$side)
	{if((array_search($出_sq[0],$分区)+$出_sq[1])==/*same-↘️*/(array_search($观点[0],$分区)+$观点[1])){if($观点[1]>/*N-of*/$出_sq[1]){/*echo"✅SE:".$出_sq;*/$SE[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}else{/*echo"✅NW:".$出_sq;*/$NW[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}}
	else{if($观点[1]>/*N-of*/$出_sq[1]){/*echo"✅SW:".$出_sq;*/$SW[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}else{/*echo"✅NE:".$出_sq;*/$NE[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}}}
	$方向阵列=array($NW,$NE,$SE,$SW);foreach($方向阵列 as $方向){if($方向!=array()){ksort($方向);$方向=array_values($方向);推加(0.5,$方向[0][1],$方向[0][0],$二侧);/*echo$方向[0][0]."[0.5_]";*/foreach($方向 as $正方){/*testecho"<br>";print_r($正方);*/推加(0.5,$正方[1],$正方[0],$二侧);/*echo$正方[0]."[0.5]";*/}}
	/*print-ln, refn indx-0 of the $dir-array */}
	/*trub-sh echo" | ";print_r($NE);*/}/*all 4: compr by rank # in each dir, we sort the top by the opp-dir */
/*both xng-Ju will proc 1-4 arrys array_search($路_名[0],$分区); 
	I need to defn 8 arrays them-c<hard-c> and ref these, each, in prnt<hard.c-arry> [1]> is Eastr */
	
	/*test:*/
	echo"R-s:$Rer | ";接_查($R_出,$Rer,$this_side);echo"<br>B-f:$观点 | ";接_歪($E_出,$观点,$side_this);echo"<br>";print_r($R_出);print_r($E_出);echo"<br>";
	foreach($贴协_s as $sq=>$class){echo"<br>";print_r($class->财产["地点"]);print_r($class->E_sum);}
	foreach($贴协_f as $sq=>$class){echo"<br>";print_r($class->财产["地点"]);print_r($class->E_sum);}

// echo"<br>";echo strcmp("a","b");echo strcmp("b","a");?>

<!-- http://chess/testing-progress/target.order-test.php -->
<!-- test-prog 
$方向[0][0] and $正方[0] contain the dest-sq strngs for posted.post-trans<fbno> array_src 
	P-lem: I not have, curr, these obj-instn; this is the dmn of 找考 classes instn w/ 使转 ✅ 
	Issues: d8 not reg'd under E-R: should: 0.5; check issue with $this_side of that R<d4> | e4 shud 1, issue with 接_查 
	Nex-issu: onl left side of each e_sum is reg, and E'd are var-side | check log 
		this issu seems<99%> for both R | B echo$一侧; #ther gives an asso'of-sid ✅ 
		do i have a logic issue of A=A? $一侧 that is sent as arg-dir, is the side of the dest; compr vs the ogn, which indeed
		nex-issu: no e4 her: d6[0.5_]d6[0.5]d8[0.5]h4[0.5_]h4[0.5] e4 is $E 
		print_r($E) not found e4 calc-prob? possib: a missn-segm -->
<!-- Notes 
[Late-29th] print_r($方向);echo" | ".$方向[0][0]; Next: algo for M-rule: the M of a zi, consummately, all legal-M, is comprised individ of its nearest-出 and the board’s edge as a $lim | // synd-MIC
	Write a loc-updater that consummately for a single pre and post loc based on possib.M-rules w/ inter-reds updates the loc of a zi in each context<func> | // synd.WP-MIC
[Late-28th<fbno>] I have the cases of 4 dirs; reca: there is a proxim-sep for zhi and diag, this shud refl in innate-calls
	Now, need to push the arrs; subseq, for each of the arr, indx 0 <after-sort> gets 1 val to 推加, rest, 0.5 | this func is E_sum,onl<mu-di>
		Reca-2: is the arr-pu alr sort'd inn? ikey-loga; 接s procs ent.Chu-rry, logic' this must be post all Chu-ssemb 
		Run php.net/manual/en/function.ksort.php | php.net/manual/en/function.array-values.php | then, hard-c incr by -0.5 for the indx 0, then 1 foreach all # note, there cannot be a tie at indx 0, bc i split a line into 2 dirs alr # 
			P-lem: PHP-builts array_keys/vals does not make an assoc array of the vals | in.func-also:$方向阵列=array($NW,$NE,$SE,$SW); takes a snap-sh of those vals, but cann' upd the'rrs
[Late-27th] the proxim-funcs, needed onl B, Q, R; and for Q, independ by bi.vect/ype, is run z-zug,ween E.Chu-Sum (next) theref, after pruner(s)
	But note: the proxims are run only on types that do not use $lim; conversely, only full-E are granted when there is E, to $limmed; 
	theref, this inf'ms impl of the $lim-cond, and subseq E_Sum.push: in the mother-func: if($lim){限修();}else{接_查/查();} E_Sum can be ssemb'd dir inside the deepest-nest
	reca: only the $lim side<pruner>E's Chu; Proxim side has no return cond E on Chu, which is still ssembl'd in the nex-step
	this impl-prop is contrad,extn to $lim.pruner<7th-26>, which has a 1 order simpl'r cond , but is <u>better</u>
[Late.7th-19] // add echo-mrkr With cond-sorted<fbno>by inequal-parti,alr # I simply need sort(asc) for the < group and sort(desc) for the > group; subseq, indx[0] of each gets 1 full, foreach rest, 0.5 | left or right depn $side # Outpu-lu nex
	Side for $Per is non-spec'd<hard-c>d4-R is not in $观点-rng
	The context that these are called is from within the class<~>after $E_Chu is assembl'd //.MIC-pu
[Ini]defn inpu/out "end-points":  tmrw: Sol, loop-thru $POSTED_a's and repl the val, zi-type, w/ $class-var, which contains zi-type, and can be read w/ matcher # ✅ 
This repl # will occur on analy-2, during obj.instansh-loop Next: a condition Anki move generator; from a b-p<thought-domain>that is the b.p-Anki # enter a sort() 
style if-cond, even, $that-code, and render a Standard Anki Board Code<fbno-defd>which introduces the newly-E of that move, optionally, the E-diff in the res-sq, some, ini-sq, checkbxe, and some meta-analys<review-ki>
The ini-End can be the $loc Simply then an array of endpoints, and total_M can be calc’d for that zi also, all, in 并行() We-dun: 造铁 must prec 使转 
function 并行查找_op($line_名/*RorF🌭*/, $lim=16){ echo $line_名; }$R_王->并行查找_op(财产["地点"][0]); Uncaught Error: Using $this when not in object context
Place the contents of class Rook_test and Bish_test from array.manipu Build the E_Sum pushing After, build $贴协 in zi_assembly_helper()<analy-1>Ultimately, what I need is E_SUM 
<analy-1>$贴协✅<rails>⭐class-search⭐<E.Sum-Chu> 1) I did not yet build $lim, and 2) did not build E.Sum-Order Both are range-based, dep'n abs<val>Automate retri side information from class
Bump line search into discrete traits Push to line.op-main and inc-Sep Output loop: array_length by count() both posteds; run a for by length loop and shut down the shorter; incr loop through the entire row # #unique 
php.net/manual/en/array.sorting.php | assump-comp vs rank php.net/strcmp
-->

<style>.prot-E{background-color:00FF00}.neutr{background-color:607399;color:white}.eE{background-color:red}</style>
<script>document.getElementsByTagName("TITLE")[0].text="target.order-test.php"</script>

