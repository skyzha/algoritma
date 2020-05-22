<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hide {
            visibility: hidden;
        }
    </style>
</head>
<body>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Input <input type="text" name="num"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
<br><br>

<?php
    if(isset($_POST['submit'])) 
    { 
        $length = $_POST['num'];
        echo "Input : ".$length."<br>";

        for($x=0; $x<$length; $x++){
            echo"<br>";
            $res = $x%4;

            echo"@";
            for($y=2; $y<$length; $y++){
                if(($res == 0 && $y == 2) || $res == 1 || ($res == 2 && $y == $length-1) || $res == 3) {
                    echo"<span class='hide'>@</span>";
                } else {
                    echo "@";
                }
            }
            echo"@";
        }
    }
?>
</body>
</html>