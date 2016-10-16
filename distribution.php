<?php
require_once "Distributeur.php";
require_once "Boisson.php";

$distributeur = new Distributeur();

echo $distributeur->countBoissonsByType();
$boisson = $_POST["boisson"];
$taille = $_POST["taille"];

echo $boisson;
echo $taille;
?>