<!DOCTYPE htmlu>
<html>
<head>
	<title>page php</title>
</head>
<body>
<?php
	if(!$_POST["civilit"]||!$_POST["name"]||!$_POST["firstName"]){
		echo '<form action="index.php" method="POST">
			<select name="civilit">
				<option value="Mr">Monsieur</option>
				<option value="Mlle">Madame</option>
			<select>
				<label for="name">Nom</label>
				<input type="text" name="name">
				<label for="firstName">Prenom</label>
				<input type="text" name="firstName">
				<label for="fichier">fichier</label>
				<input type="file" name="file">
				<input type="submit" value="envouer">
			</form>';
	}
	else{	
		echo $_POST["civilit"]." ".$_POST["name"]." ".$_POST["firstName"]." ".$_POST["file"];
		if (explode(".",$_POST["file"])[1]==="pdf") {
			echo "c'est un pdf";
		}
	}
?>
 </body>
</html>