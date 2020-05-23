<?php

#Las variables se inician con el $


#Variable Numerica
$numero = 5;
echo "Esta es una variable tipo Numero con el valor: $numero"; # Siempre que imprimamos una variable, ponerle el $ adelante. Puedo dejarle la variable adentro de la cadena de texto, no hace falta concatenar
echo "<br></br>";#Para hacer un salto de linea, es el mismo que html

#Variable texto
$texto = "cinco";
echo "Esta es una variblae tipo texto con el valor: $texto";
echo "<br></br>";

#Variable tipo booleana
$booleana = true;# true imprime 1, false imprime un espacio vacio.
echo "Esta es una variblae tipo booleana con el valor: $booleana";
echo "<br></br>";

#Variable tipo arreglo
$colores = array("rojo","azul","amarillo");
echo "Esta es una variblae tipo arreglo con el valor: $colores[0]";#Muestro el indice que desea. ej el 0 es el rojo
echo "<br></br>";

#Variable de arreglos con propiedad(Valor dentro de ese array)
$verduras = array("verdura1"=>"lechuga","verdura2"=>"pepino","verdura3"=>"calabaza"); # con => se le asigna un valor a un array
echo "Esta es una variblae tipo arreglo con propiedades con el valor: $verduras[verdura2]";
echo "<br></br>";

#Variable Objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];#Siempre que declaremos variables tipo objeto ponerle parentesis
echo "Esta es una variblae tipo objeto con el valor: $frutas->fruta2"; #mostrar con ->
echo "<br></br>";

?>
