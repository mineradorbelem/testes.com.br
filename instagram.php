<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
include("instagram/Instagram.php");

$instagram = new Instagram();

$valor = $instagram->getUserRecent("308571444");

$var = json_decode($valor,1);

//print_r($var["data"] );

foreach($var["data"] as $img) {
	
	$imagem = ($img["images"]["low_resolution"]["url"]);
	$legenda = ($img["caption"]["text"]);	
	
	echo "<img src=\"$imagem\"> $legenda<br><br>";
	//print_r($img["caption"]);

	
}

?>