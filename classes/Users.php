<?php

require "Database.php";

class User extends Database{

    public function store($request){
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(first_name,last_name,username,password)VALUES('$first_name','$last_name','$username','$password')";

        if($this->conn->query($sql)){
            header(('location: ../views/login.php'));
            exit;
        }else{
            die('Error creating the user:'.$this->conn->error);
        }
    }

    public function login($request){
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username ='$username'";
        
        //row database data
        //exeecution ro running of your SQL statement
        $result = $this->conn->query($sql);
    
        //num_row is a reserved leyword of php, checking how many result.
        #check if username exist
        //num row is reserved keyword of php
        if($result->num_rows == 1){
            //fetch_assoc()converts your complex array into a simple associative array where data comes from the table
            $user = $result->fetch_assoc();
            //$user = ['id'=.1,'username'=>'john','password'=>$qsmru...'];

            //$passwordは入力されたパスワード
            //his will check if the password entered in the form is the same with the password found in the database for the specific user
            if(password_verify($password,$user['password'])){
                //session=PCにデータを保持する　saving data location id or location usename like that 
                //saving to your computer SESSION=computer
                session_start();
                $_SESSION['id']=$user['id'];
                $_SESSION['username']=$user['username'];
                $_SESSION['full_name']=$user['first_name']." ".$user['last_name'];

                header('location: ../views/dashboard.php');
                exit;
            }else{
                die('incorrect pasword');
            }
        
        }else{
            die('Username not found');
        }
    }

    public function logout(){
        session_start();
        //

        session_unset();
        //id = 1, username = q, password = 12345678, ....
        //remove the value of the session variable
        session_destroy();
        //delete the session variables --> id,username,pawssword

        header('location: ../views');
        //書かなくていい、index.phpに自動的にいく
        exit;
    } 

    public function getAllusers(){
        $sql ='SELECT * FROM users';
        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("ERROR:".$this->conn->error);
        }
    }

}


?>