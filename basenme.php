<?php
$path = "/testweb/home.php";

//show filename with file extension
echo basename($path)."<br/>";

//show filename without file extension
echo basename($path,".php");

?>