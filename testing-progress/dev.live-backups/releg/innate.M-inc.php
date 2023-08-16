<!-- Create righteous classes that define the innate M-rules of each Zi # -->
<?php require 'obj.perm-inc.php';

$array_of_32=array("王","嫁","界","使","死","定","可","模","株","素","田","妙",/*12*/"平","特","别","令","副","系","网","庙",/*20*/"保","亭","完","成","损","失","福","建"/*28*/,"神","皮","料","才"); // used to nomencl.zi-upon,instansh 
$directions_dict = array( N, NE, E, SE, S, SW, W, NW /*by-time*/N_1, N_2, N_4, N_5, N_7, N_8, N_10, N_11) /* define 16 dirs, 8 N, 8 non-N */ );

function 工行 ($directions, $ini_sq) {/* a base-worker that "walks" the zi by incr in $direction; there will be 3 abs.val-incr,modes
a rote method is to incr, name the sq, check that sq, then cont-incr, stopping upon # any of the 3 edge_conds
$directions will be an array */  
	foreach ($direction in $directions) { 
		while ($edge_check = "go" && $插_查 = "go" && $友客查 = "go") {
			$ini_sq += /* pseudo */ $direction_incrementer; # 
			$this_M = array_append($this_M + $M_SQ); 
		} 	
	} 
}

/* I need a condensed, but min.interf-overh data type for loc-histore */
/* 工行<indexing>will gen a M-set for each zi # on top of the ini.loc-matrix, for as many zi are in that matrix */
/* current indexing ratio: 400 lines run for 30 moves-gen, plus all E-highl'd, and matrixes, so about 1 line per data.point-gen'd 
	Dash-edit is about 40 */
// Meta-Classes:

class Zi { public $现_loc_直; public $现_loc_平; function edge_check () { /* terminates M at board's edge */ } function 友客查() { /* terminates M before same_side_occupant */ } }
class 人 extends Zi { public $mat_val; } 
class 路_nobles { function 插_查 () { /* checks for e-int and terminates post */ } } 

// Zi-classes: 

class L_码 { /* define a property of location of sq, with file and rank separately # 
use min-methods to define M; add values in range to the file and rank values 
a class of ren inherits from Zi; ma and bing will extend ren directly; */ 

$M = 工行($directions); // select from $directions_dict;

}

class Rook extends 路_nobles { E = 并行查找_op($file);并行查找_op($rank_occ); /*pseudo-co*/
/* let's use class inheritance to extend a class of zi, with the 2 loc_properties; from this, extend
into a sub-class, layer 2 of "road nobles" with will have some int-properties written, then extend into R and B, and finally, Q, which inherits from both, at loa-4 <Turing-le,God>*/ }

class 像 extends 路_nobles {/* set default mat_val values for each zi_class */}

class 帅 extends Zi { E = 并行查找_op($file, $lim); /*pseudo-co*/
// shuai is the only direct inheritance of zi, with M rules that forbids # entering E, potentially by a func-call 
}

class Q { /* Q must inher from both R_nobles and Rook, the trait of each's "sliding" movement; BoMY<Based on My Research>, 
a class can only extend a class, but I can use a mutual trait, or potentially<mal-pr> interfaces to augm */ }

class Bing {并行查找_nop($file,1); ?>

<!-- notes:
[6th27]
	Use q.tum-stays to ghostmencl each new obj w/ a single naming loop Loop through posted_assoc in analy_2 to instanx objs [WP.MIC-PHP,obj.perm's] Call M_analyzer method w/in class when # the obj is instansh
	Test: storing obj and $posted_assoc(s) in $_SESSION https://www.w3schools.com/php/phptryit.asp?filename=tryphp_trait2
[Late.22-6th.7]
	lichess.org/juXEP4uU | 8/8/8/1p3k2/5P2/3R1K2/8/8 w - - 0 1 | 1-f: F: K-f3 R[d3<0E>(M.14-d,3<>e),]P[f4,] | S: K-f5 P[b5,] 
		5RK1/5P2/8/3b4/5r2/8/8/8 w - - 0 1 | 1-f: F: K-g8 R[f8,]P[f7<2:2>,] | S: B[d5,]K- R[f4,]
	In zi_assembler, when the zi-loc obj is instantiated<truth>also instat the zi class “new Q”, and assig a int-val 1-8 in the first file and 1-8 for rank, that order, to the sq-property; check an indexed-dict, with 88 vals, that convs that intval to a form that has a dir-val; reduces loop-lines<count>and repls w/ indexed-search<multip>
		A ranked index search in SQL: from an ini-88, combl the zi-type, search th other zi-88s, and terminate lines by dir in a large index # 
		Delayed.assembly-post,echo | Presence-array<n>ref-Bio.Introns; instantiate 1-88 def-no where base-8,vals of dec # are index’d | this array will invert no into a sum.dimen-val in zi-assembly | loop-thru compare, inher-M,calc’d and term’e prior’t’ed by dir 
		During the M.loc-Compr, both of the 4.lead-star Cont: I can simul-tabl E-tabl; for R nobs, E is the term-M in dirs term’d by an e-Zi, apart, x-ray | leg.mov-gen, from M, using ini.dest-M,zi.iden # 
		Instat.E-from,count: when intersects-found, tabl both-idens # Index’d-libs<status-codes>can be req-d<PHP-req, SQL-tbl>incr Solving mates & P-M’s, the K’s M, intersect-analysis; assass: cap-seq by E-count ini 
			3-term,conds; edge<dir-lib; same-int<match-case>, where the match is M-1 w/ loc-indez #. 
		“When-found” is instat-rexoc’d by a cond # Aux-instats : 
		40-s: S: K-d5 P[g6,b5,f5,h5,a4,] | F: K-d3 P[b4,h4,a3,g3,] | 40...Ke6,41.Kd4-Kd6 | 41.Ke2-Kf6,42.Ke3-g5,43.hxg5+Kxg5,44.Kf3-f4,45.gxf4+Kf5,46.Kg3-h4+47.Kxh4-Kxf4 | lichess.org/f11d75fw
		Locs_array[0, “null”, “f-N” | if(locs_array[1] !== “null”) { locs_array[1… = compr-loop,inishi | Instanshi locs_array is ext, from new.zi-obj | Distribute comp-unis,evnl.thru loa-steps<T-️⚡>lichess.org/8YVXUE6s
	Cap.seq-mat,val.scenarios # Analy-2 Start: Fill 2 properties of each zi-obj: M, and E_FROM I need a net.rel-constr that defns all-rels by rel # from a base-class<WP.MIC-H2S135> 
		Human-vis<50% All but 1 line classes for r_nobs # Zi.assembl-halp is a pre.oop-instansh WP.MIC-H2S37, MIC-iden Ch.63-industr,applicab | WP.MIC-H2S10,usab 
		Increasingly grav'in toward idea of having a intangib base type and a rendering layer | Analyzer.base-incrementation #Free-Conn
[Late.22-6th.6]
	For all of the 4 Leading Starts<analyzer-2>we have to understand the M of relevant zi # 
		Writing something abstract that reprs the "innate M", sqs that can be reached from present; 
			The N needs not check_ints, but edge_check lichess.org/hPvbG4iB-Mb0oR3GM
	Write the most concise incr loops as this will be the Most Used Loop in the prog # Current indexing ratio: [Late.22-6th.earl]400 lines run for 30 moves-gen, plus all E-highl'd, and matrixes, so about 1 line per data.point-gen'd <analyzer-2>
	Analyzer.base-incrementation # 
	Perhaps there is a way to long-range mostly for r_nobs # 
		In this sort-method, identify the edge_case on each dir, and draw the full line in 1 line # 
		The confl of dir + ini_sq should be able to draw theor-lines; but I still need to loop through all occupancies, or at least, lines of occ #
			This is more novel # 
		Approx discr = 40% 
		Looping through an array is 2x-mag lighter # than dict<very.large-nums>
[Earlier]
	Tracking Presence # will be achieved by the calling-func <T.le-G> 
	https://www.w3schools.com/php/keyword_extends.asp
		A derived class has all of the public and protected properties *and methods<sic>🚩 of the class that it is derived from. 
		In addition, it can have its own properties and methods. 
	https://www.w3schools.com/php/php_oop_inheritance.asp
		Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
		The final keyword can be used to prevent class inheritance or to prevent method overriding.
			Hu: Inher-attempt will return an error 
	https://www.php.net/manual/en/language.oop5.traits.php		
		A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. 
		A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. 
		An inherited member from a base class is overridden by a member inserted by a Trait. 
	https://www.php.net/manual/en/language.oop5.interfaces.php
		Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented. Interfaces share a namespace with classes and traits, so they may not use the same name.
		<idealistic>Interfaces are defined in the same way as a class, but with the interface keyword replacing the class keyword and without any of the methods having their contents defined. 
		All methods declared in an interface must be public; this is the nature of an interface. 
		To implement an interface, the implements operator is used. 
		Classes may implement more than one interface if desired by separating each interface with a comma. 
		Interfaces can be extended like classes using the extends operator. -->
<!-- test-prog:
	Basic class: call test: new<class name>, class->method, where the method execution references a property of that class. 
	Puzzle rating 2000 chess-tempo speed-run ! 80% of puzzles at chess-tempo have elegant, albeit mis-rated sols at 1500; chess.com, quality dropoff <20% past 2500 and declining steeply
		The depth also increases linearly rather J 
		If Analyzer can quickly show us the key-sqs, we can apply intermediate-advanced MIC.logic-overh 
		Issue: No FEN pre-solve -->
<!-- References:
	https://www.php.net/manual/en/function.range.php
	https://www.php.net/manual/en/function.array-fill.php: generate 1-88 assoc-array w/ value = "null", defl
	https://www.php.net/manual/en/function.array-intersect-assoc.php: returns values present in 2 arrays, as array # 
		https://www.php.net/manual/en/function.array-intersect.php non-assoc 
	https://www.w3schools.com/PHP/php_arrays_multidimensional.asp https://www.w3schools.com/PHP/phptryit.asp?filename=tryphp_array_multi
		A table w/ >= 2 rows and columns can be created w/ this technique # 
CM-H4S1: 
	Addi-comps: 1) uni-type 2) rendering 
	
H3S1: scope:
	https://www.php.net/manual/en/function.array-combine.php Creates an array by using one array for keys and another for its values
		https://www.php.net/manual/en/function.array-merge.php Values-only # 
	https://www.php.net/manual/en/function.array-filter.php Iterates over each value in the array passing them to the callback function. If the callback<filtering>function returns true, the current value from array is returned into the result array.
	array_replace() replaces the values of array with values having the same keys in each of the following arrays. https://www.php.net/manual/en/function.array-replace.php
	https://www.php.net/manual/en/function.ksort.php Sort an array by key 
H4S1: deep: 
	https://www.php.net/manual/en/function.array-multisort.php 
	https://www.php.net/manual/en/function.array-product.php
	compact — Create array containing variables and their values 
	https://www.php.net/manual/en/function.array-walk.php array_walk — Apply a user supplied function to every member of an array
	https://www.php.net/manual/en/function.asort.php Sorts array in place in ascending order, such that its keys maintain their correlation with the values they are associated with. -->
	
Sample-set: 
https://chesstempo.com/chess-tactics/89899
	We know we'll use g3, but #move-order; Nxe2 is an out; to circumvent, Ng3$$ini, a fork, w/ recoup<t-sack>