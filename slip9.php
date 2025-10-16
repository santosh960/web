<?php
$str=$_POST['str1'];
$sel=$_POST['separator'];
echo "$str<br>";
echo "$sel<br>"; 
$a=explode($sel , $str);
echo "<br><h3>Splited String</h3><br>";
foreach($a as $v)
{ 
echo "$v<br>";
}
echo "<br><h3>Replacing given seprator with other separator</h3><br>";
$rep=str_replace($sel,'/',$str);
echo"<br> $rep <br>";
echo "<br><h3>Finding last word in the given String</h3><br>";
$last_word=array_pop($a);
echo"<br>Last word of the given string is :- $last_word<br>";
?>