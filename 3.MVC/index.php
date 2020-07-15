<?php

#index: Mostrara la salida de las vistas al usuario y tambien enviara las distintas acciones que el usuario
#envie al controlador

#requiere() Establece que el codigo invocado es requerido, es obligatorio para el funcionamiento del programa. 

#requiere_once () Es lo mismo que requiere. Solo que este impide la carga de un mismo archivo mas de una vez

#Si requerimos el codigo mas de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases

require_once "controladores/controller.php"; # Pedirlo solo 1 vez
require_once "modelos/model.php";

$mvc = new mvcController();
$mvc -> plantilla();
?>