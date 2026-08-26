<?php
    $today= date("d-m-Y");
?>

<!doctype html>
<html>
    <head>
        <title>Today's date</title>

        <style>
            body{
                font-family: monospace;
                background: lightyellow;
                text-align:center;
            }
        </style>
    </head>

    <body>
        <h1>Today's Date</h1>
        <p><?php echo $today?></p>
    </body>
</html>