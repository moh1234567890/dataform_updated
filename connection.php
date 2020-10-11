<!-- connection code -->

<?php
$dbhost="localhost";
$dbname="test";
$dbusername="root";
$dbpass="";


$mysql=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
if($mysql){
    
}else{
    echo "connection failed";
    die("no connection".mysqli_connect_error());
}
?>
