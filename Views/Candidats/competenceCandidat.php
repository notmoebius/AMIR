<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="https://www.univ-tlse3.fr/medias/photo/disrupt-campus-logo-fond-blanc_1541685487390-jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

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
          <option value="6">Comptabilité </option>
      </select>
    </div>
    <div>
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
     
    </form>
    </br>

    <p>&nbsp;<B> 4-Quelles sont vos compétences dans ce domaine? </B></p>
    <table>
    
  <thead>
  
    <tr>
      <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto">
  <label class="custom-control-label" for="customCheck1"> Comptabilité générale </label>
</div></th>
      <th scope="col">Débutant&nbsp;</th>
      <th scope="col">Intermédiaire&nbsp;</th>
      <th scope="col">Expert</th>
    </tr>
  </thead>

  <tbody>
    <tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto">
  <label class="custom-control-label" for="customCheck2">Journal de caisse</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr>
    <tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck3" name="toto">
  <label class="custom-control-label" for="customCheck3">Grand Livre</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio4" value="option4" required>
          <label class="form-check-label" for="inlineRadio4"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio5" value="option5" required>
            <label class="form-check-label" for="inlineRadio5"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio6" value="option6" required>
            <label class="form-check-label" for="inlineRadio6"></label>
        </div></td>
    </tr>
    <tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck4" name="toto">
  <label class="custom-control-label" for="customCheck4">Compte de résultat</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr>
    <tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck5" name="toto">
  <label class="custom-control-label" for="customCheck5">Bilan</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr>
    <tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck6" name="toto">
  <label class="custom-control-label" for="customCheck6">Gestion des stocks</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr>
    <tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck7" name="toto">
  <label class="custom-control-label" for="customCheck7">Dépréciation</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr><tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck8" name="toto">
  <label class="custom-control-label" for="customCheck8">Amortissements</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr><tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck9" name="toto">
  <label class="custom-control-label" for="customCheck9">Cessions d'immobilisations</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr>
    <tr> 
    <div class="custom-control custom-radio custom-control-inline">
    <th scope="col"><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck10" name="toto">
  <label class="custom-control-label" for="customCheck10">Régularisation des opérations constatées d'avances</label>
</div></th>
      <td><div class="form-check form-check-inline" required>   
          &nbsp;&nbsp; <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio2" value="option2" required>
            <label class="form-check-label" for="inlineRadio2"></label>
        </div></td>
      <td><div class="form-check form-check-inline">
            &nbsp;&nbsp;<input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio3" value="option3" required>
            <label class="form-check-label" for="inlineRadio3"></label>
        </div></td>
    </tr>
    
  </tbody>
</table>

<br> 
      <p>&nbsp; <B> 5-Veuillez joindre une lettre de motivation </B> </p>
      <div class="col-10">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Lettre de Motivation...</label>
      </div>
      <br>
      <p> &nbsp;<B> 6-Veuillez joindre votre CV </B></p>
      <div class="col-10">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">CV...</label>
      </div>
      </div>


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




<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('toto');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>




</body>


</html>











