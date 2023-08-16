<?php function 找考(){}
$root="e5";$feed="e2";$posted=array("d4","f7","f6");
function diag_insc($root, $feed){ /*encode*/$root_upt=; $root_downt=; /*<sub>color-disreg*/ $feed_upt=; $feed_downt=;
	<sub>orien.tgt-discv
	<sub>upt_src
	<sub>downt_src
	===
	<sub>enco
	<sub>deco
		calc the sq that has root_upt and feed downt
		calc the sq that has root_downt and feed_upt 
} function zhi_insc(){}
function valu_prio(){}
function mark_move_class(){}
function m1_sol(){
	check_checker<sub-func>
}
New funcs-2: micro_src_to | micro_src_from
	micro reqs: intersc
?>

<!-- test-prog -->
<!-- Notes:
[8th-11] Analy: get color type which checks even / oddness of a sq Analy: there’s no need to depict moves that repeat-E #
	Outpu: Analy: R.inters/rc #: equidn from each sq, 3,1 | 1,3 formulaically No int or occ, road to intersc must be clr, sum(E) “That rank of this file” 
		F: caps | mos
		S: caps | mos
[Late.8th-10]The definition of 2 lines that can intersect to find the check sq once for R B N as the fundamental calculation in analy-3 #lines-extrap
	Gen a $ranked analogue for B E-sec dosn imply # M-sec | a B’s M insc w/ line-occ, both diags of 2, lest border or int 
	That sec by pythags<fast>or x dist, check, the upt # src on the downt | calculate a lin-sec w/o chess
		:fastest.M-to;
		1) diag-sec onl,poss, same-col<even/odd><theorem?><check-tableau>any inters must be at pythag-intervls from each eman
	For any 2 points; the inters func first determn from the eman, the dir of the tgt; then, runs a upt-src, and a dwnt-src # 
		2 funcs: diag-insc, and zhi-insc | intersc is the E-sq to occ<capt-opp,bi.dir>
		Find interset w/ all in posteds<src-dest>by what stim? The out is gen 
[Rec-Earl]8/8/8/8/2k1Bp2/P1p2Kp1/8/8 b - - 3 45 | 45-s: S: K-c4 P[f4,c3,g3,] | F: B[e4,]K-f3 P[a3,]
	白: Array ( [总价] => 4 [总E] => 4 ) Array ( [总价] => 3 [总E] => 2 )
	g3-P<1:1>	e4-B<0:1>
	f4-P<0:1>	f3-K<0:1>
	c3-P<1:0>	a3-P<0:0>
	c4-K<0:0>
45...Kb3<cont.c2-1,1>46. Kxf4 g2<defl><auto-tack>47. Bxg2<acqui>c2<hom-fre>
calc'n this shud be: str8, no vars
	46...c2<cnt-pn>permits sac-take s.val-0<1/2>
"Cap-calc" x mat.val-adj x prop-iden; weight-mo; Kb3 is iden'd bc c2 is a "key-sq"<corres><Howetz><Scrahl><Raredwarf>
	The "value of this sq" in mat-val<T-ran>; otherwise, this move can't be foun.by-engn
	46. Ke2!?, <closn.prox-c2>als-llo g2!; the range of this K must be cons'n
	
ded-steps: a cap.val-calc; where the adv c3-c2 is ev'd at ~+2/4 an analo-cap,mo; g3-g2, can same; given, s an infl ch.6-ev
	further, c2-c1, an-autre +4 top ; sac the g-p, theref the 1-cont of c2 by the f-B > its val thr-val; 
	
Summ-1: Pro-adj,ev.mo | pro - anti | potensh-smar,predc
	value-adds: "moving to occ a val-sq" | "mov to conten" ~ cap-mo
Summ-2: avoi gen.M-summ't in analy-3; use E_Chu, gen-knowl<playr> and E_Tot as proxies;
Summ-3: Focal: propert of zi; recog a) passed-P, and theref<step-2>adv-sq; valuate contr of sq, recurs
	How can a pp be recogn'd, and when? New tab on click? Then what stor-sess # #new-compu
		Dir-assoc'd w/ recog of zi is an assignm of val to the fwd-sq; $lim-pruner # handl's or, the data-from theref, extens-
	Other.e-g: R on O-fl<no P's in e_chu on a vert-vect>
Summ-3<8th-8>Analy-3: revers-eng moves that ach-purpose, ie + cont-c2, defl loa-bnd incr.epnn-micro,stps 4.Major-Concs
	Fwd-swi: I could see 1) endg 2) no-# 3) promo-diffrn 4) comptn-thr 5) c2 crit, scnd g2 a) narrows: ~s-Kb3<mn>Kd4,g2; g2-sack, considr
		All: within pedg'rsn: Kb3 req more "gall"; compl-dens, 2x analy-2 "What would I need to see" 4.Major-Concs
		Ascr: the conn, itself conn # w/ analy.2-ou,borr.1<repri>
	Kb3, concr was Kxf4!<-1>, so the nee to weig loss of mat.val-1 w/ poten-gn, trackn arithm | Kd4$<3>hedg, but too weak Kb3, was <u>stronk'r 
		~req sigh.to-d,3<key>g2!<audac><ch-48>a second-sack,pu.env; justif by analy-3; so not the possib of Kb3 brough, but rt the gall to forg+ w/ g2-furh; a data # 
		a data, concr.the-unknw | what is the countr-w; loss of 2-P, incl;zyg~ recogn g2-Bxg2 is a forc-mo 
			first train 2...g2, then 1...Kb3<T>; even, 3...c2<promo-fr> | ded.2-3,6<a-3>gen'ly, the c2-val can evn-prog'd, l8t fld
	Analy-3: Intelli.mov-gen w/ caps and moves to occ # key sqs based on ch.6-improvs, $ and + before a gen src <corres-q><check-sc> combo n/motif
		Can inters be found w-out set-gen, or, to use the intersc-prop as gen? Tag typing in move gen input “<p-push>” search dict of funcs poss stored in SQL
	Key.prog-conc<a-3>: multi-thr | poss: v.hos-merg #abac revw MIC-dict “Tact-pckg” Retr E on sq, using the ch.3-feat, but typn an empt<c2> combo some adj-val | vs: “E-Chu” 
		“Light rns” Crunc the key-gen hmn-pn,pnt “Strategic Square Qualifier”; human’den Top moves by “Effect on Value”; dodgn minor-tacks, +/-, x, and mov-promo w/ expan-rsn 
		Adj or summ-comp: moves by E-delta An adjusted total value summary, list of conci-mo # sorted thru # mo-gen Loca: new tab, appr after click analy-2; w/ the sess_data
		X<caps>, mo.to-$,+, -$/+, hard-c props ✅ har-c the out-pu for this pos w/ tabbn writ: poten-mo to a lite-db
Theorem: A zi’s move can add E apart from to itself of a zi other than itself only by <clr> // analy + MIC
	Analy-3: show full Arabic +$ -🛡️ for each move note, including <clr>, which factors into the total E-deta<Anki>
	Case: when a P reaches, therefore advancing it | value <T>In order the newly E_Sum and Chu for each move, 4-8, I need micro-src # 
		An-3: "Do I get antyhing from him havn to x.w/P? Retri-games: C.U-B,C Analyzer - 80 clicks per game 2.char-Cn is 10000x more div than anal-Eng
			Analy-4: ch-26,50 | region-mapn<ch-2> coer.clr-run,zones Coer.path-splash,map // compr 
-->
<!-- Issues / to do: 
Analy-3: front load analy as much poss w/o req’use fwd depth gen Mo-analy,cap: Bxe3(val), where val is of captur’d; display only prot-mo to start; for strat-mo, the har-c prop of zi indicates value of strat-sqs by assoc<T> 
	Elicit CUBC to help with augm-calc # markup-prog Other props l8r: E-delta, diff on move Another key attr would be adding crit-shel or $ 
	home.free-caps # these were reg’d in the mat.diff-color,coder which has #<perm>a registry of key-sqs by E | goal: gen 1/4 mo as sqs 
	Funcs: Intersec-discov | markup by move class<SQL-loo> | valu-rnk 

Table-str: 
Mo-note | Valu | B.p-res -->
<!-- references: -->