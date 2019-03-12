<?php

try 
{
	//connexion à la base de donnée
	require('connexion.php');


	//+--------------------------------------------------------+
	//|			Creation de la fonction de sécurisation		   |
	//+--------------------------------------------------------+


	//extract($_POST);





	function Securite($info)
	{
		$info = trim($info);
		$info = stripcslashes($info);
		$info = strip_tags($info);
		return $info;

	}
	if (isset($_POST['save']))
	 {
	
	$prenom = Securite($_POST['prenom']);
	//echo $nom;
	$nom = Securite($_POST['nom']);
	$adresse = Securite($_POST['adresse']);
	$PROFESSION = Securite($_POST['PROFESSION']);

	
	$requete = $conect->prepare('INSERT INTO personne(PRENOM, NOM, ADRESSE, PROFESSION ) VALUES(?,?,?,?,?)');
	$requete->execute(array($prenom, $nom, $adresse, $PROFESSION));

	if ($requete) {

		echo "reussi";		# code...
	}



	
	}
	/*echo $_POST['nom'];
	echo $_POST['prenom'];
	echo $_POST['adresse'];
	echo $_POST['PROFESSION'];*/
} catch (PDOException $e) 
{
	echo 'Erreur'. $e->getMessage;
	echo "Erreur lors de la connexion a la base de donnees";
	//echo 'Erreur' .$e->getMessage;
}



/*$requete->bindParam(':prenom', $prenom);
	$requete->bindParam(':nom', $nom);
	$requete->bindParam(':adresse', $adresse);
	$requete->bindParam(':prenom', $PROFESSION);*/


?>


