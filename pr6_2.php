<?php
$str="  hello welcome home";
echo "Original string is:".$str."<br>"."<br>";
if(strtolower($str)){
echo "String is lower"."<br>"."<br>";
}
else{
echo "String is upper"."<br>"."<br>";
}
echo "reverse string is:".strrev($str)."<br>"."<br>";
echo "removing white space:".str_replace(" ","",$str)."<br>"."<br>";
echo "String replace:".str_replace("home","world",$str)."<br>"."<br>";
?>
