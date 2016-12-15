<!DOTYPE html>

<html>

<head>
    <title>MDP !</title>
    <meta charset="utf-8" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <fieldset>
        <form method="post" action="traitement.php">
            <label for="password">Mot de passe</label> :
            <input type="password" id="password" name="password" placeholder="Password" required />
            <div class="g-recaptcha" data-sitekey="6LeX9Q4UAAAAAMwdH2cDXpNPd2sftK839hqD-7Ka"></div>
            <input type="submit" />
        </form>
    </fieldset>

    <?php 
    if (isset($_GET['c']) and $_GET['c']==TRUE)
{
    echo '<pre style="color:crimson">Mauvais mot de passe !</pre>';
}
    if(isset($_GET['d']) and $_GET['d']==TRUE)
    {
       echo '<pre style="color:crimson">Oups, problème de CAPTCHA !</pre>';
    }
    ?>
</body>

</html>