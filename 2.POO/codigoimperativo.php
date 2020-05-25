<?php

#Codigo imperativo o spaguetti
$autoMovil1 = (object)["marca"=>"Toyota","modelo"=>"Corolla"];
$autoMovil2 = (object)["marca"=>"Hyundai","modelo"=>"Accent Vission"];

function mostrar ($automovil)
{
	echo "<p>Hola soy un $automovil->marca, modelo $automovil->modelo.</p>";
}

mostrar($autoMovil1);
mostrar($autoMovil2);

?>