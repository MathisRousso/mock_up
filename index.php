<?php
    include("database.php");
    $database=databaseConnection();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./static/css/base.css">
        <link rel="stylesheet" href="./static/css/account.css">
    </head>

    <body>
        <header>
            <?php include("template/header.php"); ?>    
        </header>
            <?php
                $page = false;
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }
                if($page && file_exists('template/'.$page.'.php')) {
                    include('template/'.$page.'.php');
                }
                 
                else{
                    include('template/home.php');
                    //echo 'The file does not exist';
                }
                
            ?>
        <footer>
            <?php include('template/footer.php')?>
        </footer>
    </body>
</html>
