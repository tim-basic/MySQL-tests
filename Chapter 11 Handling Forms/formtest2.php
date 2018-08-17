<?php
// simple form handler
    // If there is anything in the $_POST[] array under name, store in variable
    if (isset($_POST['name'])) $name = $_POST['name'];
    // else store not entered message
    else $name = "(Not entered)";

echo <<<_END
        <html>
            <head>
                <title>Form Test</title>
            </head>
            <body>
                Your name is $name<br>
                <!-- method is post. Does this mean that information is stored in $_POST 
                I know that post is a service that requests to send data to the server
                Don-->
                <form method = "post" action = "formtest2.php">         
                    What is your name?
                    <!-- This goes in $_POST input type = "text" under the name 'name'-->
                    <input type="text" name ="name">
                    <!-- submit type is boolean, returns a YES on click -->
                    <input type ="submit">
                </form>
            </body>
        </html>
_END;

?>