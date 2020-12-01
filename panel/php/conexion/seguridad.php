<?php
session_start();
if ($_SESSION["estado"] != 1){
	header("Location: index.php");
	exit();
}
?>