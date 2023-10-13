<?php 

namespace MVC\models;

use MVC\core\model;

class user extends model{

    public function GetAllUser(){
        $data= model::dp()->rows("select * from users");
        return $data;
    }
    public function GetUser($email,$password){
        $data= model::dp()->row("select * from users where email=? and password=?",[$email,$password]);
        return $data;
    }
    public function InsertUser($email,$password,$name){
        $id=model::dp()->insert('users', ['name' => $name, 'email' => $email, 'password' => $password]);
        return $id;
    }
}



?>