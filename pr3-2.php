<html>
<head>
<title>PHP Program To find the gross salary of an Employee</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="salary" value="" placeholder="Enter basic salary"/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$basic_salary = $_POST['salary'];
$dallowance = 0.4 * $basic_salary;
$house_rent = 0.2 * $basic_salary;
//To Compute the gross Salary
$gross_salary = $basic_salary + $dallowance + $house_rent;
echo "Basic Salary : ".$basic_salary."<br>";
echo "Dearness Allowance: " .$dallowance."<br>";
echo "House Rent : " .$house_rent ."<br>";
echo "Gross Salary : " .$gross_salary ."<br>";
return 0;
}
?>
</body>
</html>o