<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2018
 * Time: 10:38 PM
 */

    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");

    $query = "CREATE TABLE customers1(
              customer VARCHAR(32) NOT NULL,
              isbn CHAR(13) NOT NULL    
    )";

    $result = $conn->query($query);
    if (!$result) die("Customer table not created :(");

?>