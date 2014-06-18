<!doctype html>
<html lang="fr">
	<head>
		<title>User Country</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h1>User Country</h1>
		<?php
			$ip = '41.214.121.53';
			$data =  json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ip));
			echo "Votre pays: ". $data->geoplugin_countryName;
		?>
	</body>
</html>