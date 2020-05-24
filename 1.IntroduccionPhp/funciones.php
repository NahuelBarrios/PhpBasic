<?php


#Funciones sin parametro
function saludo()
{
	echo "Hola.<br>";
}
saludo(); #Para ejecutarla hay que llamarla afuera para que imprima


#Funciones con parametro
function despedida ($adios)
{
	echo $adios."<br>"; #Se usa el punto para concatenar. en este caso es para que haga el salto de linea
}
despedida("Hasta pronto");


#Funciones con retorno
function retorno($retornar)
{
	return $retornar."<br>";
}
echo retorno("retornar");

?>