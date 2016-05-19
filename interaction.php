<?php include('_database.php'); ?>

<?php 
	// dans objet $db, j'appelle la methode query
	$reponse = $db->query('Select * FROM profile');
	//on transforme en tableau
	$resultQuery = $reponse->fetchAll();
	$inDb = "0";
	foreach($resultQuery as $result){
		if (isset($_POST['userEmail'])){
			if ($_POST['userEmail']==$result['email'] && md5($_POST['pass'])==$result['pass'] && $result['admin']=="1"){
				header('Location: admin.php');
				$inDb = "1";
			}elseif ($_POST['userEmail']==$result['email'] && md5($_POST['pass'])==$result['pass'] && $result['admin']!="1"){
				$location = "Location: page7.php?email=".$_POST['userEmail'];
				header($location);
				$inDb = "1";
			}
		}
	}
	if ($inDb=="0"){
		if ($_POST['pass']=="cool" && $_POST['userEmail']=="hum@hum.hum") {
			header('Location: page6.php?style=true');
		}else{
			header('Location: page6.php?error=true');
		}
	}
?>

