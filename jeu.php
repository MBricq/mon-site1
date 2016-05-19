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
	<?php include('_nav.php'); ?>
		<div id="body">		
			<div id="intro">
				Jeu
			</div>
			
			 <div id="jeu">
				<div style="position:relative">
					<img id="souris" src="img/souris-d.png" alt="" title="La souris">
				</div>
				<div style="position:relative">
					<img id="mechant" src="img/mechant.gif" alt="" title="Le méchant">
				</div>
				<div style="margin-left:80px;margin-top:80px">
					<img id="cheese" src="img/cheese.png" alt="" title="Le fromage">
				</div>
			</div>
			 
			 <table id="control">
				 <tr>
					<td></td>
					<td>
						<input type="image" src="img/fleche_haut.png" title="Vers le haut" id="toUp"/> 
					</td>
				 </tr>
				 <tr>
					<td>
						<input type="image" src="img/fleche_gauche.png" title="Vers la gauche" id="toRight"/>
					</td>
					<td>
						<input type="image" src="img/fleche_bas.png" title="Vers le bas" id="toDown"/>
					</td>
					<td>
						<input type="image" src="img/fleche_droite.png" title="Vers la droite" id="toLeft"/>
					</td>
				 </tr>
			</table>
			<div style="color:red;text-align:center;font-size:150%">
				Vous pouvez utiliser les touches du clavier
			</div>
			 <?php 
				if (isset($_GET['win'])){
					if ($_GET['win']==true){
						echo '<div id="banniere" style="width:200px">'
						. '<form action="jeu.php?form=true&nbCoup='
						. $_GET['nbCoup']
						. '" method="POST">'
						. '<div><input type="text" placeholder="Pseudo" name="pseudo"></div>'
						. '<input type="submit" value="Fait !">'
						. "</form>"
						. '</div>';
					}
				}
			?>
			
			<?php 
				if (isset($_GET['form'])){
					$test=0;
					$lastScore=0;
					$idToDelete=0;
					$userScore = $_GET['nbCoup'];
					// dans objet $db, j'appelle la methode query
					$reponse = $db->query("SELECT * FROM score");
					$resultQuery = $reponse->fetchAll();
					foreach($resultQuery as $result){
						if($userScore<=$result['score']){
							//si on a fait un meilleur score, choisit le < de tous les > que notre score et range son id
							if ($lastScore<=$result['score']){
								$lastScore=$result['score'];
								$idToDelete=$result['id'];
							}
							$test=1;
						}
						
					}
					if ($test ==1){
						//efface l'ancien score grace a son id stocker
						$delete = "DELETE FROM `mon.site69`.`score` WHERE `score`.`id` = ".$idToDelete;
						try{
						$db->query($delete);
						}catch(\Exception $e){
							echo $e->getMessage();
						}catch(\PDOException $ex){
							echo $ex->getMessage();
						}
						
						//ajoute le nouveau score
						$request = "INSERT INTO `mon.site69`.`score` (`id`, `pseudo`, `score`) VALUES (NULL, '".$_POST['pseudo']."', '".$_GET['nbCoup']."')";
						echo "<br>".$request;
						try{
						$db->query($request);
						}catch(\Exception $e){
							echo $e->getMessage();
						}catch(\PDOException $ex){
							echo $ex->getMessage();
						}
						
						//range par ordre croissant
						$order = "SELECT * FROM `score` ORDER BY score,pseudo";
						$db->query($order);
					}
					header('Location: jeu.php?scoreAff=true');
				}
				
				if (isset($_GET['scoreAff'])){
					$reponse = $db->query("SELECT * FROM score");
					$resultQuery = $reponse->fetchAll();
					foreach($resultQuery as $result){
						echo '<table id="score">'
						. "<tr><td>Pseudo : ".$result['pseudo']."</td><td>Score : ".$result['score']."</td></tr>"
						. '</table>';
					}
					echo '<form action="jeu.php" method="POST" style="text-align:center">'
						. '<input type="submit" value="Retour !">'
						. "</form>";
				}
			?>
			
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>