<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div style="text-align:left;font-size:250% ;background-color:rgb(243, 199, 56);color:#202013" >    
<p>Keep</p>
</div>

<p style="font-size:200%;color:#202013;background-color:rgb(243, 199, 56);text-align:left">Dashboard</p>
<div class="form">
<p style="font-size:150%"><a href="todo.php" style="color:#202013">Create a todo</a></p>
<a href="logout.php" style="color:#202013;font-size:150%">Logout</a>
</div>
</body>