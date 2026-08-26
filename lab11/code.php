<!doctype html>
<html>
    <head>
        <title>Form submission</title>

        <style>
            body{
                display:inline-block;
            }
            textarea{
                font-size: 12px;
                padding: 10px;
                margin: 5px;
                border-radius: 5px;
                
            }

            input[type="submit"],
            input[type="reset"] {
                font-size: 12px;
                background-color:lightblue;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h2>Enter info</h2>
        <form action="" method="POST">
            <textarea id="info" name="info" rows="6" cols="50"></textarea>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $info= $_POST["info"];

                if(!empty($info)) {
                    $file= fopen("form.text", "a");
                    fwrite($file, $info . "\n");
                    fclose($file);

                    echo "<script> alert('$info'); </script>"; 
                }
                else {
                    echo "<script>alert('Please enter some info!'); </script>";
                }
            }
        ?>
    </body>
</html>