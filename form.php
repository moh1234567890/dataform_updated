<!-- INSERTION OF EMPLOYEES -->

<!DOCTYPE html>
<html>
<head>
<title>DATA FORM</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2 class="heading">Data Form</h2>
<div class="cointainer">
<form action="" method="POST">
<div>
<label for="name">Name:</label></div>
<div><input type="text" id="name" name="name" placeholder="Enter your Name..." required ></div><br>
<div>
<label for="name">City:</label></div>
<div><input type="text" id="city" name="city" placeholder="Enter your City..." required ></div><br>
<div>
<label for="name">Occupation:</label></div>
<div><input type="text" id="occupation" name="occupation" placeholder="Enter your Occupation..."  required></div><br>
<div>

<input type="submit" name="submit" value="submit" >
</div>
</form>
</div>
<!-- PHP CODE -->
<?php

include'connection.php';


if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $city=$_POST['city'];
    $occupation=$_POST['occupation'];
    $insertquery="insert into formdata(name,city,occupation)values(' $name','$city','$occupation')";

    $result=mysqli_query($mysql,$insertquery);
              if($result){
            echo "<h4 >DATA INSERTED SUCCESSFULLY</h4>";
                     }
        else{
            echo "Failed";
        }

    } 
   

    

?>
</body>


</body>
</html>



<!-- DISPLAY ALL EMPLOYEES -->

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<div>
<h1 class="tableHead">
Result Data
</h1>
<table>
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>CITY</th>
<th>OCCUPATION</th>
<th>OPERATION</th>
</tr>

</thead>
<tbody>
<?php


$selectedquery="select * from formdata";
$query=mysqli_query($mysql,$selectedquery);


while($res=mysqli_fetch_array($query)){
    ?>
    
    <tr>
    <td><?php echo $res['id']?></td>
    <td><?php echo $res['name']?></td>
    <td><?php echo $res['city']?></td>
    <td><?php echo $res['occupation']?></td>
    <td><a href="delete.php?id=<?php echo $res['id'];?>">DELETE</a></td>
    </tr>

<?php


}
?>



</tbody>
</table>

</div>


</body>
</body>
</html>

