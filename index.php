<?php

//include test class
include 'test.php';

//get test data
$data = include 'data.php';

//create the test
$test = new Test( $data );

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <script async="" defer="" src="test.js"></script>
        <link href="test.css" rel="stylesheet">
    </head>
    <body>
        <?php 

            //Test 4: ( check instruction in test.php )
            print_r( $test->get() ); 
            
        ?>
    </body>
</html>