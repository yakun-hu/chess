Display
<!-- http://chess/testing-progress/analyzer-2.php#h3 -->
<!-- Notes:
Analyzer sub-merge<fbno$here>in analyzer-2<ch-3>: name lines of M to a sq, and occ'd Effectors # 

<Anki-22>

25-s: S: B[g7,a6,]N[c6,]Q-b5 K-g8 R[c8,f8,]P[a7,g6,h6,d5,e5,f5,] | F: B[h4,]N[c5,b2,]Q-d1 K-g1 R[c1,f1,]P[b4,a3,e3,f2,g2,h2,]

{{c3::f1::sq}}'s defense is constituted by # [{{c1::d1-Q, c1-R, g1-K::all}}], and $ by [{{c2::b5-Q, a6-B::all}}]

https://lichess.org/3fdhNb5k/black#49

Write zi movements computationally using arithmetic counters, then max-red # Generate partial diags #rate.limiting-step
	Rapid search: Ch+HS, pull up excerpt in real time # 

Analyzer-3: rearrange by rank or file eg e[f: R-1 Q-2 s: B-5 N-6] and diags, filter f or s only, certain nobles only etc # render a min abs data type # 
	Appl: Closer to gran-next, helps solve Anki-calc

Sample.data-format<Anki 12.31-22,5th.21>:
b2 e-diff: <{{c1::1:0}}>
occ-if: {{c3::f-B}}
Constitution: {{c2::$.b6-Q }}

===

<Anki-22>S: B[g7,b1,]N[c6,]Q-b6 K-g8 R[a8,f8,]P[b7,f7,h7,g6,a5,d5,] | F: B[b2,e2,]N[c8,f3,]Q-d1 K-g1 R[f1,]P[e5,d4,a2,f2,g2,h2,]

b2: <1:0>e-diff
b1: 0.5:1.5
b6: 0:1, 9-val
c8: 2:0

Move-candidate<next.loa>: Qxb2<🛡️.b1-B><+3+2=+5><p.m-c8[3-val]>
Move.candidate-2: R<any>xc8<+3+2=+5>
Response-2: Qxb1<+2>

16.f-post: https://lichess.org/BC197tgz/black#31

===

Chess: Another property of zi-class: side; these 3 properties will be def’d in the UCA-class of the innate-inc; when analyzer.lvl-2 is called #, I will new class obj instantiate 1 for each zi-existent and decl as properties its file_loc, rank_loc and side from the C.U-B,C # this means that there needs to be a # micro-RAM b/w loa-1 and loa-2, by means of a media-player(URL_GET( which stores, at least from loa-1 to 2 the carry over data; some db-aug for heavier later; 

Red-later: push forward from here. Once each zi.existent-obj is instantiel, I can there a button-dash<flare-testing>, eg the M-count of each zi, highest E-tot,sqs; Q: what is the simplest # way to test that the classes are func?

Envision: verticalizing the zi-list and displ a smart M-list, for each zi, and also the E tot in that sq, clicking to expand, orthogonally, the constitution of that E, as a function of # the M of the other Zi #, 

Needing a geometric dimens, filling a table, take a position, into a G-sheet, and manually fill a bunch of tables up to ~12, and highlight w/ color coding the most pertinent grids # 

This M-list would already constitute # a legal move generator - validator # 

Bughouse: Narrative(starting-pl, merger); drop-down to select a Leading Analysis when entering analyzer-2(Ch-3> 
	- Review MIC: puzzle solves and survey a 4 leading Bents # 
	- Consider: rudim.diagr,gen(colr-sqs, arres)<Binet-Stanislav>
	
Conns: media-player[URL-chopp backlog-man[attr-sel dash-main[multi.thr-edit

4 Leading Starts 1) M 2x2 Matrix<T-✡️>2) absVal(E-diff) color coded ranker<h-tack>3) move-gen[cheq, caps*, E+/-(max)*] 4) 
* ie: a double defense 
** mat-delta sub ranker , a second intera<z.z>
4) Mate $ Inst-unnel’in wherein $-assass Yes / no is there # or assass, and show the move lines sol full, within loa-2 for ver-if #analyzer.2-fin
Post: Idealistically<comp-sci>each nadr-start should be.able-thr,autres with some red-tains; ie arriving at # solver from an.alt-start, that step, less, than if # were<past-cond>start
	- From analyzer 2 to 3, as a bulk, only carries $_GET.db<T-☪️>the nares-filled # 
	- Try to achieve 2 to 3 w/o DB-UPDATE for now; settle perhaps for fwrite even, or $_GET # start

Chess: write an ini Interface compl test; consider: low level M&E locs library of Coordinates 
	- Clr-lane property of moves #
 -->