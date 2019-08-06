<?php
require "config.php";

$conn = new mysqli(DBHOST,DBUSER,DBPASS,DB);

if($conn->connect_error){ die ("Connection faild: " . $conn->connect_error); }

?>
