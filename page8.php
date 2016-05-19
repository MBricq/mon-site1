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
				Page test
			</div>
			<table style="padding:5px;margin:3px auto auto;background-color:#ffcc99;border: 1px solid black;border-collapse: separate;border-spacing:5px">
				<tr>
					<td>
						<input id="charger" type="button" value="Load"/>
					</td>
				</tr>
				<tr>
					<td style="border : 3px dotted black">
						<input id="Width" type="text" placeholder="Width"/>
						<br>
						<input id="Height" type="text" placeholder="Height"/>
						<br>
						<input id="Valider" type="button" value="Valider"/>
					</td>
					<td>
						<img id="page8Img" style="width:64px;height:64px" src="img/1.png" alt="Image 1" title="Image 1">
						<img id="page8Img2" style="width:64px;height:64px" src="img/1.png" alt="Image 2" title="Image 2">
					</td>
				</tr>
			</table>
			<div id="winPage8" style="display:none">
				GAGNE
			</div>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>