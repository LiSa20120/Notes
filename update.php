<?php
   
 require_once('database.php');

 $itemid  = intval($_POST['itemid']);
//SQL query to get results from database
 $sql = "update listitems set todoDone='Yes' where id = $itemid";
 
 $conn->query($sql);
 
 $conn->close();
//send a JSON encoded array to client
 echo json_encode(array('success'=>1));
