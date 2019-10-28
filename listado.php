<?php
// New Connection
$db = new mysqli('localhost','user','pass','database');

// Check for errors
if(mysqli_connect_errno()){
echo mysqli_connect_error();
}

// 1st Query
$result = $db->query("call getUsers()");
if($result){
     // Cycle through results
    while ($row = $result->fetch_object()){
        $user_arr[] = $row;
    }
    // Free result set
    $result->close();
    $db->next_result();
}

// 2nd Query
$result = $db->query("call getGroups()");
if($result){
     // Cycle through results
    while ($row = $result->fetch_object()){
        $group_arr[] = $row;
    }
     // Free result set
     $result->close();
     $db->next_result();
}
else echo($db->error);

// Close connection
$db->close();
?>
