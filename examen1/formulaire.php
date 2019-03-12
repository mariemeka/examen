<!-- <?php


?> -->

<! DOCTYPE html>
<html>
<head>
<title> Adresse client </title>
<META charset = "utf-8">
</head>
<body>
<center>
<h1> Remplisser les informations suivantes </h1>
<form method = "POST" action = "traitement.php" 
<fieldset>
 <legend>Vos informations</legend>
 <table >
<p>
<tr>
<th><label >Prenom </label></th>
<th><input type="text" id="prenom" name="prenom" required="*" ></th>	                			
</tr></p><p>
	                
<tr><th><label >Nom</label></th>
<th><input type="text" id="nom" name="nom" required="*" ></th></tr>
</tr></p><p"><tr><th><label>Adresse</label></th>
<th><input type="text" id="adresse" name="adresse" required="*" ></th></tr>
</p><p><tr><th><label>Code postal</label></th>
<th><input type="text" id="PROFESSION" name="PROFESSION" required="*" ></th></tr></p>
</table>
</fieldset>
<p><input type = "submit" value = "Enregistrer" id = "save" name="save" /></p> </form>
</center>
</body>
</html>

