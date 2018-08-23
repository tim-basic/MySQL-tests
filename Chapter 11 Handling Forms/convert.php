<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23/8/18
 * Time: 12:17 PM
 */

//setting the variables for fahrenheit and celsius
$f = $c = '';

if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);    if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

// tests first whether $f has a number input
// corollary of this is that if both $f and $c have inputs, $f gets dips
if (is_numeric($f))
{
    // intval() called to convert value to integer
    $c = intval((5 / 9) * ($f - 32));
    // user output set for f Conversion
    $out = "$f &deg;f equals $c &deg;c";
}
// checks if there is any number in $c
elseif (is_numeric($c))
{
    $f = intval((9 / 5) * $c + 32);
    // user output set for c Conversion
    $out = "$c &deg;c equals $f &deg;f";
}
else $out = "";

// Fun fact - -40c and -40f are the same temperature!

echo <<<_END
    <html>
        <head>
            <title>Temp Converter</title>    
        </head>
        <body>
            <pre>
    Enter either Fahrenheit or Celsius and click on Convert
                <!-- if $out holds no input value, it will hold NULL-->
                <b>$out</b>
                <form method="post" action="">
    Fahrenheit      <input type="text" name="f" size="7">
    Celsius         <input type="text" name="c" size="7">
                    <input type="submit" value="Convert">
                </form>  
            </pre>
        </body>
    </html>
_END;

function sanitizeString($var)
{
    if (get_magic_quotes_gpc())
        $var = stripcslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

?>