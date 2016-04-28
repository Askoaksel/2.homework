<?php

if(isset($_GET["nimi"])){
	$name = $_GET["nimi"];
	
	if(!empty($_GET["nimi"])){
		echo "Sisestatud nimi ".$name;
	}else{
		echo "Nimi on tühi";
	}
	
	
}


?>

<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8" />
	<title>Harjutus15</title>
	</head>
	<body>
	<form method="get">
	<div>
		<label>
	Nimi <em><abbr title= "kohustuslik väli">*</abbr></em><input type="text" name="nimi" required="required" size="50" maxlength="100" />
		</label>
	</div>
	<div>
		<label>
	Sisesta e-post<em><abbr title= "kohustuslik väli">*</abbr></em><input type="email" name="email" required="required"  />
		</label>
	</div>

	<legend>Vali pääsme tüüp</legend>

	<div>
		<label>
		pressipääse<input type="radio" name="prod" value="1"/>
		</label>
			<label>
		VIP pääse<input type="radio" name="prod" value="1"/>
		</label>
		<label>
		korraldaja pääse<input type="radio" name="prod" value="1"/>
		</label>
	</div>

    	<div>
		<label>
	<input type= "submit" name="Saada tellimus" value="Saada tellimus" />
		</label>
	</div>


</body>
</html>
