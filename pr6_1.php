<?php
function countcurrency($amount){
$notes = array(2000,500,200,100,50,20,10,5,2,1);
$countnotes = array(0,0,0,0,0,0,0,0,0,0);
for($i = 0; $i<10;$i++){
if($amount >= $notes[$i]){
$countnotes[$i] = intval($amount / $notes[$i]);
$amount = $amount % $notes[$i];
}
}
echo "Currency Count->"."\n";
for($i = 0; $i < 10;$i++){
if($countnotes[$i]!=0){
echo ($notes[$i].":".$countnotes[$i]."\n");
}}}
$amount=275;
countcurrency($amount);
?>