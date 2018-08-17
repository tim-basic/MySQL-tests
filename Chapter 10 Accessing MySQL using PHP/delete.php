<?php
/**
 * User: admin
 * Date: 14/08/2018
 * Time: 10:01 PM
 */
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");

    $query = "DELETE FROM cats WHERE name = 'GROWLER'";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed");
?>