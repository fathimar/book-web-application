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
             <td>product name</td>
             <td><input name="name" class="form-control" type="text"></td>
         </tr>
         <tr>
             <td>description</td>
             <td><input name="description" class="form-control" type="text"></td>
         </tr>
         <tr>
             <td>manufacturing date</td>
             <td><input name="date" class="form-control" type="date"></td>
         </tr>
         <tr>
             <td>expiry date</td>
             <td><input name="expdate" class="form-control" type="date"></td>
         </tr>
         <tr>
             <td>manufacture name</td>
             <td><input name="mname" class="form-control" type="text"></td>
         </tr>
         <tr>
             <td>manufacture address</td>
             <td><input name="adress" class="form-control" type="text"></td>
         </tr>
         <tr>
             <td>contact email</td>
             <td><input name="email" class="form-control" type="text"></td>
         </tr>
         <tr>
             <td>mobile number</td>
             <td><input name="phone" class="form-control" type="text"></td>
         </tr>
         <tr>
             <td></td>
             <td><button name="btn" class="btn btn-info">submit</button></td>
         </tr>
  </table>  

  </form>  
</body>  
</html>
<?php
if(isset($_POST["btn"]))
{
    $pcode=$_POST["code"];
$pname=$_POST["name"];
$pdescription=$_POST["description"];
$pdate=$_POST["date"];
$pexp=$_POST["expdate"];
$manname=$_POST["mname"];
$padress=$_POST["adress"];
$cmail=$_POST["email"];
$mobile=$_POST["phone"];

$connection=new mysqli("localhost","root","","products");
$sql="INSERT INTO `product`( `product code`, `product name`, `description`, `manufacture date`, `expiry date`, `manufacture name`, `manufacture adress`, `contact email`, `phone number`) 
VALUES( $pcode,'$pname','$pdescription','$pdate','$pexp','$manname','$padress','$cmail',$mobile) ";

$result=$connection->query($sql);
if($result===true)
{
    echo "<script>alert('successfully inserted')</script>";
}
else{
    echo "<script>alert('error in insertion')</script>";
}


}
?>
