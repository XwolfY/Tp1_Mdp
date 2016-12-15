<!DOTYPE html>

<html>

<head>
    <title>Traitement</title>

</head>

<body>

    <?php 
        //reset Variable Global 
        if(isset($_GET['c']))
        {
            $_GET['c'] = FALSE;
        }
        if(isset($_GET['d']))
        {
            $_GET['d'] = FALSE;
        }
    
        $secret = '6LeX9Q4UAAAAADV4o4Cw9qlEJOtlIGsemfJrL9xV';
        $captcha = $_POST['g-recaptcha-response'];
        $response= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
        $result= json_decode($response,TRUE);
        
          
        
    if ($_POST['password'] == 'kangourou' and $result['success'])
            {
                header('Location: Site_Nasa.php');
                exit();
            }

    else
        {
            if ($_POST['password'] != 'kangourou')
            {
                $c=TRUE;
            }
            if ($result['success'] == FALSE)
            {
                $d=TRUE;
            }
            
            header("Location: index.php?c=$c&d=$d");
        }
        
        ?>

</body>

</html>