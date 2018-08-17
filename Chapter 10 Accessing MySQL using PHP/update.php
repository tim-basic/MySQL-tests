<?php

    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die ("Fatal Error");

    $query = "Update cats SET name = 'Charlie' WHERE NAME = 'Charly'";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed");
?>