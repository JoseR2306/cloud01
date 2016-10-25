<doctype />
<html>
    <head>
    
    </head>
    <body>
        
        <h1><?php echo 'Hola Mundo<br>'?></h1>
        <?php 
            for($i = 2; $i < 6 ; $i++){
                echo "<h$i>¿Como estás?</h$i>";
            }
        ?>
    </body>
</html>