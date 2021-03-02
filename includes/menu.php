<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <strong> <a class="navbar-brand" href="#">La Casa Del CPAM<span> <img src="../Assets/Images/dct.jfif" alt=""> </span> </a></strong>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Accueil</a></li>
      <li><a href="../carrieres.php">Carrières</a></li>
      <li><a href="../carrieres.php">Nos offres d'emploi</a></li>
      <li><a href="../carrieres.php">Nos métiers</a></li>
      <li><a href="../carrieres.php">Qui sommes-nous?</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="../Views/connexion.php"><span class="glyphicon glyphicon-log-in" ></span> Connexion</a></li> 
        <li> <a href="#"><span class="glyphicon glyphicon-user" style="cursor:pointer" onclick="openNav()"></span> Inscription</a> </li>
    </ul>
  </div>
</nav>

<style>
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,2,30, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
 font-weight:bold;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="../Views/Recruteurs/inscriptionRecruteur.php">Recruteur</a>
    <a href="../Views/Managers/inscriptionManager.php">Manager</a>
    <a href="../Views/RH/inscriptionRH.php">Service RH</a>
    <a href="../Views/Candidats/inscriptionCandidat.php">Candidat</a>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>