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
         <td>book name</td>
         <td><input name="name" class="form-control" type="text"></td>
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

$bname=$_POST["name"];
$connection=new mysqli("localhost","root","","book");
$sql="SELECT `id`, `name`, `author`, `price` FROM `books` WHERE `name`='$bname'";
$result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    $getauthor=$row['author'];
    $getprice=$row['price'];
echo "<table class='table'>
<tr>
<td>author<td>
<td>$getauthor</td>
</tr>
<tr>
<td>price<td>
<td>$getprice</td>
</tr>
</table>";

}
}
else
{
    echo "no book has found";
}

}
?>