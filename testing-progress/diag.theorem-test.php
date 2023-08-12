<?php $root="d5";$feed="e2";$分区=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,"g"=>7,"h"=>8);
function diag_insc($root,$feed){global$分区;/*encode*/$root_upt=$分区[$root[0]]-$root[1];$root_downt=$分区[$root[0]]+$root[1];$feed_upt=$分区[$feed[0]]-$feed[1];$feed_downt=$分区[$feed[0]]+$feed[1];
/*assembl*/$i_1_enc=array($root_upt,$feed_downt);$i_2_enc=array($feed_upt,$root_downt);/*dbeg*/print_r($i_1_enc);print_r($i_2_enc);
/*decode*/$i_1_dec_f=($i_1_enc[0]+$i_1_enc[1])/2;$i_1_dec_r=$i_1_enc[1]-$i_1_dec_f;$i_2_dec_f=($i_2_enc[0]+$i_2_enc[1])/2;$i_2_dec_r=$i_2_enc[1]-$i_2_dec_f; /*rt write the deco-2x, I can writ a loop-2 and re.un-set the var #*/
/*out*/return array_search($i_1_dec_f,$分区).$i_1_dec_r." | ".array_search($i_2_dec_f,$分区).$i_2_dec_r;}
echo diag_insc($root,$feed);
?>

<!-- test-prog -->
<!-- Notes: 
	If I flip the fl-src array<glob>then I might be able to concise all array_search insts 
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
			Check: 1_ins is c4; c=3 ✔️ | test wh'ppn when I ins non-colo,ln sqs into func -->
<!-- Issues / to do: -->
<!-- references: http://chess/testing-progress/diag.theorem-test.php -->