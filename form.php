<!-- INSERTION OF EMPLOYEES -->

<!DOCTYPE html>
<html>
<head>
<title>DATA FORM</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h2 class="heading">Data Form</h2>
<div class="cointainer">
<form action="insertdata.php" method="POST" id="myform">
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

<input type="submit" name="submit" value="submit" id="submit" >
</div>
</form>
</div>
<div>
<h2 class="tableHead">Result Data</h2><br>



<table>
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>CITY</th>
<th>OCCUPATION</th>

</tr>

</thead>
<tbody id="response">

</tbody>


 
 <script type="text/javascript">
 $(document).ready(function(){
     var form=$('#myform');
     $("#submit").click(function(){
         $.ajax({
             url:form.attr("action"),
             type:'post',
             data:$("#myform input").serialize(),
             success:function(data){
                 console.log(data);
             }
         });
     });

displaytabledata();
 
//  $("#displaydata").click(function(){
    function displaytabledata(){
     $.ajax({
         url:'displaytable.php',
         type:"post",
         success:function(responsedata){
             $('#response').html(responsedata);
         }
     });
    }
//  });
});
 </script>

</body>
</html>

