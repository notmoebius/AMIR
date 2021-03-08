<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>CPAM profil 1</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
	crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
	crossorigin="anonymous"></script>
<link rel="stylesheet" href="styleProfilCandidat.css">
</head>
<body>
	<div class="container">
		<div style="display: inline-block;">
			<div style="display: inline-block; vertical-align: middle;"
				class="fb-profile">
				<img class="rounded-circle" src="../../Assets/Images/icon.png"
					alt="" width="100" height="100">
			</div>
			<div style="display: inline-block; vertical-align: middle;">
				<h3>
					M. <b>Toto Titi</b>
				</h3>
				<h4>Service : Ministère des documents classés</h4>
				<p>Tel : 06 01 01 01 01</p>
				<p>toto.titi@mail.fr</p>
			</div>
		</div>
		<div>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
						data-bs-target="#home" type="button" role="tab"
						aria-controls="home" aria-selected="true">Parcours</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="profile-tab" data-bs-toggle="tab"
						data-bs-target="#profile" type="button" role="tab"
						aria-controls="profile" aria-selected="false">Compétences</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="contact-tab" data-bs-toggle="tab"
						data-bs-target="#contact" type="button" role="tab"
						aria-controls="contact" aria-selected="false">Vos CV et lettres de
						motivation</button>
				</li>
			</ul>

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel"
					aria-labelledby="home-tab">
					<div class="contenu">
						<h3>Mes expériences et mes formations</h3>
						<p>Votre parcours reprend l'ensemble de vos expériences
							professionnelles ou extra-professionnelles, et de vos formations
						</p>

						<div class="contenu">
							<div class="competence">Java</div>
						</div>
					</div>
					<div>
						<div class="bouton">
							<i class="fas fa-plus-circle"></i> Ajouter une expérience
						</div>
						<div class="bouton">
							<i class="fas fa-plus-circle"></i> Ajouter une formation
						</div>
					</div>

					<div class="contenu">
						<h3>Centres d'intérêt</h3>
						<p>Un centre d'intérêt est une activité pour laquelle vous
							éprouvez de l'intérêt et à laquelle vous consacrez une partie
							de votre temps libre</p>

						<div class="contenu">
							<div class="competence">Ornithologie</div>
						</div>
						<div>
							<div class="bouton">Ajouter un centre d'intérêt</div>
						</div>

					</div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel"
					aria-labelledby="profile-tab">
					<div class="contenu">
					<div class="contenu">
						<h3>Possédez-vous ces compétences ?</h3>
						<p>Ce sont les compétences attendues par les recruteurs</p>
						<div class="contenu">
								<div class="competence">Gestion de projets</div>
						</div>
					</div>
					<div class="contenu">
							<h3>Savoirs et savoir-faire</h3>
							<div class="contenu">
								<div class="competence">R�daction de rapports</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel"
					aria-labelledby="contact-tab">
					<div class="contenu">
					<div class="contenu">
					<h3>Mes CV</h3>
					<p>Vous pouvez télécharger, créer, modifier vos CV et envoyer
						une candidature spontanée</p>
					</div>

						<div class="contenu">
							<h3>Mes réalisations</h3>
							<p>Ajoutez tout document mettant en valeur vos compétences</p>
						</div>

					</div>
				</div>
			</div>
		</div>

		<a href="../../index.php">Accuiel</a> <a href="competenceCandidat.php">Compétences</a>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>

</body>
</html>