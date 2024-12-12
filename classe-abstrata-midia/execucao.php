<?php

//bagulho tá com problema

require_once("modelo/CD.php");
require_once("modelo/DVD.php");

$midia = new CD;
$midia->setNome("RHCP");
$midia->setPreco(5);
echo $midia;

$midia2 = new DVD;
$midia2->setNome("blablabla");
$midia2->setPreco(8.59);
echo $midia2;