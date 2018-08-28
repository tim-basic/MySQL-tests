<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 26/08/2018
 * Time: 9:58 PM
 */

    // making the cookie, will only show the second time after, the first load sets the cookie
//    setcookie('location','ya bumhole', time()+60*60*24*7,'/');
//
//    // checks if there is a value inside $_COOKIE['location]
//    if (isset($_COOKIE['location']))
//    {
//        // if so, use variable to storeis with the cookie
//        $location = $_COOKIE['location'];
//    }
//
//    setcookie('location','USA', time()-2592000,'/');

    // print the darn thing
//    echo "You are currently in ..." . $location;

    $username = 'admin';
    $password = 'pass';

    if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        if ($_SERVER['PHP_AUTH_USER'] === $username &&
            $_SERVER['PHP_AUTH_PW'] === $password)
        {
            echo "<h3>Password Hashing</h3>";
            echo "You are now logged in!<br><br>";
            $hash = password_hash($password, PASSWORD_DEFAULT);
            echo "Password hash is... $hash <br><br>";
            //echo $hash. $password . "<br>";
            if (password_verify($password, $hash))
                echo "The password is valid";
        }
        else die("Invalid username pal");
    }
    else
    {
        header("WWW-Authenticate: Basic realm='Restricted Area'");
        header('HTTP/1.0 401 Unauthorised');
        die("Please enter your username and password");
    }

{}
?>