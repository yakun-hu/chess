<?php $root="e3";$feed="e5";$分区=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,"g"=>7,"h"=>8);
function diag_insc($root,$feed){global$分区;/*encode*/$root_upt=$分区[$root[0]]-$root[1];$root_downt=$分区[$root[0]]+$root[1];$feed_upt=$分区[$feed[0]]-$feed[1];$feed_downt=$分区[$feed[0]]+$feed[1];
/*assembl*/$i_1_enc=array($root_upt,$feed_downt);$i_2_enc=array($feed_upt,$root_downt);/*dbeg*/print_r($i_1_enc);print_r($i_2_enc);/*assembl can be ghost-wip'd<ral-trans>*/
/*decode*/$i_1_dec_f=($i_1_enc[0]+$i_1_enc[1])/2;$i_1_dec_r=$i_1_enc[1]-$i_1_dec_f;$i_2_dec_f=($i_2_enc[0]+$i_2_enc[1])/2;$i_2_dec_r=$i_2_enc[1]-$i_2_dec_f; /*rt write the deco-2x, I can writ a loop-2 and re.un-set the var #*/
/*out*/return array_search($i_1_dec_f,$分区).$i_1_dec_r." | ".array_search($i_2_dec_f,$分区).$i_2_dec_r;}
echo diag_insc($root,$feed);
?>

<!-- test-prog 
	Err-cas<range>; if col-mism, sqs-ret will be a non-int | also, some sqs might ret a 8+ res | rel-far: int<cas>
		"ANALY.3-backbone"-->
<!-- Notes: 
[Late.8th-13]Solve 2x4 case first | the total dist is the hypotenu of a 3x5 or 24-prop<4.47214; = 2sqrt(5);
	If the gross-dist is 2sqrt(5), then the 2 lines sum-max; if less, then angular-comp | the degr of comp is propor'n-dir 
		Unlike the B-R, the N's range in 1.2-ply is fixed, gross # and this is an asset in red 
		Const, the angl of ini.mo-E is 180 | when there is a set of 2 mos bet'wn 2 E's, is the trngl<> alw-symm? 2x2-cirucmflex
			Conj: yes, testable # symm.dir-revr,pythag #conservation<receiveus>
			Length of 3 sides: not conserv'd | what is a # that can descr N-diags | N.diag-by,dist de/en-cod
			Angle sum and gross sum of 2 sides is conser'd <theor>
			is fi + rn/2 poss? 3x5 det'm the angl, but not dir | 3x5: the interced'n folls the parll of the ln of the roo-fee; check.4-conds 
				Conj: in all other-cas; and the 3x5, the onl w/ a str8, are either ln, bc the net-ln # is not a N-ln parll 
				Which means, I won't be able to defn a N-ln by the roo-fee, but the 3x5 | a catch-all is elus# 
[Earl]If I flip the fl-src array<glob>then I might be able to concise all array_search insts : adapt: "angular-dev", to try to recycl for N or even R<v-t>
	Difference of Common Values Adjustment // MIC Theor: the intersc of 2 lines loc on the line’s 
		Use one t as the ln-set, and anuth ln-increm | a singl func can deco either enc, known, the upt # is always same indx # <T-r>
		base#compu | I need the onl.3-on,9 the val of a substr-op has a single sol; but for any val, there are inf ops; to find the op, we apply src 
		is there, an op, we can use as thiks src?<"coding">interm-trnsf | FOIL-FLIP, algebra<vars>?
			f+r=downt<set>, f-r=upt and downt / upt are known 
				break-1) r=f-upt 
				2) f+(f-upt)=downt
				3) 2f-upt=downt
				4) 2f=downt+upt
				5) f=(downt+upt)/2 
				Nex: r=downt-f , after f is known /*i_1_dec=;i_2_dec=;*//*an uptxdown interssec | math*/ 
			Check: 1_ins is c4; c=3 ✔️ | test wh'ppn when I ins non-colo,ln sqs into func
			the func has-abl gen.1-2,by<cond>avoid.clust-src 
				deci: compoun-compu
				pttns by diag<hare>2x4-offset				-->
<!-- Issues / to do:
	func has a ret-val even for sam-ln # <err-src> -->
<!-- references: http://chess/testing-progress/testing-archive/Experiment-archive/8th-passed/diag.theorem-test.php -->