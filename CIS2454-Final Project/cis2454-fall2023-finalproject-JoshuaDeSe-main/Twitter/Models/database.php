<?php
//pulled from project 2, alter later
    $data_source_name = 'mysql:host=localhost;dbname=lister';
    $username = 'listerUser';
    $password = 'Test';
    
    $database = new PDO($data_source_name, $username, $password);

