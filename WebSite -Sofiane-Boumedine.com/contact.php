 <!DOCTYPE html>
<html>

	<head>
		<title>Contact</title>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>

		<body>
			<header>			
			
			<nav class="clearfix">
					<a href="index.html"><img src="img/logo.png" width="945" height="501" class="logo"></a>
					<a href="#" class="menupush"><img src="img/menu.png" width="512" height="512" class="logomenu"></a>
				<ul class="clearfix" id="menuportable">
					<a href="#" class="menuclose"><img src="img/close.png" width="512" height="512" class="logomenuclose">
					<li><a href='index.html'><strong>ACCUEIL</strong></a></li>
			 		<li><a href='cv.html'><strong>EXPERIENCES & FORMATIONS</strong></a></li>
			 		<li><a href='competences.html'><strong>COMPETENCES</strong></a></li>
			 		<li><a href='projets.html' ><strong>PROJETS</strong></a></li>
			 		<li><a href='contact.php' ><strong>CONTACT</strong></a></li>
				</ul>		
			</nav>
			</header>

			

			<div class="row">
			<div class="w-12">
			<center><h1>Contactez-nous</h1><hr></hr></center>
			<center><p>Vous souhaitez créer un site Internet ? Vous avez un projet, une question ou vous désirez simplement avoir des informations ? N'hésitez pas à nous contacter grâce au formulaire ou aux coordonnées ci-dessous.</p></center>
			<p class="clear"></p>
			</div>
			</div>

			<div class="row">
				<div class="w-7">
					<h1>Laissez nous un message</h1>
					<form class="formulaire" action="contact-reussi.php" method="POST">
					    <div>
					        <label for="nom" id="nom">Votre NOM :</label>
					        <input type="text" id="nom" />
					    </div>
					    <div>
					        <label for="courriel" id="mail">Votre EMAIL:</label>
					        <input type="email" id="mail" />
					    </div>
					    <div>
					        <label for="message" id="message">Votre message :</label>
					        <textarea id="message"></textarea>
					    </div>
					    
					    <div class="button">
					        <button type="submit">Envoyer</button>
					    </div>	    
					</form>
				</div>
				<div class="w-5">
					<div class="informations">
							<center><h1><img src="img/info.png" width="64" height="64" style="margin-top: 50%"></center>
							<h1 id="textinformation">INFORMATIONS :</h1>
							<p><img src="img/home.png" width="64" height="64" id="contact">Paris 15 & Tremblay-En-France (93)</p>
							<p><img src="img/new_mail.png" width="64" height="64" id="contact">BoumedineSofiane@gmail.com</p>
							<p><img src="img/phone_book.png" width="64" height="64" id="contact">06 06 06 06 06</p>
					</div>
					<p class="clear"></p>	
				</div>
			</div>
					

			<footer>
			<div class="footer">
				<p class="footer">Réalisé en Ile-De-France avec passion &#169; 2016</p>
				<ul class="footer">
					<li class="footer"><a href="http://www.Facebook.com"><img class="footer" src="img/facebook.png"></a></li>
					<li class="footer"><a href="http://www.gmail.com"><img class="footer" src="img/gmail.png"></a></li>
					<li class="footer"><a href="http://www.twitter.com"><img class="footer" src="img/twitter.png"></a></li>
					<li class="footer"><a href="http://www.linkedin.com"><img class="footer" src="img/linkedin.png"></a></li>
					<li class="footer"><a href="http://www.skype.com"><img class="footer" src="img/skype.png"></a></li>
				</ul>
			</div>
			</footer>

		<script type="text/javascript" src="jquery-2.2.2.min.js"></script>
    	<script type="text/javaScript" src="script.js"></script>

		</body>

</html>