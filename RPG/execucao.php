<?php

require_once("modelo/Combatente.php");
require_once("modelo/Curandeiro.php");
require_once("modelo/Mago.php");
require_once("modelo/Poder.php");

$p1 = new Poder("Recupera energia", 0);
$p2 = new Poder("Recupera energia super", 20);
$p3 = new Poder("Golpe normal", 0);
$p4 = new Poder("Golpe especial", 15);

$mago1 = new Curandeiro("Orivaldo Jacinto", $p1, 400);
$mago2 = new Curandeiro("Clovis McLovin", $p2, 500);
$mago3 = new Combatente("Florência das Dores", $p3, 350);
$mago4 = new Combatente("Sherolaine Shekira Carimbo", $p4, 600);

echo $mago1->lancarPoder();
echo $mago2->lancarPoder();
echo $mago3->lancarPoder();
echo $mago4->lancarPoder();