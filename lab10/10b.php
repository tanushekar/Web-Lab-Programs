<!--Prime or not -->

<?php
    $result="";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $num= intval($_POST["number"]);

        if($num <= 1){
            $result= "Please enter num>1";
        }

        else{
            $isPrime= true;
            for($i=2; $i<=sqrt($num); $i++) {
                if($num % $i ==0) {
                    $isPrime= false;
                    break;
                }
            }

            $result= $isPrime ? "$num is a PRIME": "$num is NOT a prime";
        }
    }
 ?>

 <!doctype html>
 <html>
    <head>
        <title>Prime or not</title>
        <style>
            body{
                font-family: Arial;
                background-color: lightblue;
                padding: 10px;
            }
            h2{
                color: blue;
            }
        </style>
    </head>

    <body>
        <h2>Prime Number Checker</h2>
        <form method="POST" action="">        
            <br>
            <br>
            <input type="number" id="number" name="number" required>        
        </form>

        <?php
            if($result){
                echo "<p>$result</p>";
            }
        ?>
    </body>
 </html>