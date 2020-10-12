<?php

$con=mysqli_connect("localhost",'root');
mysqli_select_db($con,"test");
extract($_POST);
if(isset($_POST['submit'])){
    $q="insert into formdata (name,city,occupation) values('$name','$city','$occupation')";
    $query=mysqli_query($con,$q);
    header("location:form.php");
}
?>


