<?DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>page php</title>
</head>
<body>
	<form action="user.php" method="GET">
		<label for="name">Nom</label>
		<input type="text" name="name">
		<label for="firstName">Prenom</label>
		<input type="text" name="firstName">
		<input type="submit" value="envouer">
	</form>
	<?php

	echo $_GET["name"];
	echo $_GET["firstName"];
	?>
 </body>
</html>