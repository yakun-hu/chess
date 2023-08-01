<?php require'innate.M-trait,class.inc-test.php';/*instn*/class dest{public$E_sum=array(0,0);public$财产=array('side'=>'s','专名'=>'','地点'=>'e5');}
if(isset($_SESSION["B_嫁"])){$B_嫁=$_SESSION["B_嫁"];}else{$B_嫁=new dest;}$贴协=array("e5"=>$B_嫁);

/*func✅*/function 推加($数量,$一侧,$目地){global$贴协;if($一侧==$贴协[$目地]->财产["side"]){$贴协[$目地]->E_sum[0]=$贴协[$目地]->E_sum[0]+$数量;}
else{$贴协[$目地]->E_sum[1]=$贴协[$目地]->E_sum[1]+$数量;}}

/*test:*/
推加(0.5,"f","e5");print_r($B_嫁->E_sum);
$_SESSION["B_嫁"]=$B_嫁;?>

<!-- http://chess/testing-progress/obj.sess-pass,test.php -->
<!-- test-prog 
<Late.7th-29>✅ $_SESSION persists class attr:passed -->
<!-- notes: -->

<script>document.getElementsByTagName("TITLE")[0].text="obj.sess-pass,test.php"</script>
<style>.prot-E{background-color:00FF00}.neutr{background-color:607399;color:white}.eE{background-color:red}</style>
