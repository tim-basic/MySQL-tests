<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2018
 * Time: 10:49 PM
 */
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Connection not made");

    // Set query to select all from customers db
    $query = "SELECT * FROM customers";
    // Store result and query $query
    $result = $conn->query($query);
    // error msg
    if (!$result) die("Failed to access customers db");

    // get num of rows
    $rows = $result->num_rows;
    // for loop, go through rows
    for ($j = 0; $j < $rows; ++$j)
    {
        //fetch array
        $row = $result->fetch_array(MYSQLI_NUM);
        // echo <name> purchased <isbn> <br>
        echo $row[0] . " purchased " . $row[1] . "<br>";
        // set subquery to select all from classics db where isbn = row[1]
        // ie, get the book details from classics db with isbn (the primary key)
        $subquery = "SELECT * FROM classics WHERE isbn = $row[1]";
        // query subquery and store return value in subresult
        $subresult = $conn->query($subquery);
        // error msg
        if (!$subresult) die("Subquery failed");
        // fetch array with subresult datatype and store return value in subrow
        $sub_row = $subresult->fetch_array(MYSQLI_NUM);
        // echo <book name> by <author>
        echo "&nbsp;&nbsp;" . $sub_row[1] . " by " . $sub_row[0] . "<br>";

    }

?>