<?php
$a=$_POST['a'];
$b=$_POST['b'];
$op=$_POST['operation'];
if($op==1)
{ 
$c=$a+$b;
echo "ADDITION OF $a and $b is $c";
}
else if($op==2)
{ 
$d=$a-$b;
echo "SUBSTRACTION OF $a and $b is $d";
}
else if($op==3)
{ 
$e=$a*$b;
echo "MULTIPLICATION OF $a and $b is $e";
}
else if($op==4)
{
$f=$a/$b;
echo "DIVSION OF $a and $b is $f";
}
?>