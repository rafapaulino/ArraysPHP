<?php
//criando um array com o php
$bebidas = array('Coca-cola','Suco de laranja','Guaraná','Água','Suco de Acerola','Suco de uva');
 
echo '<pre>';
print_r($bebidas);
echo '</pre>';
 
//outra forma de criar um array com o php
$comida[0] = 'Pizza';
$comida[1] = 'Lazanha';
$comida[2] = 'Batata frita';
$comida[3] = 'Sorvete';
$comida[4] = 'Macarrão';
 
echo '<pre>';
print_r($comida);
echo '</pre>';

$enlatados[] = "Ervilha";
$enlatados[] = "Milho";
$enlatados[] = "Molho de tomate";

echo '<pre>';
print_r($enlatados);
echo '</pre>';

$mercado["nome"] = "Mercado php";
$mercado["dono"] = "Zezão do php";
$mercado["local"] = "Matrix";
$mercado["ano"] = 2013;

echo '<pre>';
print_r($mercado);
echo '</pre>';

$compras["Janeiro"]["Lavanderia"] = 12.50;
$compras["Janeiro"]["Cozinha"] = 60;
$compras["Janeiro"]["Acougue"] = 70;
$compras["Fevereiro"]["Lavanderia"] = 20;
$compras["Fevereiro"]["Cozinha"] = 90;
$compras["Janeiro"]["Acougue"] = 100;

echo '<pre>';
print_r($compras);
echo '</pre>';

$troco = array(0,20.5,60,"dono"=>"Zezão");

echo '<pre>';
print_r($troco);
echo '</pre>';

?>



