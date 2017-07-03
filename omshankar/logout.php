<?php 
include 'include/functions.php';
$db= new functions();
session_destroy();
echo "<script>window.location = 'index'</script>";
?>