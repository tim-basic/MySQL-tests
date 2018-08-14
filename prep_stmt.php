<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");

    // I don't really get part
    // the question marks are important and relate to the use of prepare() and execute()?
    $stmt = $conn->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');

    // first variable specifies type... can be i for integer, d for double, s for string, d for blob(sent as packets??)
    $stmt->bind_param('sssss', $author, $title, $category, $year, $isbn);

    // isbn has to be unique or affect_rows = -1
    // assigning variable used in the bind_param method
    $author   = 'Emily Bronlë';
    $title    = 'Wuthering Heights';
    $category = 'Classic Fiction';
    $year     = '1847';
    $isbn     = '9780553212584';

    // Executes the prepared statement above
    $stmt->execute();
    // I don't know how to check for errors with the prepare() and execute() method
    printf("%d Row inserted.\n", $stmt->affected_rows);

    $stmt->close();
    $conn->close();
?>