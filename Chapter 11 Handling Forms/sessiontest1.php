<?php
/**
 * Date: 29/08/2018
 * Time: 12:06 AM
 */
// topics covered
// forcing cookie only sessions
// using a shared server



session_start();

if (!isset($_SESSION['initiated']))
{
    session_regenerate_id();
    $_SESSION['initiated'] = 1;
}

if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
else ++$_SESSION['count'];

echo $_SESSION['count'];

?>


