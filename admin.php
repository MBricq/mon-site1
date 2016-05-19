<?php include('_database.php'); ?>

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
	<?php include('_navLogout.php'); ?>
		<div id="body">		
			<div id="intro">
				Espace connecte
			</div>
			
			<?php 
				// dans objet $db, j'appelle la methode query
				$reponse = $db->query('Select * FROM profile');
				
				//on transforme en tableau
				$resultQuery = $reponse->fetchAll();
				
				
				//affiche les resultats
				echo '<div style="font-size:30px">Admin :</div>';
				foreach($resultQuery as $result){
					echo '<br><br>';
					echo '<div id="admin">';				
					echo '<div style="font-size:23px">Compte '.$result['id'].' :</div><span style="font-size:20px"> - Nom : </span>'.$result['name'];
					echo '<br><span style="font-size:20px"> - Prenom : </span>'.$result['firstname'];
					echo '<br><span style="font-size:20px"> - Age : </span>'.$result['age'];
					echo '<br><span style="font-size:20px"> - Date de naissance : </span>'.$result['birth'];
					echo '<br><span style="font-size:20px"> - Sexe : </span>'.$result['sexe'];
					echo '<br><span style="font-size:20px"> - Espece : </span>'.$result['species'];
					echo '<br><span style="font-size:20px"> - Adresse : </span>'.$result['adress'];
					echo '<br><span style="font-size:20px"> - Email : </span>'.$result['email'];
					echo '</div>';

				}
			?>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>