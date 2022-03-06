<?php
    // Start the session
    session_start();

    // Set cookie
    setcookie("name", "Khorasani Abrar", time()+3600, "/","", 0);
    setcookie("age", "20", time()+3600, "/", "",  0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal Variables</title>
</head>
<body>

    <!------------------- Form to test $_REQUEST & $_POST ------------------->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="sname">
        <input type="submit">
    </form>
    <br/>
    <br/>

    <!------------------- Form to test $_FILE ------------------->
    <form action="test.php" method="POST"enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file" />
        <input type="submit" name="submit" value="Submit" />
    </form>

    <!------------------- Link to test $_GET ------------------->
    <a href="test.php?subject=WEB&position=CodingRowadAcademy">Test $GET</a>
    <br/>
    <br/>
    

    <?php
        //------------------- $GLOBALS -------------------//
        $var = "global scope variable";
        function globalVariable() {
            $var = "local scope variable";
            echo '$var in global scope: ' . $GLOBALS["var"] . '<br>';
            echo '$var in current scope: ' . $var . '<br><br>';
        }
        globalVariable();


        //------------------- $_SERVER -------------------//
        // display directory name
        echo "<br>\$_SERVER Parameters: ";
        echo "<br>The file name is: ";
        echo $_SERVER['PHP_SELF']; 
        echo '<br>'; 

        // display server name
        echo "The server name is: ";
        echo $_SERVER['SERVER_NAME']; 
        echo '<br>'; 

        // display server protocol
        echo "The server protocol is: ";
        echo $_SERVER['SERVER_PROTOCOL']; 
        echo '<br>'; 

        // display server port
        echo "The server port number is: ";
        echo $_SERVER['SERVER_PORT'];
        echo '<br><br>'; 


        //------------------- $_REQUEST -------------------//
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_REQUEST['sname'];
            if (empty($name)) {
                echo "Empty Name";
            } else {
                echo "With \$_REQUEST variable: ".$name;
            }
            echo "<br>";
        }


        //------------------- $_POST -------------------//
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['sname'];
            if (empty($name)) {
              echo "Name is empty";
            } else {
              echo "With \$_POST variable: ".$name;
            }
            echo "<br><br>";
        }

    
        //------------------- $_SESSION -------------------//
        // Storing session data
        $_SESSION["firstname"] = "Abrar";
        $_SESSION["lastname"] = "Alkhorasani";
        echo "<br>Session variables are set.<br>";
        // Accessing session data
        echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"].'<br>';


        //------------------- $_COOKIE -------------------//
        echo "<br>Cookie variable are set.<br>";
        echo $_COOKIE["name"]. "<br/>"; 
        echo $_COOKIE["age"] . "<br/><br/>";


        //------------------- $_ENV -------------------//
        $_ENV["USER"] = "Khorasani Abrar";
        echo 'My username is ' .$_ENV["USER"] . '!';    
    ?>

</body>
</html>