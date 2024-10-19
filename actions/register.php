<?php
    include '../classes/Users.php';

    $user = new User;

    $user->store($_POST);

?>
