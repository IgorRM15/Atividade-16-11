<?php
include_once __DIR__ ."/../vendor/autoload.php";
use App\model\Cliente;
$tempCliente = new Cliente();
$tempCliente->nome = "Igor";
$tempCliente->saldo = 100;

echo "<br/>Nome do Cliente : ".$tempCliente->nome;
echo "<br/>Nome do Saldo : ".$tempCliente->saldo;

?>
