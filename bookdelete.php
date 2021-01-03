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
    <td><input name="name" class="form-control" type="text" ></td>
</tr>
<tr>
    <td></td>
    <td><button name="btn" class="btn btn-secondary">search </button></td>
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
        $getid=$row['id'];
        echo "<form method='POST'>
        <table class='table'>
        <tr>
            <td>id</td>
            <td><input type='text' name='newid' class='form-control' value='$getid'></td>
        </tr>
        <tr>
            <td>bookname</td>
            <td><input type='text' name='newauthor' class='form-control' value='$getauthor'></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type='text' name='newprice' class='form-control' value='$getprice'></td>
        </tr>
    
        <tr>
        <td></td>
        <td><button name='upbtn' class='btn btn-info'>delete</button></td>
        </tr>
        </table>
        </form> ";

        }
    }
    else
    {
        echo "no book found";
    }

}
if(isset($_POST['upbtn']))
{
    $newprice=$_POST['newprice'];
    $newauthor=$_POST['newauthor'];
    $newid=$_POST['newid'];
$connection=new mysqli("localhost","root","","book");
$sql="DELETE FROM `books` WHERE `id`='$newid'";
$result=$connection->query($sql);
    if($result===TRUE)
    {
        echo "deleted successfully";
}
else
{
    echo "error in deletion";
}
}
?>