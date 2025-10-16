<?php
$str=$_POST['a'];
$op=$_POST['op'];
if($op==1)
{
echo "<h3>To select 5 words from the string </h3><br><br>";
$p=explode(" " ,$str);
$words=implode(" ",array_splice($p,0,5));
echo "5 Words :- $words<br>";
}
else if($op==2)
{
echo "<h3>To convert the given String to lowercase and then to titlecase</h3><br><br>";
$lwr=strtolower($str);
echo "Lowercase :- $lwr<br>";
$tlt=ucfirst($str);
echo "Titlecase :- $tlt<br>";
}
else if($op==3)
{
echo "<h3>To pad the given string with * from both sides</h3><br><br>";
echo str_pad($str , 70 , "*" ,STR_PAD_BOTH);
}
else if($op==4)
{
echo "<h3>To remove leading whitespaces </h3><br><br>";
echo trim($str);
}
else if($op==5)
{
echo "<h3>To reverse the given String </h3><br><br>";
$rev=strrev($str);
echo "Reversed String :- $rev<br>";
}
?>
