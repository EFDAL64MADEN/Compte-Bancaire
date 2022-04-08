<?php

include("Client.php");
include("Compte.php");

$client1 = new Client("DUPONT", "Pierre", "1981-05-19", "Lyon");
$client2 = new Client("BLONDEAUX", "Richard", "1972-09-27", "Paris");
$client3 = new Client("CHAZAL", "Claire", "1956-12-01", "Thiers");

$compte1 = new Compte("1A728547G", 8546.26, "euros (€)", $client1);
$compte2 = new Compte("2V154786H", 6780.00, "euros (€)", $client2);
$compte3 = new Compte("8G125321S", 9147.58, "euros (€)", $client3);
$compte4 = new Compte("6B123548J", 2854.31, "euros (€)", $client2);
$compte5 = new Compte("2F071384P", 6548.98, "euros (€)", $client1);

echo $client1;
echo $compte2;

echo $client1->afficherComptes();

$compte1->virement($compte5, 500);
echo $compte1;
echo $compte5;

echo $compte3;
$compte3->setRetrait(60);
echo $compte3;

echo $compte4;
$compte4->setDepot(1500);
echo $compte4;

?>