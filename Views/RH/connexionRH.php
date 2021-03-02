<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Assets/css/connexionCandidat.css" rel="stylesheet">
    <link rel="icon" type="image/jfif" href="../../Assets/Images/dct.jfif">
    <title>Connexion Service RH</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <img src="../../Assets/Images/dct.jfif"  width="20px" alt="">
                        <h2 class="panel-title">Connexion Service RH</h2>
                    </div>
                    <div class="panel-body">
                    <form action="" method="POST" >
                            <div class="form-item box-item">
                            <input type="email" name="loginConnect" required placeholder="Entrez votre login">
                            </div>
                            <div class="form-item box-item">
                            <input type="password" name="mdpConnect" required placeholder="Entrez votre mot de passe">
                            </div>
                            <div class="form-item">
                                <input style="margin-left:100px;" type="submit" value="Connexion" class="submit" name="connexionUser"  > 
                             </div>  
                             <h2 class="panel-title">Mot de passe oublié ?   <a href="motdePasseOublie.php"> C'est ici !</a> </h2>
                        </form>
                        <hr>
                        <h3> <a href="../../index.php"> Allez à l'accueil</a></h3>
                    </div>
                </div>
            </div>
        </div> <br>
    </div>
</body>
</html>
