<?php
class test
{
    function __construct()
    {
        echo "This is pre-defined constructor"."<br>";
    }
	function __destruct()
        {
            echo "destroying..."."<br>";
        }
}
$obj= new test();
unset($obj);
echo "Object Destroyed Successfully.";
?>