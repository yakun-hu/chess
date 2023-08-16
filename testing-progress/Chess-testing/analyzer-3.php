Display:
	Kb3[0:0]<cont-c2[1:1]>
	Kd4$.e4-B[1:1]
	g2(+4)[0:1]<auto-shel>
	// There are 3 typ-compo
<!-- http://chess/testing-progress/analyzer-3.php#h3 -->
<!-- Notes: 
理论： E-delta subs of cond-mo:
	My goal is to # discover # the most.sig-delts; howe, the former E-tableau is not stor'; I need E_sums, such as, passing objs to $_SESS; reca: each zi is #'d, canno-excee,32 so the props foll-zi 
		I can re-calc E_sum by tot, each.$-shiel, diff, invers and smart-disco,alg<analy.2-sing>
[Late.8th-1]Analy-3: show motifs by levels | Cond-mo to sum-dept, 2) alignment recog 3) M 4) a bit meta 5) more _ SESS, TINY-sql
	Write move suggs to db 1) not perm to obj, mostly statics 2) too many props for array <l-p> ; use a temp (table) or db # review | variation management ID-nomen<n-p>
	Mo, zi, ini, dest, E-delta is assoc’d w/ the move and the zi # Analy-3 <multi-process>I can run SQL compr-funcs on mo-props to ev-vars<T-ring>
[Late.7th-11]Analy-3 delta functions; a [short.state-exc]<MIC>, compr some Val in the post.cond-stay vs pre.byPost<suches>
[Late.7th-2]
	<ch.3-intro>assass.cond-2: cnt sqs by total mat-dump<fbno>E<mat-dump>
		
	Paste this para<ch.3-intr>1) There are broadly speaking, 3 ways for an occupied square to be of negative effect in the resulting board position of a move or sequence, 
		thereby providing an opportunity for assassination: Condition 1: A ren moves into a square of negative effect either by force or blunder. S2 category: attraction, coercion. 
		Condition 2: A neutrally or positively affected occupied square becomes negative via the removal of defender(s), which may come as a result of the occupier moving the defender away, 
		the assassinator capturing the defender, absolute pin, or adding an interposer. S2 categories: deflection, capmove the defender. Condition 3: A neutrally or positively affected | 
		occupied square becomes negative effect via the addition of an attacker without a corresponding ability <ch-56 CM H3S1> to supplement a defender nor move the threatened ren away because 
		the attack move was with a tempo, the ren is pinned, fixed and there are no additional occupier-side zi in next ply range to affect the square, or the ren is piecemated and cannot be further defended. 
		S2 categories: pins, skewers, fixed, forks, checkscovery, discovered attack / check, piecemate. 
===
	Goal: identify obj.high-impact moves that a vis-diff,particular 
		We want to corner 90.9% of best moves by top 3 in 4 Leading Ranks; overlap = more likely
		Typically, for a higher rated puzz, we'd expect the Move We Didn't See
	In move suggestions<prec>cite E of dest; ie here: 17-s: S: B[b7,e7,]N[d7,]Q-d8 K-g8 R[a8,]P[g7,h7,a6,b6,c6,d6,e5,] | F: B[b2,g2,]N[e2,]Q-d2 K-g1 R[c1,]P[d5,e4,b3,d3,g3,a2,h2,] 
		Bg5$<9-val>($)c1<5-val>, and is <1:1> in the move-dest, ie suff-support; it receives a 9-val $ so the <1:1> has a +6 for s # 
	Analy-3: retroactive key-sq search, such as empty squares, the mate delivery square, and feedback to A-2 for E-summ # -->

<!-- Sample-set: 
https://chesstempo.com/chess-tactics/89899
	We know we'll use g3, but #move-order; Nxe2 is an out; to circumvent, Ng3<vis-diff>$$ini, a fork, w/ recoup<t-sack>
		Sol: Moves by gross and Net delta E # 
		Also: Moves by mat-delta <multi-var,analys> 
https://chesstempo.com/chess-tactics/154371 
	2 candidates: s-Rg8$($)<rec-sheil>, the "E-leader", and fxg6<vis-diff>, the mat.delt-leader
200 point swing, just last 2 # 
https://chesstempo.com/chess-tactics/169697
	This would require something we don't already have<architech> 
	<mat.diff=0>Be3<int+><3.9-nullify><auto-$[1:1]>mais-f4<int-cntr>! Now.if-Bc5$ f3<clr+> 
	This needs a ply.fwd-analys<fbno-h4re> -->