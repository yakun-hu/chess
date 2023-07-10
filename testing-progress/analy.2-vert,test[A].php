E1: Input | 1-s: S: K-d8 R[e4,]P[d7,] | F: K-f7 R[c1,][D]<br><br><?php require'innate.M-trait,class.inc-test.php';?>
<!--first array--><?php $POSTED_assoc_f=array("f7"=>"K","c1"=>"R"/*locs from analy-1*/);$POSTED_assoc_s=array("d7"=>"P","d8"=>"K","e4"=>"R");$count=-1;
function transform($input,$side){foreach($input as $sq=>$type){global$count;global$type_dict;global$array_of_32;$count=$count+1;$type_count=$type."_".$array_of_32[$count];$$type_count=new $type_dict[$type]($sq,$side,$type,$count);print_r($$type_count);}}

$f_classes=transform($POSTED_assoc_f,"f");$s_classes=transform($POSTED_assoc_s,"s");print_r($f_classes);

?><!--1) square.key-attr[zi-assembl,upd]-->
		<!--gen'd in analy-1--><?php /*catch-post*/?>
	<!--obj-instansh--><?php /*d7-P, d8-K*/
	$P_王 = new bing("d7","s");$P_王->__ray_cntr(array("d8"));print_r($P_王);// $P_王->function(); array index ref in var.name-2nd 
	$K_嫁 = new 帅("f7","f");
	$K_界 = new 帅("d8","s");
	$R_使 = new Rook("e4","s");
	$R_死 = new Rook("c1","f");?><!--set-fx-->

<!--2nd array[f.r-r,r]--><?php $filer = array("f"=>7,"c"=>1,"d"=>array(7,8),"e"=>4);?>
<!--3-lie[r.f-f,f]--><?php $ranker = array(1=>"c",4=>"e",7=>array("d","f"),8=>"d");?><!--emante.thru-thes>

<!--4th--><?php // $E_Assoc = array($P_王, $K_嫁);//print_r($E_Assoc);?><!--only-E-->
<!--Write a #main-func to convert E_assoc into output--><?php function E_assoc_分析2($E_Assoc){}?>
<br><br>E2: <b>Output</b> | Output-cheq<br>
<table><tr><td>d7-P<span class="prot-E"><1:0></span></td><td>f7-K</td></tr>
<tr><td>d8-K<span class="neutr"><0></span></td><td>c1-R</td></tr>
<tr><td>e4-R</td><td></td></tr></table>
<?php // E_assoc_分析2($E_Assoc);
$R_使->fill_scrines();//print_r($R_使);?>

<!-- http://chess/testing-progress/analy.2-vert,test[A].php#h3 -->
<!-- Notes: 
[Late.7th-8]Problem: Statics !expr: rel | Verbal<MIC>The function that emits output, E_assoc_分析2, must echo 1) all zi locs, 2) cat'd by side, 3) E-tags any appl'b, 4) cat'd by side; 
	It takes as an arg $E_Assoc, which contains an array of obj | These data # are curr-sctr'd, but cnt'd in few, and Rels-un,crt The original idea was<pinp>to loop through lin'd-r<r>ays and use The
	zi.M-18	to identif zi #next
===
	interessant:function.array-column.php, extracts 2-d~ array from >2d array<deriv> | obj-proc; array-chunk<infr>does revers
		2nd argu: the key-name of the return-clmn | 3rd arg: "order by"
	https://youtu.be/PJvG9wDkrbU PHP multi.dimens-array, "array of indexed/assoc_arrays" 
	Closer to output funcs in analyz will live in the #mains 
	A slightly circuitous route<自然和谐>offsets future-discount
	Ref: https://www.php.net/manual/en/language.oop5.decon.php 
	a *de"str meth runs when obj-del think.the-un,ble array($P_王, array($K_嫁))
	Trait use has sig-issu🔴 | Must: test.this-sep | When a class uses a trait, it cannot be called post-scr # -->

<style>.prot-E{background-color:00FF00}.neutr{background-color:607399;color:white}.eE{background-color:red}</style>
<script>document.getElementsByTagName("TITLE")[0].text="analy.2-vert,test[A].php"</script>