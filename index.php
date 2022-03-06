<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Duplicated From Array</title>
</head>
<body>
    <?php
    //------------------- First Method -------------------//
    echo '//------------------- First Method -------------------//<br>';
    $givenArray = array(1, 5, 2, 5, 1, 3, 2, 4, 5);
    echo "Original Array : \n";
    print_r($givenArray);
    echo '<br>';
    $uniqueArry = array();  
    foreach($givenArray as $val) { 
       $uniqueArry[$val] = $val;   
    }
    echo "Updated Array : \n ";
    print_r($uniqueArry);
    echo '<br><br>';

    //------------------- Second Method -------------------//
    echo '//------------------- Second Method -------------------//<br>';
    $originalArr = array(1, 5, 2, 5, 1, 3, 2, 4, 5);
    echo "Original Array : \n";
    $originalArr = array_flip($originalArr);;
    $originalArr = array_flip($originalArr);
    $originalArr = array_values($originalArr);
    echo "<br>Updated Array : \n ";
    print_r($originalArr);
    ?>
</body>
</html>