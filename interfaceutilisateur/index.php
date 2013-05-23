<!DOCTYPE html>
<html>

	<head>
		<?php require_once("php/inc/head.inc.php"); ?>
		<title>Prototype jetable</title>
	</head>

	<body>
		<div class="container">
			<!-- Barre de navigation -->
			<?php require_once("php/inc/navigation.inc.php"); ?>
			<div class="row-fluid">
					<!-- Corps -->
					<?php require_once("php/inc/corps.inc.php"); ?>
			</div>
				<!-- Volet d'édition -->
			<!-- 	<?php require_once("php/inc/voletedit.inc.php"); ?> -->
				<!-- Barre latérale gauche -->
				<?php require_once("php/inc/voletgauche.inc.php"); ?>
				<!-- Barre latérale Droite -->
				<?php require_once("php/inc/voletdroite.inc.php"); ?>
		</div>
	</body>
</html>