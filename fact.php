<html>
    <head>
        <title>
            Factorial
        </title>
    </head>
    <body>
        <form method="post" action="fact.php">
            Number: <input name="number" type="text">
            <input type="submit" value="Calculate">
        </form>
        <?php
            $num = $_POST["number"];
            function fact($x){
                if($x==0 || $x==1){
                    return 1;
                }
                else {
                    return $x * fact($x-1);
                }
            }
            echo "The factorial of ". $num . " is ".fact($num);
        ?>
    </body>
</html>