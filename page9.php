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
			<table style="padding:5px;margin:3px auto auto;background-color:#ffaa99;border: 1px solid black;border-collapse: separate;border-spacing:5px">
				<tr>
					<td>
					<input id="XPage9" type="text" placeholder="x"/>
					<input id="YPage9" type="text" placeholder="y"/>
					<input id="ValiderPage9" type="button" value="Valider"/>
					</td>
				</tr>
			</table>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>