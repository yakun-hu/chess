<?php $root="c2";$feed="c6";$分区=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,"g"=>7,"h"=>8);
function N_insc($根,$供){global$分区;$N_hyp=sqrt(5);$平间=$分区[$根[0]]-$分区[$供[0]];$直间=$根[1]-$供[1];
/*verif*/$mid_pn=array($分区[$根[0]]-$平间/2,$根[1]-$直间/2)/*x,y of $ro-$fe md*/;
/*encode*/$ro_fe_len=sqrt(($平间)**2+($根[1]-$供[1])**2);$md_mo=sqrt($N_hyp**2-(($ro_fe_len/2)**2))/*1/2-tot*/;
/*transf*/$runer=round($直间/$ro_fe_len*$md_mo,1);$riser=$平间/$ro_fe_len*$md_mo;/*print_r($mid_pn);echo$riser.$runer."<br>";*/echo"mid_pn[0]: ".gettype($mid_pn[0])." ".$mid_pn[0]." | "."vruner: ".$runer." ".gettype($runer)."<br>"."Sum ^^ ".gettype($mid_pn[0]+$runer)." ".$mid_pn[0]+$runer."<br>"."arr_src: ".intval($mid_pn[0]+$runer).array_search(intval($mid_pn[0]+$runer),$分区)."<br>";
/*deco-1*/$mo_1=array_search($mid_pn[0]+$runer,$分区).$mid_pn[1]-$riser;$mo_2=array_search($mid_pn[0]-$runer,$分区).$mid_pn[1]+$riser;
/*teest*/echo$mo_1." | ".$mo_2;}
echo N_insc($root,$feed);?>

<!-- test-prog 
	2x4 ✅ 2x2 ✅ 1x3 ✅ 1x5: probl: c2-c6 returns 4 | d4, shud b4 formull-err 2, produ, not fnd in $分区
		Jus.num-2, wrks #registr-err intval-brk?<weird-3>
		echo gettype($mid_pn[0]).gettype($runer).$mid_pn[0]+$runer.array_search(intval($mid_pn[0]+$runer),$分区)."<br>"; == integerdouble2a  <weird-5>
		c2 and d4, which rets b4,e1, also an b-cont, is immun<weird-7~>
			in this case, the 2 gettypes are "double double" | patchn intval($runer) "top-err" | conty-disco
			double is an dominant trait | $md_mo carries the gen/ in the prec-gen | irrat | you can't intvall too earl
			prol: $runer is sometim a decim, so we can't intval it gen "ghost-irrat" inde, intval(1.99) is 1
			rnd $runer to the tenth plc fix's, th iratt-margn is tight 
	Edge-tests: b2-b4 returns 3 | d3; there is no src-0 in $分区 | loop-testn -->
<!-- references: http://chess/testing-progress/N.theorem-test.php -->
<!-- Notes: 
	The law of pnpc works in any Orem of abs<abstr> Analy: the clock perspec: the rise, or the rising rate, of the $ro_fe ln is constant; by rise, we can find this abs, and the reciproc rise, by the horizon, or as a 1/4 or 6 hour clock offset # 
		Dire the rise and it’s recipro Any horizon compr: 180 | the angl of $ro_fe<abs>via abs #, the law of perpndc<90> can driv the transf<N.ther> cont: 	 -->
<!-- Issues / to do: -->