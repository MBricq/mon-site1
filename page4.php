<!doctype html>
<html>
	<head>
	<?php 
		if (isset($_GET['style'])){
			if ($_GET['style'] != true){
				$cssSrc="css/style.css";
				$formPage5="page5.php";
			}else{
				$cssSrc="css/inverse.css";
				$formPage5="page5.php?style=true";
			}
		}else {
			$cssSrc="css/style.css";
			$formPage5="page5.php";
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
				<div>Inscription</div>				
			</div>
			
			<form action="<?php echo $formPage5?>" method="POST">
				<table id="DW">
					<tbody>
						<!-- Une nouvelle ligne -->
						<tr>
							<!-- Une nouvelle colonne -->
							<td>Votre nom :</td>
							<td> <input type="text" name="userName" placeholder="NOM"/> </td>
						</tr>
						
						<tr>
							<td>Votre prenom :</td>
							<td> <input type="text" name="userFirstName" placeholder="Prenom"/> </td>
						</tr>
						
						<tr>
							<td>Votre age :</td>
							<td> <input type="number" min="1" name="userAge" placeholder="10"/> </td>
						</tr>
						
						<tr>
							<td>Votre date de naissance :</td>
							<td> <input type="text" id="datepicker"> </td>
						</tr>
						
						<tr>
							<td>Votre sexe :</td>
							<td> <input type="radio" name="sexe" value="sexeM"/>M</td>
							<td> <input type="radio" name="sexe" value="sexeF"/>F</td>
							<td> <input type="radio" name="sexe" value="A"/>Autre</td>
						</tr>
						
						<tr>
							<td>Votre espece :</td>
							<td> <input type="radio" name="esp" value="human"/>Humain</td>
							<td> <input type="radio" name="esp" value="nonHuman"/>Autre. Si oui laquelle ?</td>
							<td> <input type="text"  placeholder="Sontarien" name="userSpecie"/> </td>
						</tr>
						
						<tr>
							<td>Votre adresse :</td>
							<td> <input type="text" name="userAdress"  placeholder="11 rue Truc, Ville, Pays"/> </td>
						</tr>
						
						<tr>
							<td>Votre adresse email : <span style="color:red">*</span></td>
							<td> <input type="email" name="userEmail" placeholder="exemple@exem.ex"/> </td>
						</tr>
						
						<tr>
							<td>Votre couleur prefere :</td>
							<td> <input type="color" name="color" placeholder="Couleur"/> </td>
						</tr>
						
						<tr>
							<td>Votre mot de passe : <span style="color:red">*</span></td>
							<td> <input type="password" placeholder="********" name="pass"/> </td>
						</tr>
						
						<tr>
							<td></td>
							<td> 
								<div style="text-align:center;">
									<input type="image" src="img/finish.png" title="J'ai fini !" alt="J'ai fini !" id="tardis"/> 
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
			<div style="text-align:justify">
				<span style="color:red">*</span>
				<span> : champs obligatoires</span>
			</div>
			<div>
				<table id="banniere">
					<tr>
						<td>
							<div id="banniere">
								Voici en gros ce qui vous attend, si vous etes accepte.
								<iframe width="560" height="315" src="https://www.youtube.com/embed/fi3nJBlJs48" frameborder="0" allowfullscreen></iframe>
							</div>
							<div>
								Dites vous que ca peut-etre dangereux.
							</div>
						</td>
						<td>
							<div id="banniere">
								L'employeur change de visage parfois.
								<iframe width="560" height="315" src="https://www.youtube.com/embed/dIawFeVDa6k" frameborder="0" allowfullscreen></iframe>
							</div>
							<div>
								A gauche et a droite c'est la meme personne.
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>