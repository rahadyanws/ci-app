<html>
    <head>
        <title>User View</title>
    </head>
    <body>
        <?php 
//        echo $result;
            foreach ($result as $value) {
                echo $value->username . "<br>";
            }
        ?>
    </body>
</html>