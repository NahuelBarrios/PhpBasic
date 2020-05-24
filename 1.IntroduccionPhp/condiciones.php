<?php

#Condiciones
$a = 11;
$b = 10;

if($a > $b)
{
	echo "a es mayor que b.<br>";
}
else if($a == $b)
{
	echo "a es igual a b.<br>";
}
else
{
	echo "a es menor que b.<br>";
}

#Switches
$dia = "sabado";

switch ($dia) {
	case 'sabado':
		echo "hoy se estudia C<br>";
		break;
		case 'viernes':
		echo "Hoy se descansa<br>";
		break;
		case 'domingo':
		echo "hoy se estudia php<br>";
		break;
}

#Cliclos

#While
$n = 1;
while ($n<=5)
{
	echo "$n<br>";
	$n++;
}

#Ciclo doWhile
$p=1;
do
{
	echo "$p<br>";
	$p++;
}while($p<=5);

#Cliclo For

for($i=0;$i<=5;$i++)
{
	echo "$i<br>";
}


?>