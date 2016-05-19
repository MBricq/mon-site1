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
				<!-- Un commentaire HTML -->
				<div>Connection</div>
				
			</div>
			
			<table id="DW">
				<tbody>
					<form action="interaction.php" method="POST">
					
						<?php
							if (isset($_GET['error'])){
								if ($_GET['error'] == true){
									echo '<span style="color:red">Erreur d' . "'authentification, veuillez recommencer!</span>";
								}
							}
							
							if (isset($_GET['logout'])){
								if ($_GET['logout'] == true){
									echo "<span>Vous etes bien deconnecte</span>";
								}
							}
							
							if (isset($_GET['style'])){
								if ($_GET['style'] == true){
									echo "<span>Bip Bip Bip Bip Bip Bip Bip Bip Bip Bip Bip Bip !</span>";
								}
							}
						?>
						
						<tr>
							<td>Votre adresse email:</td>
							<td> <input type="email" name="userEmail" placeholder="exemple@exem.ex"/> </td>
						</tr>
						
						<tr>
							<td>Votre mot de passe:</td>
							<td> <input type="password" name="pass" placeholder="Mot de passe"/> </td>
						</tr>
						
						<tr>
							<td></td>
							<td> <input type="submit" value="J'ai fini !"/> </td>
						</tr>
					</form>
				</tbody>
			</table>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>