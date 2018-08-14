<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die ("Fatal Error");

    $query = "INSERT INTO cats VALUES(NULL, 'Lion', 'Leo', 4),
                  (NULL, 'Cougar','Growler', 2), 
                  (NULL, 'Cheetah', 'Charly',3)";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed");

?>