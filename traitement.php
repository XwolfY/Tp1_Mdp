<!DOTYPE html>

<html>
    <head>
        <title>Traitement</title>
    
    </head>
    <body>
        <?php 
            if ($_POST['password'] == 'kangourou')
            {
                header('Location: Site_Nasa.php');
                exit();
            }
        else
        {
            header('Location: index.php?c=TRUE');
        }
        
        ?>
        
    </body>
</html>
