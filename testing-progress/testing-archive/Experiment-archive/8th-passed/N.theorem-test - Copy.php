<?php $root="g7";$feed="f4";$分区=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,"g"=>7,"h"=>8);
function N_insc($根,$供){global$分区;$N_hyp=sqrt(5);$平间=$分区[$根[0]]-$分区[$供[0]];$直间=$根[1]-$供[1];
/*verif*/$mid_pn=array($分区[$根[0]]-$平间/2,$根[1]-$直间/2)/*x,y of $ro-$fe md*/;
/*encode*/$ro_fe_len=sqrt(($平间)**2+($根[1]-$供[1])**2);$md_mo=sqrt($N_hyp**2-(($ro_fe_len/2)**2))/*1/2-tot*/;
$mdmo_直=000/*I can use an anglaw to grab the 2 sides, but not yet known how to assgn which vert-horiz*/;$mdmo_平=000;
/*assembl*//*est-rel*/if($平间>0){$mdmo_平*=-1;}if($直间>0){$mdmo_直*=-1;}
/*decode*/
/*out*/echo$md_mo." ";print_r($mid_pn);echo " ".asin(($根[1]-$供[1])/$ro_fe_len)*180/pi();// echo " ".acos((1/2)/$md_mo)*180/pi();
echo "<br> Run.transf-1,mo: ".sin(asin(($根[1]-$供[1])/$ro_fe_len))*$md_mo;echo " Ris.transf-1,mo: ".cos(asin(($根[1]-$供[1])/$ro_fe_len))*$md_mo;
echo "<br> Alt-run: ".($根[1]-$供[1])/$ro_fe_len*$md_mo;}
echo N_insc($root,$feed);?>

<!-- test-prog -->
<!-- references: http://chess/testing-progress/N.theorem-test.php -->
<!-- Notes: angu-sum as ln-ops 
[Transf-dir:]All nums we hav are + but transf should be reipco; ie, one mo-sq takes --, ando, ++<test>
	Est: vars, which does not repeat the compu # Alt-run: use the ratis-onl, var.ut-trigs
[Late.8th-16]The calc'd asig takes the rise of $ro_fe as the "opp" in the cntr-sn; recipro, the run of $md_mo should form th sam angl by cos w/ 
	ofc, thiks doesn mean the run of $md_mo is the same len as the rise of $ro-fe, unle the two lns are equall-len<sq>
	 arccos(rise/$md_mo)=asin(rise/$ro_fe); if transf of just 1-mo, then $md_mo/2
		I know in this case arccos(x/$md_mo)=71.565, solv for x 
		sin(asin(($根[1]-$供[1])/$ro_fe_len))*$md_mo; gives 1.5, the run 
			cos gives 0.5, the rise of a parsh 
[angu.ded-promo] symmetr: a gen rul of any arcsin, 90-$that, and each, *4 will give the sq in this "setup"
	sum gives the trng; each is bis'c by one of the 4 formed trngs, by the double bisec of $ro-fe and $md_mo
	the probl is that in som-cas, the introd of a parll-ln to our skewed-set which is still unanchored | that's why the arcsn is an importn sept, but not suffic
		71.56 in this cs was calc'd from abs-lns which can be a factor in some ~parsh | there has to be sum-anchr, but how this fact'rin angu
		sin/cos does incl the hypoten, which is part of the sq-bisecn | 
			any arcsn will be complmn to 1 other angl, which will be <conj> itself, on the other side of symm
			in the 2x4, the symm is comprised also of one of the N-angs
			Eg in the g7.h5<f4 corn'<fbno>, 18.45 takes a bite out of 90 - 26.45 in the uppr lin-g the sum is the 2 N angs tho 
Any horizon compr: 180 | the angl of $ro_fe<abs>via abs #, the law of perpndc<90> can driv the transf<	
	this shud wrk recipr to give the anti.rise-run # valuat: this occrs at the central intersc | Usg: the angu.transv-prop 
		that angl has to be contu of one of the N-props bc even a 0.5 ln is also parll'edg
			Note that a N-angl can only be one of 2
		Try: 180 - <N.1<> - 90 = N.2<
		But: ~corr: we're no lukin the N-angl here, as in 2x4, it's the 1x3 angl (18.5~); so theref, the recipro # 
		Accord, the transfm is also 1:3, but bc, this is a sq # does evr shap with the same len 4 sides have the same area? conj: no, since an $lim-small 
[Sol]   | Each mo.pos-qu is parll to the mid-pnt # b/w the straig'st ln b/w the E'd and the abs-ini | the sqs are equidist from 1) each the abs-ini and the E'd, and 2) from each'other, that is to say, the lns eman from the mid-pn to the mo.pos-sqs are same | we can use angl-ded to detm the len; PHP must prod a resul'n int-val 
			Alw: 360-degr in a 4.sid'shap | in a 180 down 26 rot, the E-trng oren flips and thereb' chngs to a diff N-diag<tableet>if func-breaks in the 3x5 cas due to a 0-err<them>, we can har-c w/ continue | PHP has sin and arcs w3schools.com/php/php_ref_math.asp
			Calc the rt-fd,dist from the hypotn of parll-sds | the rt-fd side is always a non-hypotn in the post-bisc,trng(s)
			md_mo is alw perpindic to $ro_fe | 7,7->6,4 /*if dist <= 4.47 check */ if I exten the $ro_ln, it can only go in its dir 
				ins, I need to extend $ro, at its mid, by $md_mo, in the perpin-dir 
analy: abs-triangulation by parll-edge<abs>, expn-scop to the b-domn // MIC dist-towrd an abs-know/n mid-pn is (pn-pn)/2
	What are the vals to add to transf the mid-pns to the mo-sqs? $md_mo itself is the hypoten of 2 lns that are parll edge of the transf’ms the dost is encod’ into the hypoten 
		Dir will be det’mn by comp-if of each coord of the feed by ineq; if $ro_fe runs NE-SW, $md_mo will run NW-SE, and this det’mn the sign of summation in transf # // MIC
			Min.N-lim: <dist(range), or in_array list of valid dists # L-p for now; alt, a formul’ By multipl In_arry, then multipl-l8r 
				The dir-inequs are discr | I can use an if cond to revers-sgn of transf’ms before summ’n Rng-valid can be done on the lvl of calln-func, as $ro-$fe will be pres.alr in that side 
					$md_mo == $ro_fe in the 2x4 cas, but not ever-cas 
	The linear-comps of the transf are obv by the $md_mo being a hypoten, and the oren<dir>can be deriv'd from the composite signs of $平间 and $zhi间
	Theor: sqrt(2^2+2^2) = 2*sqrt(1+1) | we dun kno how to fix the vet-axim; only flip-sgn 
		We need to use perpindic.for-this | absolutism, ex-sol | a dot in 2 dice | deriv-assgn vs flip 
		Conj: using a single one of sin - cos will give a cons-hrok
Simpl: use the 2 straight cases 1x5, 3x5 to derv oren-ru | 1x5 is simpl' | do it on the coords onl 
	Coords + angl, needs some "rigor-trig" sqrt(neg) = NAN<PHP> Make the abs-box the one form'd by ro-fe
1.581^2=2.5 is the md-pn theorem wrong? 2x4, the mo-cross and the ini-E lines share the same md, and have the same ln 
	3.162^2 = 10; this is the area of the total sq e6.g7-h5,f4 | this sq is composed of the areas of 4 tringls: h5.g7-f.5,5.5
		Actually, 3.162 is the hypoten of the sq; area is cal'd from edges 
		Corr: a N-hyp is sqrt(5), not sqrt(2)<B> Any x sq Another idea: use greater and less than; if the ro-fen is more wide than tall, then use the tall side of md-mn as vert-vect | This pattern holds and is invert’d
			What is the "rise" of the md-ln? har-c: md(6.5,5.5)mo(7,7), a transf of +0.5 (horiz) +1.5 (vert); mo(6,4), a transf of -0.5 (horiz) and -1.5(vert)
			<1/2-md,mn>1.5811~=sqrt(0.5^2+1.5^2)	
			Extendn a horiz-ln from the md-pn, is 5.5 <har.c-still>angular adoptn # 
			Reca: sn-csn works only for right-trng | these are most algn w/ PHP 
			In the transf-trng; we kno: the hypot; the loc of one vertx; the other vertx, the mo-sq; the 3rd vertx, not a known-sq #
				with only 1 pt and 1 ln, even a right_trng, we need more info # that has to be deriv'd extern 
				also we hav: the law of perpndc
				The 1x3(2x4)has angls of: 18.435,71.565 | how does ppc-transl? 
					asin(($根[1]-$供[1])/$ro_fe_len)*180/pi() = 71.565, indeed the sn of one side ... 
					In the <|>, thema, there are 4 of the same angl ^ and 2 of the same # (360-(71.565*4))/4 = 18.435
					Conj: only one of the arcsn revls the entir shp # Counter-conj; the 2 trng-angls are compl in the corners of the parll'grm, which is not alwy a sq 
						But in the non-sq cas, the corners would not be 90, which must be the sum of the 2 non right trns in a right trn # 
							symmetr: a gen rul of any arcsin, 90-$that, and each, *4 will give the sq in this "setup"
[Earl]	Find-goals: e6, h5 
	also: 2-sqs; the Q would have 4,max; K.2-3~ more diag.than-vert 
	the line progs at the rate of 1 each 2, having () the slope of a B which is 45 
	The N, rchn.any-col, has 2.upt-2,down
		e6, and interc does not share a ln w/ the other inters, h5; neither, the g7-f4, at least, for N # 
		Reca: 2x4corns 
		1) iden the possib of idens; 2) the type of ln of the mo, sep, the E; 
	are there ptterns dict'n the mo vs E-line rel
		is there a sens of "odd"-"even" w/ the N.upt-downs 
		3.chain-var'tes: upt-gap(4,6,//)
		Analy: there is a type of N-fig<3x5> for onl 1 intersc A N mo has 8 dirs 8**2 has some redund Every mo has a redund<self>and 7 angl chngups // compr
			som-put on the 4 base-vals: r, f, upt, downt, to deriv # the intersc; for instc, by adjus from the B-formu
				off-col, bumpd-whic? 
				autre: hypotenu-diff 
				Q: do I need to diagn the box-size, or can ther be even more gen<v-t> | does it have to be but we don't know the dir 
					If we narrow the dir, we can incrm by 1 | all shps can rot/t | 2x4 forms a sq(geom-tang_ of 4 N's hypon sides  
				b2.a3-c4 forms an isoceles trn!right, even though the b2-a3 side is the hypo of a compl<v-t>45.45-90 
				Analy: supporting-triang The gross-dist for a N.mo-$ is const, var by the angl of 2 vects # Secondry.adju-<
			the triang ne always pas isoc | a mn-pattn | a num that rvls a 2x4, in any dir? there has to be a const eq or diff # rel-arrys
		int / floa ret-rul | dir-rnd'n | 3x5 is the max-rng; 4.47, the max-dist | pnt-hypotn | a 2x4 would be 1 off a 2x3(N) in that dir # <star>
			theor'from any sq there's onl max-8 sqs "at a N's dist"; 2 are on each of the N's-dir,lns 
			har.c-start: har.c-dists: angular multiple | placm-mmatch | adj.from-a,bas 
			c3.d5-c7,b6 | where d5-c7 has no "further-ang", and d5-b6 dev'd by an addi N-26 | dist adj: 2√5 to 3sqrt(2) | an addi N-26 dv brings d5-b4, dist now to sqrt(10) -->
<!-- Issues / to do: -->