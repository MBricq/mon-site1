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
				Là je vais mettre les trucs.
			</div>
			<div>
				<div>
					<img src="img/pasteque.jpg"; alt="Une pasteque" title="Une pasteque" style="height:250px;width:auto;">
				</div>
				<div id="txt">
					Une image de pasteque, c'est forcément bien, voire génial !
				</div>
				<div>
					<input type="button" onclick="clickMe()" value="Cliqué !"/>
				</div>
				<div>
					<input type="button" onclick="sayMyName('inconnu')" value="Bonjour"/>
				</div>
				
				<br>
				
				<div>
					<input id="bas" type="button" value="&#8595;"/>
				</div>
				
				<div id="square">
					Boîte mystère !
				</div>
				
				<div>
					<input id="haut" type="button" value="&#8593;" style="display:none"/>
				</div>
			</div>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>