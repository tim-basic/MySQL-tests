<?php

    //not sure why this guy isn't working..
    // it's supposed to log the user out with destroun_session_and_data()

    // it's obvious but I've just realised php doesn't require a 'main' function
    // often I write out without thinking too much
    // but you gotta to get into the habit of doing such, otherwise, you'll be
    // LESS likely to have epiphanies and grow your skill and interest.

    // start...
    session_start();

    // Check is sessions array has an index 'username'
    if (isset($_SESSION['username'])) {
        $forename = $_SESSION['forename'];
        $surname = $_SESSION['surname'];

        //custom function
        destroy_session_and_data();

        // output to users using variables
        echo htmlspecialchars("Welcome back $forname.<br>
                Your full name is $forename $surname.");
    }

    else echo "Please <a href='auth_user2.php'>Click here</a> to go back to login page";

    function destroy_session_and_data()
    {
        $_SESSION = array();
        setcookie(session_name(),'', time() - 2592000,'/');
        session_destroy();
    }

?>

