<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-2">
            <div class="col col-12 col-sm-8">
            <div class="col col-12 col-sm-2">
            </div>
        </div>
    </div>
    <form method="POST">
  <table class="table">
     <tr>
         <td>product code</td>
         <td><input name="code" class="form-control" type="text"></td>
         </tr>
         
         
         <tr>
             <td></td>
             <td><button name="btn" class="btn btn-info">search</button></td>
         </tr>
  </table>  

  </form>  
</body>  
</html>
<?php
if(isset($_POST["btn"]))
{

$pcode=$_POST["code"];
$connection=new mysqli("localhost","root","","products");
$sql="SELECT `id`, `product code`, `product name`, `description`, `manufacture date`, `expiry date`, `manufacture name`, `manufacture adress`, `contact email`, `phone number` FROM `product` WHERE `product code`='$pcode'";
$result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    $getname=$row['product name'];
$getdescription=$row['description'];
$getdate=$row['manufacture date'];
$getexp=$row['expiry date'];
$getmanname=$row['manufacture name'];
$getadress=$row['manufacture adress'];
$getmail=$row['contact email'];
$getmobile=$row['phone number'];
echo "<table class='table'>
<tr>
<td>product name<td>
<td>$getname</td>
</tr>
<tr>
<td>description<td>
<td>$getdescription</td>
</tr>
<tr>
<td>manufacture date<td>
<td>$getdate</td>
</tr>
<tr>
<td>expiry date<td>
<td>$getexp</td>
</tr>
<tr>
<td>manufacture name<td>
<td>$getmanname</td>
</tr>
<tr>
<td>manufacture adress<td>
<td>$getadress</td>
</tr>
<tr>
<td>contact email<td>
<td>$getmail</td>
</tr>
<tr>
<td>phone number<td>
<td>$getmobile</td>
</tr>

</table>";

}
}
else
{
    echo "no product has found";
}

}
?>
