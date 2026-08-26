<!doctype html>
<html>
    <head>
        <title>LOGIN FORM</title>
    </head>

    <body>
        <h2>LOGIN FORM</h2>

        <form action="" method="POST">
            <label>USERNAME:</label>
            <br>
            <input type="text" name="username">

            <br><br>
            <label>PASSWORD: </label>
            <br>
            <input type="password" name="password">

            <br><br>
            <button type="submit">Login</button>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $uname= $_POST["username"];
                $pwd= $_POST["password"];

                $is_valid= false;

                $file= fopen("login.txt", "r");

                while ( ($line=fgets($file)) !== false) {                 
                    $content= trim($line);
                    if($content == $uname . ":" .$pwd) {
                        $is_valid= true;
                        break;
                    }
                }
                fclose($file);

                if($is_valid) {
                    echo "<script> alert('access granted'); </script>";     
                }

                else {
                    echo "<script>alert('incorrect login')</script>";
                }

            }
        ?>
    </body>
</html>