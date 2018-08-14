<?php
/**
 * User: admin
 * Date: 14/08/2018
 * Time: 10:08 PM
 */

    // if login.php hasn't been accessed/included, get it!
    require_once 'login.php';
    // connection to database stored in $conn
    $conn = new mysqli($hn, $un, $pw, $db);
    // if there is a connection error, exit program and output error msg
    if ($conn->connect_error) die("Fatal Error");

    // set query to insert a Lynx named stumpy, age
    $query = "INSERT INTO cats VALUE(NULL, 'Lynx', 'Stumpy', 5)";
    // query with $query and store return structure of data in $result
    $result = $conn->query($query);
    // if no result, exit program and print appropriate error message
    if (!$result) die("Database access failed");

    // print last ID
    echo "The insert ID was: " . $conn->insert_id;

    $insertID = $conn->insert_id;

    $query    = "INSERT INTO owners VALUES($insertID, 'Ann', 'Smith')";
    $result   = $conn->query($query);
    //if (!$result) die("Owners table not made by magic!");
?>

