<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Immo app</title>
</head>
<body style="background-color: antiquewhite">
<div style="position: fixed; left: 0px; top: 0px; width: 100%; height: 50px; background-color: lightskyblue">
    <div style="float: left;">
        <ul>
            <li style="padding-left: 5px; padding-right: 30px; float: left; display: inline-block">Accueil</li>
            <li style="padding-left: 5px; padding-right: 30px; float: left; display: inline-block">Locataires</li>
            <li style="padding-left: 5px; padding-right: 30px; float: left; display: inline-block">Immobiliers</li>
        </ul>
    </div>
</div>
<div style="position: fixed; top: 50px">
	<?php
		include 'db-settings.php';
		
		//execute the SQL query and return records
		$result = mysql_query("SELECT id, firstname, lastname, role FROM user");
				
		//fetch tha data from the database
		while ($row = mysql_fetch_array($result)) {
		   echo $row['id'] . " - " . $row['firstname'] . " - " . $row['lastname'] . " - " . $row['role'] . "<br>";
		}
		
	?>
	
	<form action="add-user.php">
		<input type="text" name="firstname" placeholder="Votre prenom" />
		<input type="phone" name="lastname" placeholder="Votre nom" />
		<select name="role">
			<option value="SIMPLE">Simple User</option>
			<option value="SUPER">Compte premium</option>
			<option value="ADMIN">Compte admin</option>
		</select>
		
		<input type="submit" value="Enregistrer" />
	</form>
</div>

</body>
</html>