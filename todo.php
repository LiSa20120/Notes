<html>
<head>
    <title>My todos</title>
    <link href="todo.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="text-align:left;font-size:250% ;background-color:rgb(243, 199, 56);color:#202013" >    
<p>Keep</p>
</div>

<h2 style="text-align:center;font-size:200% ;background-color:rgb(243, 199, 56);color:#202013">
    My Todos
</h2>
<p><a href="create.php" style="text-align:left;font-size:150% ;color:#202013">Add todo</a></p>
<?php
require_once "database.php";
$query  = "SELECT id, todoTitle, todoDescription,todoDate FROM todo";
$result = mysqli_query($conn, $query);
//check if there's any data inside the table
if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['todoTitle'];
        $date = $row['todoDate'];
        ?>
        <ul>
        <li>
        <input type="checkbox" name="checked" value="checked">
        <a href="detail.php?id=<?php echo $id?>"><?php echo $title ?></a>
        </li>
         <?php echo "$date";?>
        <button type="button"><a href="edit.php?id=<?php echo $id?>">Edit</a></button>
        <button type="button"><a href="delete.php?id=<?php echo $id?>">Delete</a></button>
    </ul>
<?php
    }
}
?>
</body>
</html>