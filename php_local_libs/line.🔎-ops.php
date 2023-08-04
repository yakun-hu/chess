<?php /*line.🔎-ops.php*/$type_dict=array('P'=>'bing','K'=>'帅','R'=>'Rook','N'=>'L_码','B'=>'像','Q'=>'Q');$array_of_32=array('王',"嫁","界","使","死","定","可","模","株","素","田","妙",/*12*/"平","特","别","令","副","系","网","庙",/*20*/"保","亭","完","成","损","失","福","建"/*28*/,"神","皮","料","才","门");/*used to nomencl.zi-upon,instansh*/$分区=array(1=>"a",2=>"b",3=>"c",4=>"d",5=>"e",6=>"f",7=>"g",8=>"h");/*merg w/ file_dict in analy-1*/$ranker=array();$filer=array();
	if(isset($_SESSION["贴协_s"])&&$_SESSION["贴协_s"]!==array()){$贴协_s=$_SESSION["贴协_s"];}if(isset($_SESSION["贴协_f"])&&$_SESSION["贴协_f"]!==array()){$贴协_f=$_SESSION["贴协_f"];}
function 造铁($贴协_s,$贴协_f){/*print_r(array_keys(array_merge($贴协_s,$贴协_f)));*/global$filer;global$ranker;	foreach(array_keys(array_merge($贴协_s,$贴协_f)) as $sq/*✅*/){/*echo$sq;*/
		if(array_key_exists($sq[0],$filer)){if(gettype($filer[$sq[0]])=="array"){array_push($filer[$sq[0]],$sq[1]);}else{$filer[$sq[0]]=array($filer[$sq[0]],$sq[1]);}}	else{$filer[$sq[0]]=$sq[1];}
		if(array_key_exists($sq[1],$ranker)){if(gettype($ranker[$sq[1]])=="array"){array_push($ranker[$sq[1]],$sq[0]);/*check-l8r*/}else{$ranker[$sq[1]]=array($ranker[$sq[1]],$sq[0]);}} else{$ranker[$sq[1]]=$sq[0];}}/**/}
function 使转(&$贴协,$side){foreach($贴协 as $sq=>$type){global$计联;global$type_dict;global$array_of_32;$计联=$计联+1;$type_计联=$type."_".$array_of_32[$计联];global $$type_计联;$$type_计联=new $type_dict[$type]($sq,$side,$type,$计联);$贴协[$sq]=$$type_计联;/*print_r($$type_计联);echo" | ".$计联." | ".$type_计联;*/}}
/*these-funcs musbe cal'd in-ln*/
function 接_查/*meta-loo*/($R_出,$Rer,$自侧){global$分区;$S=array();$N=array();$W=array();$E=array();foreach($R_出 as $出_sq=>$side){
		if($Rer[0]==/*same-fl*/$出_sq[0]){if($Rer[1]>/*N-of*/$出_sq[1]){/*echo"~✅S:".$出_sq;*/$S[abs($Rer[1]-$出_sq[1])]=array($出_sq,$side);}else{/*echo"✅N:".$出_sq;*/$N[abs($Rer[1]-$出_sq[1])]=array($出_sq,$side);}}
		elseif($Rer[1]==/*same-rn*/$出_sq[1]){if(strcmp($Rer[0],$出_sq[0])==-1){/*echo"✅E:".$出_sq;*/$E[abs(array_search($Rer[0],$分区)-array_search($出_sq[0],$分区))]=array($出_sq,$side);}else{/*echo"✅W:".$出_sq;*/$W[abs(array_search($Rer[0],$分区)-array_search($出_sq[0],$分区))]=array($出_sq,$side);}}}
	$方向阵列=array($N,$W,$S,$E);foreach($方向阵列 as $方向){if($方向!=array()){ksort($方向);$方向=array_values($方向);推加(0.5,$自侧,$方向[0][0]);/*echo$方向[0][0]."[0.5_]";*/foreach($方向 as $正方){/*testecho"<br>";print_r($正方);*/推加(0.5,$自侧,$正方[0]);/*echo$正方[0]."[0.5]";*/}}}}
function 接_歪($E_出,$观点,$自侧){global$分区;$NW=array();$NE=array();$SE=array();$SW=array();foreach($E_出 as $出_sq=>$side){
		if((array_search($出_sq[0],$分区)+$出_sq[1])==/*same-↘️*/(array_search($观点[0],$分区)+$观点[1])){if($观点[1]>/*N-of*/$出_sq[1]){/*echo"✅SE:".$出_sq;*/$SE[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}else{/*echo"✅NW:".$出_sq;*/$NW[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}}
		elseif($观点[0]!=$出_sq[0]&&$观点[1]!=$出_sq[1]){if($观点[1]>/*N-of*/$出_sq[1]){/*echo"✅SW:".$出_sq;*/$SW[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}else{/*echo"✅NE:".$出_sq;*/$NE[abs($观点[1]-$出_sq[1])]=array($出_sq,$side);}}}
	$方向阵列=array($NW,$NE,$SE,$SW);foreach($方向阵列 as $方向){if($方向!=array()){ksort($方向);$方向=array_values($方向);推加(0.5,$自侧,$方向[0][0]);/*echo$方向[0][0]."[0.5_]";*/foreach($方向 as $正方){/*testecho"<br>";print_r($正方);*/推加(0.5,$自侧,$正方[0]);/*echo$正方[0]."[0.5]";*/}}}/*target.order-test.php*/}
function 推加($数量,$一侧,$目地){$贴协=array_merge($GLOBALS["贴协_f"],$GLOBALS["贴协_s"]);if($一侧==$贴协[$目地]->财产['side']){$贴协[$目地]->E_sum[0]=$贴协[$目地]->E_sum[0]+$数量;}else{$贴协[$目地]->E_sum[1]=$贴协[$目地]->E_sum[1]+$数量;}}?>
<!-- refs: http://chess/php_local_libs/line.🔎-ops.php -->
<!-- notes: 
/*same-rn*/ check added to block Q-confn
/*same-↗️*/ added as "dissame-vert" elseif($观点[0]!=$出_sq[0]&&$观点[1]!=$出_sq[1]) -->
<!-- test-prog: 
echo$数量.$目地."<br>"; in function 推加 first-prop 
print_r($方向);echo"<br>"; in $方向阵列=array($N,$W,$S,$E);foreach($方向阵列 
print_r($观点); in function 接_歪 first-prop for each sq that calls | only e5 calls 接_歪, at all<v-weir> -->