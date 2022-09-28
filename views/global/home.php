<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="/" method="POST">
                <?php
                if (SessionHelpers::isLogin()) {
                ?>
                    <p>Vous êtes connecté</p>
                <?php
                }
                ?>
                    
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                // Code de vérification 
                ?>
            </form>
            <p><a href="inscription.php">S'inscrire</p>
        </div>
    </body>
</html>
