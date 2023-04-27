<html>
<head>
<title>3*3 Matrix</title>
</head>
<body>

<?php
$a=array(array(1,0,1) ,array(2,3,4), array(5,6,7));
$b=array(array(1,0,1) ,array(2,3,2), array(1,0,1));
$rows=count($a);
$cols=count($b[0]);
echo("The 3*3 Matrix");
echo "<br>";
for($i=0;$i<$rows;$i++)
{
	for($j=0;$j<$cols;$j++)
	{
		$ans=$a[$i][$j] * $b[$i][$j];
		echo ($ans. " ");
	}
	echo ("<br>");
}
return 0;
?>
</body>
</html>












</body>
</html>