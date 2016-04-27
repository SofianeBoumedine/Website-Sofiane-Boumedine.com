<!DOCTYPE html>
<html>

	<head>
		<title>Contact</title>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>

		<body>
		 <?php


$nom = utf8_decode($_POST['nom']);
$mail = ($_POST['email']);
$message = utf8_decode($_POST['message']);
$headers = 'From : '.$nom.'<'.$mail.'>'."\r\n";
$headers .= 'Reply To : <'.$mail.'>'."\r\n";

$to ='boumedinesofiane@gmail.com';

mail($to,$message,$headers)
?>
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
			<center><h1>Contact  Réussie</h1><hr></hr></center>
			<center><p>Nous vous confirmons avoir bien reçu votre message. Néanmoins, si vous avez besoin de plus de renseignements, n'hésitez pas à me joindre par divers moyens mits à votre disposions (téléphone, email ...).</p></center>
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
