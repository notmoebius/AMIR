<!doctype html><html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="https://www.univ-tlse3.fr/medias/photo/disrupt-campus-logo-fond-blanc_1541685487390-jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="styleCandtRec.css"/>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="../../Assets/Images/CPAM.jpg" width="100" height="50" class="d-inline-block align-top"  alt="">
      </a>
      <div class="logo-image">
          <img src="https://m.media-amazon.com/images/S/abs-image-upload-na/4/AmazonStores/ATVPDKIKX0DER/66ed43b41f6e33ec15f9ce0aefc02144.w400.h400.png" width="100" height="50" class="img-fluid">
      </div>
      <input id="toggle" type="checkbox" checked data-toggle="toggle" data-on="<i class='bi bi-person'> Candidat </i>" data-off="<i class='bi bi-person-fill'> Recruteur </i>">
    </nav>
    <div class="card">
        <div class="card-body" style="text-align:center">
          <h1> <B>Formulaire des candidature </B></h1>
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>
    <br>
    <div class="form-group">
      <select class="custom-select" required > Quel emploi recherchez-vous?
          <option value=""> Quel emploi recherchez-vous? </option>
          <option value="1">TELECONSEILLERS </option> 
          <option value="2">Technicien d'accueil</option>
          <option value="3">Délégué Assurance Maladie </option>
          <option value="4">FORMATEURS </option>
          <option value="5">Agent administratif </option>
      </select>
    </div>
    <form class="was-validated" method="" action="">
          <br>
          <p>&nbsp; <B>1-Avez-vous déjà exercé ce job</B></p>
          <div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1">Oui</label>
        </div>
        <div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2">Non</label>
        </div>
      <br>
      &nbsp;
      <div class="custom-control custom-checkbox mb-3">
        &nbsp;&nbsp; <input type="checkbox" class="custom-control-input" id="customControlValidation1" >
        <label class="custom-control-label" for="customControlValidation1"> <B>Cochez cette case si vous voulez travailler dans un secteur différent à celui que vous êtes actuellement </B></label>
      </div>
      <p>&nbsp; <B>2-Combien d'année avez vous travailler chez la CPAM de Toulouse?</B></p>
      <div class="col-10">
        <input class="form-control" type="number" id="example-number-input" required>
      </div>
      <br>
      <p>&nbsp;<B> 3-Donnez quatre qualités professionnelles que vous possédez </B></p>
      <div class="col-10">
        <select class="custom-select" required>
          <option value="">sélectionner une qualité</option>
          <option value="1">Optimiste</option>
          <option value="2">Curieux/Curieuse</option>
          <option value="3">Dynamique</option>
          <option value="4">Sérieux/Sérieuse</option>
          <option value="5">Un bon relationnel</option>
          <option value="6">Autonome</option>
        </select>
      </div> </br>
      <div class="col-10">
        <select class="custom-select" required>
          <option value="">sélectionner une qualité</option>
          <option value="1">Optimiste</option>
          <option value="2">Curieux/Curieuse</option>
          <option value="3">Dynamique</option>
          <option value="4">Sérieux/Sérieuse</option>
          <option value="5">Un bon relationnel</option>
          <option value="6">Autonome</option>
        </select>
      </div></br>
      <div class="col-10">
        <select class="custom-select" required>
          <option value="">sélectionner une qualité</option>
          <option value="1">Optimiste</option>
          <option value="2">Curieux/Curieuse</option>
          <option value="3">Dynamique</option>
          <option value="4">Sérieux/Sérieuse</option>
          <option value="5">Un bon relationnel</option>
          <option value="6">Autonome</option>
        </select>
      </div></br>
      <div class="col-10">
        <select class="custom-select" required>
          <option value="">sélectionner une qualité</option>
          <option value="1">Optimiste</option>
          <option value="2">Curieux/Curieuse</option>
          <option value="3">Dynamique</option>
          <option value="4">Sérieux/Sérieuse</option>
          <option value="5">Un bon relationnel</option>
          <option value="6">Autonome</option>
        </select>
      </div>

      <br> 
      <p>&nbsp; <B> 4-Veuillez joindre une lettre de motivation </B> </p>
      <div class="col-10">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Lettre de Motivation...</label>
      </div>
      <br>
      <p> &nbsp;<B> 5-Veuillez joindre votre CV </B></p>
      <div class="col-10">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">CV...</label>
      </div>
      </div>
    </form>
    <br>  
    <div style="align-items: center; margin-bottom: 10px;">
        <div class="text-center">
            <button type="button" class="btn btn-primary">Sauvegardez le formulaire </button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-primary">Envoyé le formulaire</button>
        </div>
    </div>
    <div class="container">
    <div class="card bg-dark text-white">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">Mention legal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Confidentialité</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cookies</a>
            </li>
            <li>
              <a class="nav-link" href="../../index.php">Accueil</a>
            </li>
          </ul>
        <br>
        <p> &copy; Copyright All Rights Reserved.</p>
    </div>
  
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body></html>











