<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Portefolio Shana LEFEVRE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<!--Liens style -->
	<link rel="stylesheet" href="style/accanimation.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/contact.css">

	<script src="js/contact_formulaire.js"></script>



	<!--Lien pour la flèche-->
	<link type="text/css" rel="stylesheet" href="returnOnTop.css" media="all" />        
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/returnOnTop.js"></script>

</head>

<body>


	<div id="content">
		<div id="bloc_page">
			<header>
				<div id="titre_principal">
					<h2>Shana Lefèvre</h2>
				</div>
				<nav>			
					<label for="mobile"><img src="icone/menu_fleche.png" width="35px"></label>
					<input type="checkbox" id="mobile" role="button">
					<ul>
						<li><a href="index.html">Accueil</a></li>
						<li><a href="cv2.html">Curriculum </a></li>
						<li><a href="realisations.html">Mes réalisations </a></li>
						<li><a href="contact2.html" style="color :orange; text-decoration: underline; font-weight: bold;">Contact </a>
					</ul>
					</div>
				</nav>
		
			</header>
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
		<form name="myForm" action="php/formulaire.php" onsubmit="return validateForm()" method="post">
			<table class="form-style">
				
			   <tr>
				  <td>
					 <label>
						Votre nom <span class="required">*</span>
					 </label>
				  </td>
				  <td>
					 <input type="text" name="name" class="long"/>
					 <span class="error" id="errorname"></span>
				  </td>
			   </tr>

			   <tr>
				  <td>
					 <label>
						Votre adresse e-mail <span class="required">*</span>
					 </label>
				  </td>
				  <td>
					 <input type="email" name="email" class="long"/>
					 <span class="error" id="erroremail"></span>
				  </td>
			   </tr>

			   <tr>
				  <td>
					 <label>
						Votre message <span class="required">*</span>
					 </label>
				  </td>
				  <td>
					 <textarea name="message" class="long field-textarea"></textarea>
					 <span class="error" id="errormsg"></span>
				  </td>
			   </tr>
			   
			   <tr>				
					<td>
						<p>Qu'avez-vous pensé de mon site ?</p>				
						<div class="rating rating2"><!--
							--><a href="#5" title="Give 5 stars">★</a><!--
							--><a href="#4" title="Give 4 stars">★</a><!--
							--><a href="#3" title="Give 3 stars">★</a><!--
							--><a href="#2" title="Give 2 stars">★</a><!--
							--><a href="#1" title="Give 1 star">★</a>
						</div>
						<input type="submit" name = "envoi" value="Envoyer">      
						<input type="reset" value="Réinitialiser"> 
					</td>
			   </tr>
			</table>		
			
		</form>	

	</section>


	<div class="espace_petit">
	</div>

	<h1>Mes réseaux sociaux</h1>
	<div class="espace_petit">
	</div>
	<div class="zoom">
		<a target="_bank" href="https://www.youtube.com/channel/UCk2e47NhpKnLixJDr593qSw"><img src="icone/youtube.png" alt="logo youtube"></a>
		<a target="_bank" href="https://www.linkedin.com/in/shana-lef%C3%A8vre-b1b19619b/"><img src="icone/linkedin.jpg" alt="logo linkedin"></a>
		<a href="mailto:shana.lefevre@etu.u-pec.fr"> <img src="icone/mailapple.png" alt="logo"></a>
	</div>



	<footer>
		<!--Fin-->
		<aside class="info_footer">
			<h4>Informations du site</h4>
			<div class="espace_petit">
			</div>
			<p>Dernière mise à jour du site :
			<b>Décembre 2020 - Version 4.1.1</b></p>
			<p>By @ShanaLefevre</p>
			<p>Tous droits réservés.</p>
			<a href="https://www.u-pec.fr/" target="_blank"><img src="icone/upec_blanc.png" width="200"  alt="Logo UPEC" ></a>
			<p><i>Portefolio créé en novembre 2019</i></p>
		</aside>

		<aside class="menu_footer">
			<h4>Navigation</h4>
			<div class="espace_petit"></div>
			<p><a href="index.html">Accueil</a></p>
			<p><a href="cv2.html">Curriculum</a></p>
			<p><a href="realisations.html">Mes réalisations</a></p>
			<p><a href="contact2.html">Me contacter</a></p>
		</aside>

		<aside class="contact_footer">
			<h4>Contactez-moi</h4>
			<div class="espace_petit"></div>
			<p><a target="_bank" href="https://www.linkedin.com/in/shana-lef%C3%A8vre-b1b19619b/"><img src="icone/ln_footer.png" alt="logo linkedin"></a></p>
			<p><a target="_bank" href="https://www.youtube.com/channel/UCk2e47NhpKnLixJDr593qSw"><img src="icone/ytb_footer.png" alt="logo youtube"></a></p>
			<p><a href="mailto:shana.lefevre@etu.u-pec.fr"> <img src="icone/mail_footer.png" alt="logo"></a></p>
			
		</aside>	  
	
	</footer>

</body>

</html>
