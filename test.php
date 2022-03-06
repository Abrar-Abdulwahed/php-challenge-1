<?php
    //------------------- $_GET -------------------//
    if(isset($_GET['subject']) and isset($_GET['position']))
        echo "Study " . $_GET['subject'] . " at " . $_GET['position'];

    //------------------- $_FILES -------------------//
    if ($_FILES["file"] > 0)
        echo "You have selected a file to upload";
?>