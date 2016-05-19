<!doctype html>
<html>
	<head>
	<?php 
		if (isset($_GET['style'])){
			if ($_GET['style'] != true){
				$cssSrc="css/style.css";
				$back="page4.php";
			}else{
				$cssSrc="css/inverse.css";
				$back="page4.php?style=true";
			}
		}else {
			$cssSrc="css/style.css";
			$back="page4.php";
		}
		
	?>
	
	<?php include('_database.php'); ?>
	
	<?php include('_head.php'); ?>
	</head>
	<body style="background-color:<?php if (isset( $_POST['color'])){echo $_POST['color'];} ?>">
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
			<?php
				if (isset($_GET['style'])){
					if ($_POST['color']=='#000000' && $_GET['style'] != true){
						$color="white";
					}
				}
			?>
	
			<div id="DW">
				<?php		
				
					// dans objet $db, j'appelle la methode query
					$reponse = $db->query('Select * FROM profile');
					$stop = "0";
					//on transforme en tableau
					$resultQuery = $reponse->fetchAll();
					foreach($resultQuery as $result){
						if (isset($_POST['userEmail'])){
							if ($_POST['userEmail']==$result['email']){
								echo 'Cette adresse email est utilise.';
								$_POST['userEmail']="";
								$stop="1";
							}
						}
					}
					
					if ($stop!="1"){
					
						$request = "INSERT INTO `u665233453_base`.`profile` (`id`, `email`, `pass`, `name`, `firstname`, `age`, `birth`, `sexe`, `species`, `adress`)".
						" VALUES (NULL, '".$_POST['userEmail']."','".md5($_POST['pass'])."', '".$_POST['userName']."', '".$_POST['userFirstName'].
						"', '".$_POST['userAge']."', '".$_POST['userBirthday']."', '".$_POST['sexe']."', '".$_POST['userSpecie']."', '".$_POST['userAdress']."')";
						
						// echo "<br>".$request;
						
						try{
							$db->query($request);
						}catch(\Exception $e){
							echo $e->getMessage();
						}catch(\PDOException $ex){
							echo $ex->getMessage();
						}
					}
					
					$len=strlen($_POST['pass']);				
					if ($_POST['pass']!="" && $_POST['userEmail']!=""){
						$display="block";
					}else{
						$display="none";
					}
					
					if ($len < "5"){
						$display ="none";
					}
					
				?>
				
				<div style="display:<?php echo $display ?>">
					<?php 
						if (isset($_POST['userFirstName'])){
							if( $_POST['userFirstName']=="" and $_POST['userName']==""){
								echo "Vous n'avez renseigne ni de nom ni de prenom.<br>";
							}elseif ( $_POST['userFirstName']=="" and $_POST['userName']!=""){
								echo "Bonjour M./Mme " . $_POST['userName'].".<br>";
							}elseif ( $_POST['userFirstName']!="" and $_POST['userName']==""){
								echo "Salut " . $_POST['userFirstName'] . " !<br>";
							}else {
								echo 'Bonjour ' . $_POST['userFirstName'] .' '. $_POST['userName'] . ".<br>";
							}
						}
					?>
					
					<?php 
						if (isset($_POST['userAge'])){
							if ($_POST['userAge']=="" and $_POST['userBirthday']==""){
								echo "Vous n'avez entre ni age ni date de naissance.<br>";
							}elseif ($_POST['userAge']!="" and $_POST['userBirthday']==""){
								echo "Vous avez ".$_POST['userAge']." ans.<br>";
							}elseif ($_POST['userAge']=="" and $_POST['userBirthday']!=""){
								echo "Vous etes ne le ".$_POST['userBirthday'].".<br>";
							}else{
								echo 'Vous avez '. $_POST['userAge'] .' ans'. ' et vous etes ne le '. $_POST['userBirthday']. '.<br>';
							}
						}
					?>
					
					<?php 
						if (isset ($_POST['sexe'])){
							if ($_POST['sexe']=="sexeM")
							{
								echo 'Vous etes un homme.<br>';
							}
							elseif ($_POST['sexe']=="sexeF")
							{
								echo 'Vous etes une femme.<br>';
							}elseif ($_POST['sexe']=="A")
							{
								echo 'Vous etes de sexe indetermine.<br>';
							}else{
								echo "Vous n'avez pas specifie de sexe.<br>";
							}
						}
						?>
					
					<?php 
						if (isset ($_POST['esp'])){
							if ($_POST['esp']=="human")
							{
								echo 'Vous etes humain.<br>';
							}elseif ($_POST['esp']=="nonHuman")
							{
								echo 'Vous etes '. $_POST['userSpecie'].'.<br>';
							}else{
								echo "Vous n'avez pas specifie d'espece.<br>";
							}
						}
					?>
					
					<?php 
						if (isset($_POST['userAdress'])){
							if ($_POST['userAdress']==""){
								echo "Vous n'avez pas entre d'adresse.<br>";
							}else{
								echo 'Vous habite le '. $_POST['userAdress']. '.<br>';
							}	
						}
					?>
				</div>
				
				<?php 
				
					if ($len < "5"){
						$_POST['pass']="";
					}
					
					if ($_POST['userEmail']=="" && $stop!="1"){
						echo "Vous n'avez pas d'adresse email.<br>";
						$stop="block";
					}elseif ($_POST['userEmail']!="" && $stop!="1"){
					echo 'Votre adresse email est ' . $_POST['userEmail'].".<br>";
					}
					
					if ($_POST['pass']=="" && $stop!="1"){
						echo "Vous n'avez pas de mot de passe ou il fait moins de 5 caractere.";
						$stop="block";
					}elseif ($_POST['pass']!="" && $stop!="1"){
					echo 'Votre mot de passe est ' . $_POST['pass'].".";
					}
					
					
				?>
				<br>
				
				<form action="<?php echo $back ?>" method="POST">
					<div style="text-align:center;">
						<input type="submit" value="Retour"/>
					</div>
				</form>
			</div>
		</div>
	<?php include('_footer.php'); ?>
	</body>
</html>