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
				Page 3
			</div>
			<div id="txt">
				A part à faire des tests sur le style du texte. Je vais envie de voire l'effet sur plusieurs lignes, donc discutons de tout et de rien. blablablabla De tout et de rien blablablabla. Comment ça cette blague n'est pas drôle ? Vous êtes sans humour.
			</div>
			<div id="new" style="font-size:50px;text-align:center;display:none">
				Magie !
			</div>
			
			<div>
				<table id="banniere">
					<tr>
						<td>
							<div id="banniere">
								Une banniere !
							</div>
						</td>
						<td>
							<div id="banniere">
								Une autre !
								<div id="banniere">
									Une autre dans une autre !
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="banniere">
								Une deuxième ligne
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="banniere">
								D'autre
							</div>
						</td>
						<td>
							<div id="banniere">
								une nouvelle
								<div id="banniere">
									&hearts;
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="banniere">
								&clubs;
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div style="text-align:center">
				<input id="changeBackground" type="button" value="?"/>
			</div>
			
			<div style="text-align:center">
				<input id="back" type="button" value="Abracadabra" style="display:none"/>
			</div>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>