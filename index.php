<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
window.onload = function() {
var dd=document.getElementById("input").value;
var input = document.getElementById("input").focus();
document.getElementById("input").value=dd;
}
function reset_data(){
window.location.href="index.php?ss=<?=date(YmdHis);?>";
}

function random_data(){
var n = prompt("Random number of(max:100):", "50");
if(n>100){
	n="100";
}
var input = document.getElementById("input").focus();
var dd=random_num(0,100);
for(i=0;i<=n-2;i++){
dd=dd+' '+random_num(0,100);
}
document.getElementById("input").value=dd;
}

function random_num(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}
</script>
<?
function quick_sort($array)
{
	if(count($array) <= 1){// base case test
		return  $array;
		echo print_r($right);
	}
	else{
		$pivot = $array[0];		// select pivot point
		$left = array();
		$right = array();
		
for($i = 1; $i < count($array); $i++)// loop and compare set value to partition
		{
			if($array[$i] < $pivot){
				$left[] = $array[$i];
			}
			else{
				$right[] = $array[$i];
			}
		}
		//echo implode(",",$left)."|".$pivot."|".implode(",",$right)."<br>";
return array_merge( quick_sort($left), array($pivot), quick_sort($right));// merge array left ,pivot, right
	}
}
/////////////////////////////////////////////////////
if(isset($_POST['input'])){
$input =$_POST['input'];
}
?>
<form action="?" method="post">
<table>
<tr><td colspan="2" align="center"><h1>Quick Sort</h1></td></tr>
  <tr><td>Data Input:</td><td><textarea name="input" id="input" rows="5" cols="100"><?=$input?></textarea></td></tr>
   <tr><td></td><td> <input type="button" value="Random input" name="random" onclick="random_data();"> <input type="button" value="Reset input" name="reset" onclick="reset_data();"> <input type="submit" value="Start Sort" name="submit"></td></tr>
   </table>
</form>
<?
if($_POST[submit]=="Start Sort"){
echo  "<b>Input: </b>$input<br><br>";
$data=explode(" ",$input);
$sort = quick_sort($data);
 echo  "<b>Output: </b>".implode(" ",$sort)."<br>";
}
?>