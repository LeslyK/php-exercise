<?DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>page php</title>
</head>
<body>
	<form action="user.php" method="POST">
		<label for="name">Nom</label>
		<input type="text" name="name">
		<label for="firstName">Prenom</label>
		<input type="text" name="firstName">
		<input type="submit" value="envouer">
	</form>
	<?php

	echo $_POST["name"];
	echo $_POST["firstName"];
	?>
 </body>
</html>