<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"VOTRE NOM"<email-expediteur@example.org>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
		<body>
		<div align="center">
		<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
		<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
		<br />
		'.nl2br($_POST['message']).'
		</div>
		</body>
		</html>
		';

		mail("shanalefevre@gmail.com", "CONTACT - PortFolio", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Portefolio Shana LEFEVRE</title>
	<link rel="icon" type="image/png" href="icone/S.png">
	<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<!--Liens style -->
	<link rel="stylesheet" href="style/accanimation.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/contact.css">

	<!--Lien JS-->
	<script src="js/contact_formulaire.js"></script>

	<!--Lien pour la flèche-->
	<link type="text/css" rel="stylesheet" href="returnOnTop.css" media="all" >
	<script src="js/jquery.js"></script>
	<script src="js/returnOnTop.js"></script>

</head>

<body>

	<div id="content">
		<div id="bloc_page">
			<header>
				<div id="titre_principal">
					<h2><a href="index.html">Shana Lefèvre</a></h2>
				</div>
				<nav>
					<label for="mobile"><img src="icone/menu_fleche.png" style="width:35px;" alt="logo menu"></label>
					<input type="checkbox" id="mobile" role="button">
					<ul>
						<li><a href="index.html">Accueil</a></li>
						<li><a href="cv2.html">Curriculum </a></li>
						<li><a href="realisations.html">Mes réalisations </a></li>
						<li><a href="contact2.html" style="color :orange; text-decoration: underline; font-weight: bold;">Contact </a>
						</ul>
					</nav>
				</header>
			</div>
		</div>

		<h1>Comment me contacter ?</h1>
		<div class="espace_petit">
		</div>
		<!-- Création d'un formulaire-->
		<p class="textee">Merci de remplir le formulaire ci-dessous afin que je puisse vous recontacter au plus vite. A très bientôt !!!</p>
		<p>Shana LEFEVRE.</p>



		<div class="espace_moyen">
		</div>

		<section>


			<form method="POST" action="">
				
				<label>Nom et/ou prénom <em>*</em></label><br>
				<input type="text" name="nom" requiered ="" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />

				
				<label>Votre e-mail <em>*</em></label><br>
				<input type="email" name="mail" requiered ="" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
				
				<label>Votre message<em>*</em></label><br>
				<textarea name="message" requiered ="" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
				<input type="submit" value="Soumettre" name="mailform"/>
				<input type="reset" name="" value="Réinitialiser">

			</form>


		</section>

		<?php
		if(isset($msg)) {
			echo $msg;
		}
		?>


		<div class="espace_petit">
		</div>

		<h1>Mes réseaux sociaux</h1>
		<div class="espace_petit">
		</div>
		<div class="zoom">
			<a target="_blank" href="https://www.youtube.com/channel/UCk2e47NhpKnLixJDr593qSw"><img src="icone/youtube.png" alt="logo youtube"></a>
			<a target="_blank" href="https://www.linkedin.com/in/shana-lef%C3%A8vre-b1b19619b/"><img src="icone/linkedin.jpg" alt="logo linkedin"></a>
			<a href="mailto:shana.lefevre@etu.u-pec.fr"> <img src="icone/mailapple.png" alt="logo"></a>
		</div>


		<!--Footer-->
		<footer>
			<aside class="info_footer">
				<h4>INFORMATIONS DU SITE</h4>
				<div class="espace_petit">
				</div>
				<p>Dernière mise à jour du site :
					<b>Avril 2021 - Version 4.2.1</b></p>
					<p>By @ShanaLefevre</p>
					<p>Tous droits réservés.</p>
					<a href="https://www.u-pec.fr/" target="_blank"><img class ="logo_upec" src="icone/upec_blanc.png" alt="Logo UPEC" ></a>
					<div class = "golo">
						<img src ="icone/S.png" alt="Logo shana">
					</div>
					<p><i>Portefolio créé en novembre 2019</i></p>
				</aside>

				<aside class="menu_footer">
					<h4>NAVIGATION</h4>
					<div class="espace_petit">
					</div>
					<p><a href="index.html">Accueil</a></p>
					<p><a href="cv2.html">Curriculum</a></p>
					<p><a href="realisations.html">Mes réalisations</a></p>
					<p><a href="contact2.html">Me contacter</a></p>
				</aside>

				<aside class="contact_footer">
					<h4>CONTACTEZ-MOI</h4>
					<div class="espace_petit">
					</div>
					<p><a target="_blank" href="https://www.linkedin.com/in/shana-lef%C3%A8vre-b1b19619b/"><img src="icone/ln_footer.png" alt="logo linkedin"></a></p>
					<p><a target="_blank" href="https://www.youtube.com/channel/UCk2e47NhpKnLixJDr593qSw"><img src="icone/ytb_footer.png" alt="logo youtube"></a></p>
					<p><a href="mailto:shana.lefevre@etu.u-pec.fr"> <img src="icone/mail_footer.png" alt="logo"></a></p>
				</aside>
			</footer>

		</body>

		</html>