<?php

//set up functions to select users from database to populate viable login options
// code copied from project 2 & then altered to fit here(it's used as a base)
class users {
    private $user_name, $email_address, $id;
    
    public function __construct($user_name, $email_address, $id = 0) {
        $this->set_name($user_name);
        $this->set_email_address($email_address);
        $this->set_id($id);
    }
    
    public function set_name($user_name) {
        $this->user_name = $user_name;
    }
    
    public function get_name() {
        return $this->user_name;
    }
    
    public function set_email_address($email_address) {
        $this->email_address = $email_address;
    }
    
    public function get_email_address() {
        return $this->email_address;
    }
    
    public function set_id($id) {
        $this->id = $id;
    }
    
    public function get_id() {
        return $this->id;
    }
}

//functions may need to be updated later, priority: 5

function list_users () {
    global $database;
    
    //query for user table data
    $query_user = 'SELECT name, email_address, id FROM users';
    
    $statement_user = $database->prepare($query_user);
    
    $statement_user->execute();
    
    $users = $statement_user->fetchAll();
    
    $statement_user->closeCursor();
    
    $user_array = array();
    
    foreach($users as $user) {
        $user_array[]= new User($user['name'], $user['email_address'], $user['id']);
    }
    
    return $user_array;
}

function insert_user ($user) {
    global $database;
    
    $query = "INSERT INTO users(name, email_address) " . 
                "VALUES (:user_name, :email_address)";
        
        $statement = $database->prepare($query);
        $statement->bindValue(":user_name", $user->get_name());
        $statement->bindValue(":email_address", $user->get_email_address());
        
        $statement->execute();
        
        $statement->closeCursor();
}

function update_user ($user) {
    global $database;
    
    $query = "update users set email_address = :email_address" .
                " where name = :user_name";
        
        //value/databinding protects from sql injection
        $statement = $database->prepare($query);
        $statement->bindValue(":user_name", $user->get_name());
        $statement->bindValue(":email_address", $user->get_email_address());
        
        $statement->execute();
        
        $statement->closeCursor();
}

function delete_user ($user) {
    global $database;
    
    $query = "delete from users " .
                "where email_address = :email_address";
        
        //value/databinding protects from sql injection
        $statement = $database->prepare($query);
        $statement->bindValue(":email_address", $user->get_email_address());
        
        $statement->execute();
        
        $statement->closeCursor();
}

