<?php 

	require_once "data/database.php";
	require "./src/repository/presentationRepository.php";
	require "./src/repository/imageRepository.php";
	require "./src/repository/videoRepository.php";
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="./public/assets/css/style.css">
	<title>site uvci</title>
</head>
<body>
 
	   <p class="bac"> <!--une université publique d'excellence en ligne, avec vous, partout et à tout moment --><img src="./public/assets/files/Capturee.PNG"> &nbsp;&nbsp;&nbsp;&nbsp;</p>
<table > 
<tr>
	<div class="conteineur">
<td class="droit"> 
	 <div class="premier"> 
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="./public/assets/files/uvci_im.png"> 
	  <!-- <h1>u<span>v</span>ci</h1> -->
 </div>
</td>
<td>
	<div class="debutant">
	      <ul class="controls">
		   <li><i class="fa-solid fa-house-chimney"></i>&nbsp;&nbsp;<a href="https://www.uvci.edu.ci/portail/Main/index/fr"> accuil</a></li>
		   <li><i class="fa-solid fa-computer"></i>&nbsp;&nbsp;<a href="http://scolarite.uvci.edu.ci"> inscription</a> </li>
		    <li><i class="fa-solid fa-desktop"></i>&nbsp;&nbsp;<a href="https://www.uvci.edu.ci/portail/Main/index/fr"> plateformes</a></li>
		    <li><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;<a href="https://www.uvci.edu.ci/portail/Main/siege/fr"> siège-PPN</a></li>
		    <li><i class="fa-solid fa-users"></i>&nbsp;&nbsp;<a href="https://www.uvci.edu.ci/portail/Main/administration/fr"> administration</a></li>
		    <li><i class="fa-solid fa-newspaper"></i>&nbsp;&nbsp;<a href="https://www.uvci.edu.ci/portail/Medias/actualites/fr">media</a></li>
		    <li><i class="fa-solid fa-ear-listen"></i>&nbsp;&nbsp;<a href="https://assistance.uvci.edu.ci/ecoute/public/"> ecoute</a></li>
	     </ul>
	</div>
 
</td>
</div>
</tr>
</table>
	<div class="second">
	 <div class="triple">
		<p>
		Université Virtuelle de Côte d'Ivoire(UVCI):
	    </p>
		
		
	  <ul class="vide">
		<?php 

			foreach($presentions as $presentation) {
			?>
		<li><i class="fa-solid fa-check"></i> <?php echo $presentation['liste'] ?> </li>
	 <?php } ?>

	  </ul>

	<i class="fa-solid fa-graduation-cap"></i>Taux de réussite:<i class="nuber"> 55.63%</i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-briefcase"></i>Taux d'insertion professionnelle:<i class="nuber">70.62%</i>
	</div>
	<div class="forma">
		<h4 class="temoine">Témoignages</h4>
		<?php
			foreach($images as $image) {

			?>
	<img src="public/assets/files/<?php echo $image['nom_image'] ?>">

	<?php 
			}
	?>
	</div>
	</div>

	<!-- insertion des video-->
	
	<div class="videos">
		<?php
			foreach($videos as $video) {

		?>
		<div>
			<h4 class="temoin"> <?php echo $video['titre'] ?>  </h4>
			<div>
				<video controls="controls">
					<source src="./public/assets/files/<?php echo $video['nom_video'] ?>" type="video/mp4">
				</video>
			</div>
			<h5 class="lote"> En savoir plus</h5>
			<h5 class="savoir"><i class="fa-solid fa-volume-high"></i> Ecouter l'audio</h5>
			
		</div>
				
		<?php } ?>
		
	</div>
<footer>
   <div class="bester">
   <h2>Contact</h2>
	<ul class="droite">
		<li><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Répondeur mobile : (+225) 0142222211</li>
		<p></p>
		<li><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;Répondeur mail : courrier@uvci.edu.ci</li>
		<p></p>
		<li><i class="fa-solid fa-envelopes-bulk"></i>&nbsp;&nbsp;Boîte Postale : 28 BP 536 Abidjan 28   -   Côte d'Ivoire</li>
		<p></p>
		<li><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Localisation : Abidjan Cocody Deux-Plateaux, rue K4(GPS : 5.357177, -4.001287)</li>
</ul>
</div>
<div class="faster">
    <h2>Liens Utiles</h2>
    <ul class="droit1">
    	<li>Scolarité</li>
    	<p></p>
    	<li>Campus</li>
    	<p></p>
    	<li>Bibliothèque Virtuelle</li>
    	<p></p>
    	<li>Site du Ministère (MESRS)</li>
    	<p></p>
    	<li>Demande de bourse</li>
    </ul>
  </div>
</footer>
</body>
</html>