<!DOCTYPE html>
<html>
<head>
    <title>Deleted Tasks</title>
    <link rel="stylesheet" type="text/css" href="todo.css" />
</head>
<body>
<div style="text-align:left;font-size:250% ;background-color:rgb(243, 199, 56);color:#202013" >    
<p>Keep</p>
</div>
</body>
</html>
<?php
require_once "database.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    //$completed="SELECT FROM todo($todoTitle) WHERE id='$id'"
    $query = "DELETE FROM todo WHERE id = '$id'";
    //$delete = mysqli_query($conn, $query);
    if($conn->query($query)== TRUE)
    echo "Deleted task";
}
?>