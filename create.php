
<html>
<head>
    <title>Create Todo list</title>
    <link href="todo.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="text-align:left;font-size:250% ;background-color:rgb(243, 199, 56);color:#202013" >    
<p>Keep</p>
</div>
<h1 style="text-align:center;font-size:200% ;background-color:rgb(243, 199, 56);color:#202013">Create Todo List</h1>
<p style="text-align:center;font-size:150% ;color:#202013">New note</p>
<form method="post" action="create.php"  style="text-align:center">
    <p>Todo title: </p>
    <input name="todoTitle" type="text" placeholder="title">
    <p>Todo description: </p>
    <input name="todoDescription" type="text" placeholder="description">
    <br>
    <input type="submit" name="submit" value="Add">
</form>
<?php
require_once 'database.php';
if(isset($_POST['submit'])) {
    $title = $_POST['todoTitle'];
    $description = $_POST['todoDescription'];
    // check strings
    function check($string){
        $string  = htmlspecialchars($string);
        $string = strip_tags($string);
        $string = trim($string);
        $string = stripslashes($string);
        return $string;
    }
    $query = "INSERT INTO todo(todoTitle, todoDescription, todoDate) VALUES ('$title', '$description', now() )";
    $insertTodo = mysqli_query($conn, $query);
    if($insertTodo){
        echo "Click 'View all' todo to view your todos";
    }else{
        echo mysqli_error($conn);
    }
}
?>
<p><a href="todo.php" style="color:#202013;font-size:150%;text-align:center;">View all Todo</a><p>
</body>
</html>
