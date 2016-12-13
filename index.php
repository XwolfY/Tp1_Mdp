<!DOTYPE html>

<html>
    <head>
        <title>MDP !</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <fieldset>
            <form method="post" action="traitement.php">
                <label for="password">Mot de passe</label> : <input type="password" id="password" name="password" placeholder="Password" required />
                <input type="submit"/>
            </form>
        </fieldset>
        
        <?php 
    if (isset($_GET['c']) and $_GET['c']==TRUE)
{
    echo '<pre style="color:crimson">Mauvais mot de passe !</pre>';
}
    ?>
    </body>
</html>



