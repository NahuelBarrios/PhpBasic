<?php

#Empquetamos el codigo de POO en *clases: Es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento,estado e identidad.

class Automovil 
{
	#propiedades: son las caracteristicas que puede tener un objeto

	public $marca; #Son accedidas de cualquier lado sin ningun tipo de restriccion, usar este el mas comun
	#private $marca: No puede ser llamada en otro lado, sino solo en esta funcion
	public $modelo;

	#Metodo: es el algoritmo asociado a un objeto que indica la capacidad del objeto.
	#La diferencia entre metodo y funcion es que llamamos metodo a las funciones de una clase(en la POO), mietrnas que llamamos funciones a los algoritmos de la programacion estructurada.
	public function  mostrar()
	{
		echo "<p>Hola! soy un $this->marca,modelo $this->modelo</p>"; #no hace falta ponerle los $ a las variables llamadas.

	}
}

#OBJETO: Es una entidad provista de metodos o mensajes a los cuales responde propiedades con valores concretos.
$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Fiat";
$b -> modelo = "404";
$b -> mostrar();

$c = new Automovil();
$c -> marca = "Hyundai";
$c -> modelo = "Accent Vission";
$c -> mostrar();


?>