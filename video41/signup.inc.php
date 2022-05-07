<?php

   if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';

    $first = $POST['first'];
    $last = $POST['last'];
    $email = $POST['email'];
    $uid = $POST['uid'];
    $pwd = $POST['pwd'];

    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        header("Location: ./index.php?signup=empty");
    }
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ./index.php?signup=invalidemail");
        }
        else {
            echo "Sign up the user!";
        }
    }
   } 
   else{
       header("Location: ./index.php?signup=error");
   }