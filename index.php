<!doctype html>
<html>
	<head>
	<?php 
		if (isset($_GET['style'])){
			if ($_GET['style'] != true){
				$cssSrc="css/style.css";
			}else{
				$cssSrc="css/inverse.css";
			}
		}else {
			$cssSrc="css/style.css";
		}
	?>
	<?php include('_head.php'); ?>
	</head>
	<body id="nav">
	<?php 
		if (isset($_GET['style'])){
			if ($_GET['style'] != true){
				include('_nav.php');
			}else{
				include('_navInverse.php');
			}
		}else {
			include('_nav.php');
		}
	?>
		<div id="body">
			<div id="intro">
				Sur ce site Internet (mon premier) je vais mettre pleins de chose différentes.
			</div>
			<table>
				<tr>
					<td>
						<!-- image halo -->
						<img id="halo" src="img/halo.jpg" alt="Une image du jeu Halo 5" title="Promo Halo 5" style="width:75%;">
					</td>
					<td>
						<!-- image star wars -->
						<img id="SW" src="img/SW.jpg" alt="Une image du jeu Halo 5" title="Promo Battlefront" style="width:75%;display:none;">
					</td>
					<td>
						<div style="width:100%;vertical-align:top;text-align:center;">
							Par exemple cette image pour la promo de Halo 5, très belle pour un fond d'écran ! D'ailleurs elle donne vraiment envie d'acheter le jeu.
							Le trailer aussi donne envie de jouer.
						</div>
					</td>
					<td>
						<!-- video halo -->
						<iframe width="400" height="250" src="https://www.youtube.com/embed/SENJV2_XuLM" frameborder="0" allowfullscreen></iframe>
					</td>
				</tr>
			</table>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>