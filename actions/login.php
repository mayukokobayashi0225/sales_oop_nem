<?php
    include '../classes/Users.php';

    //instantiate a class
    $user = new User;
    //$uset is oblect

    //access a method
    //$_POST contains all your data from the form
    $user->login($_POST);
?>