<?php
$db = new PDO(
	"mysql:host=localhost;dbname=recenze;charset=utf8mb4",
	"root",
	"",
	array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	)
);

$cislo = $_GET["cislo"];

$dotaz = $db->prepare("SELECT * FROM rate ORDER BY datumcas DESC LIMIT $cislo, 5 ");
$dotaz->execute();

$vysledek = $dotaz->fetchAll();

echo json_encode($vysledek);

?>