<?php
include 'connection.php';
$id=$_GET['id'];
$deletequery="delete from formdata where id=$id";
$query=mysqli_query($mysql,$deletequery);

header('location:form.php');
?>