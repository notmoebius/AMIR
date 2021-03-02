<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/connexion.css" rel="stylesheet">
    <link rel="icon" type="image/jfif" href="../Assets/Images/dct.jfif">
</head>
<body>
    <br/>
    <br/>
    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <h2 style="text-align:center">Connexion utilisateur</h2>
                <div class="vl">
                    <span class="vl-innertext">Ou</span>
                </div>                
                <div class="col">  
                    <h4>Se connecter avec les réseaux sociaux?</h4> 
                    <a href="https://fr-fr.facebook.com/" class="fb btn">
                       <i class="fa fa-facebook fa-fw"></i>Facebook
                    </a>
                    <a href="https://twitter.com/" class="twitter btn">
                        <i class="fa fa-twitter fa-fw"></i> Twitter
                    </a>
                    <a href="https://gmail.com" class="google btn"><i class="fa fa-google fa-fw">
                        </i> Google+
                    </a>
                </div>
                <div class="col">
                    <select name="role" id="choix" required>
                        <option value="">Vous êtes ?</option>
                        <option value="">Recruteur</option>
                        <option value="">Manager</option>
                        <option value="">Cadre Fonctionnel</option>
                        <option value="">CDD</option>
                        <option value="">Service RH</option> 
                        <option value="">Candidat</option>        
                    </select>
                    <input type="email" name="username" placeholder="Adresse mail" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <input type="submit" value="Choisir">
                </div>
            </div>
        </form>
    </div>
   
   <div class="bottom-container">
   <div class="container">
        <div class="row">
            <div class="col">
                <a href="#" style="color:white" class="btn"type="button" data-toggle="modal" data-target="#myModal">S'inscrire</a>
            </div>
            <div class="col">
                <a href="motdePasseOublie.php" style="color:white" class="btn">Mot de passe oublié?</a>
            </div>
        </div>
    </div>
   </div>

   <div class="modal fade" id="myModal" role="dialog" >
        <div class="modal-dialog modal-sm" >
            <div class="modal-content" style="background-color: #0f7ec5;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align:center">Inscription utilisateur</h4>
                </div>
                <div class="modal-body" style="background-color:#f2f2f2;">
                    <p>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn1"><a href="Recruteurs/inscriptionRecruteur.php">Création d'un compte Recruteur</a> </button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn2"> <a href="Managers/inscriptionManager.php">Création d'un compte Manager</a> </button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn2"> <a href="RH/inscriptionRH.php">Création d'un compte service RH</a> </button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn2"> <a href="Candidats/inscriptionCandidat.php">Création d'un compte Candidat</a> </button>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../Assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../Assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../Assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
