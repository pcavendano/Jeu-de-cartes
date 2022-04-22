<?php
$langages = array("HTML", "CSS", "JavaScript", "PHP");
$langages = ["HTML", "CSS", "JavaScript", "PHP"];
$liste = array();
$liste = [];
echo count($langages);
$langages[2] = "TypeScript";
$langages[] = "Python";
echo intdiv(20, 6); // affiche 3
echo 20%6; // affiche 2

$valInit=0;
$valFin=10;
define('n','1');
for ($compteur = $valInit; $compteur <= $valFin; $compteur = $compteur + n) {
	echo 'hola';
}

var_dump($valInit);
$nb = rand(-10, 10);
if ($nb > 0) $nb *= 10;

$nb1 = $nb > 0 ? $nb * 10 : $nb / 10;
$nom = isset($nomSaisi) ? $nomSaisi : "";
$nom = $nomSaisi ?? "inconnu";
echo "Nom ".$nom;

echo("<p>Jeu de cartes</p>");

?>