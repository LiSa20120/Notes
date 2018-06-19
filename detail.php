<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="todo.css" />
</head>
<body>
<div style="text-align:left;font-size:200% ;background-color:rgb(243, 199, 56);color:white;margin:auto" >    
<p>Keep</p>
</div>
</body>
<?php
require_once "database.php";


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT todoTitle, todoDescription, todoDate FROM todo WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        if($row){
            $title = $row['todoTitle'];
            $description = $row['todoDescription'];
            $date = $row['todoDate'];
            echo "
            <h2>$title</h2>
            <h3>Description</h3>
            <p>$description</p>
            <small>$date</small>
            ";
        }
    }else{
        echo 'no todo';
    }
}
?>
</html>





