<?php

//use to control the post view mechanics/ handling actions

try{
    require_once 'Models/database.php';
    require_once 'Models/users.php';
    
    //add form variables?
    $username = htmlspecialchars(filter_input(INPUT_POST, "user_name"));
    
    
} catch (Exception $e) {
    $error_message = $e->getMessage();
    include ('Views/error.php');
}
