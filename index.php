<?php
include('config.php');
if($_POST){
    if(isset($_POST['delete'])){
        $del = explode(':', $_POST['delete']);
        $del = trim($del[1]);
        $query = 'UPDATE ' . $tableName . ' SET deleted = "1" WHERE id = "' . $del . '";';
        mysqli_query($con, $query);
    }else {
        $query = 'INSERT INTO ' . $tableName . ' (nimi, email, vanus, tyyp) VALUES ("' . $_POST['nimi'] . '", "' . $_POST['email'] . '", "' . $_POST['vanus'] . '", "' . $_POST['prod'] . '");';
        mysqli_query($con, $query);
    }
}



?>

<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8" />
	<title>Harjutus15</title>
    <style>

        tbody td{
            border: solid 1px darkgray;
        }
        thead td{
            border: solid 1px black;
            background-color: gray;
        }

    </style>
	</head>
	<body>
	<form method="post" action="">
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
	<div>
		<label>
	Sisesta vanus<em><abbr title= "kohustuslik väli">*</abbr></em><input type="number" name="vanus" required="required"  />
		</label>
	</div>

	<legend>Vali pääsme tüüp</legend>

	<div>
		<label>
		pressipääse<input type="radio" name="prod" value="press"/>
		</label>
			<label>
		VIP pääse<input type="radio" name="prod" value="vip"/>
		</label>
		<label>
		korraldaja pääse<input type="radio" name="prod" value="korraldaja"/>
		</label>
	</div>

    	<div>
		<label>
	<input type= "submit" name="Saada tellimus" value="Saada tellimus" />
		</label>
	</div>
    </form>
    <div style="display:block;">
    <h2>Salvestatud andmed</h2>
        <form method="post" action="">
    <?php include('table.php'); ?>
        </form>
    </div>


</body>
</html>
