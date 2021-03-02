<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Assets/css/connexionCandidat.css" rel="stylesheet">
    <link rel="icon" type="image/jfif" href="../../Assets/Images/dct.jfif">
    <title>Connexion Candidat</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    <img src="../../Assets/Images/dct.jfif"  width="20px" alt="">
                        <h2 class="panel-title">Identifiant oublié</h2>
                    </div>
                    <hr>
                    <p style="text-align: center;">
                        Recevez votre nom d'utilisateur en utilisant l'adresse électronique ou le numéro de
                         téléphone associé à votre compte.
                    </p>
                    <div class="panel-body">
                    <form action="" method="POST" >
                        <div class="form-item box-item" id="contenuChoix">
                            <input type="radio" value="" name="choix" id="adM">
                            <label for="" id="adM">Utiliser mon adresse mail</label>
                        <br>
                            <input type="radio" value="" name="choix" id="idTel">
                            <label for="" id="idTel">Utiliser mon numéro de téléphone </label>
                        </div>
                        <div class="form-item box-item">
                            <input type="email" name="loginConnect" required placeholder="Entrez votre login" id="login" readonly>
                         </div>
                        <div class="form-item box-item">
                            <input type="password" name="mdpConnect" required placeholder="Entrez votre mot de passe" id="mdp" readonly>
                        </div>
                        <div class="form-item">
                                <input style="margin-left:100px;" type="submit" value="Changer" class="submit" name="connexionUser"  > 
                             </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>

<script>
    var contenuChoix = document.getElementsBy("contenuChoix");
    var $idM = document.getElementsBy('idM');
    var $idTel = document.getElementsBy('idTel') ;
    var $login = document.getElementsBy('login');
    if($idM){
        document.getElementsBy('login').readOnly =false;
    }
   
    var mdp = document.getElementsBy('mdp');

</script>
