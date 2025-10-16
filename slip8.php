<?php
$large=$_POST['large'];
$small=$_POST['small'];
$n = (int)$_POST['n'];
 if (stripos($large, $small) === 0) 
  {
    echo "<p><strong>a)</strong> The small string appears at the start of the large string.</p>";
  } 
 else
  {
    echo "<p><strong>a)</strong> The small string does NOT appear at the start of the large string.</p>";
  }
      $pos = stripos($large, $small); // Case-insensitive
    if ($pos !== false) 
    {
        echo "<p><strong>b)</strong> The small string is found at position: $pos (0-based index)</p>";
    } 
    else 
    {
        echo "<p><strong>b)</strong> The small string is not found in the large string.</p>";
    }
if (strcasecmp($substr_large, $substr_small) == 0)
     {
        echo "<p><strong>c)</strong> The first $n characters of both strings are equal (case-insensitive).</p>";
     }  
     else 
    {
        echo "<p><strong>c)</strong> The first $n characters of both strings are NOT equal (case-insensitive).</p>";
    }
    else
     {
    echo "<p>Please submit the form first.</p>";
}
?>