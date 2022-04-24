
<?php
/**
* Esta función envía un saludo
*@return Saludo devuelve un string con el saludo completo.
*@param string $nombre nombre a quién saludar.
*@autor Daniel De Paula Muñoz
*@version 7.4
*{@internal Esta función muestra un saludo completo para el nombre específico}
*/

   function saludar($nombre){
	$saludo="Hola $nombre";
	return $saludo;
   }
/**
* Esta función hace una suma de dos números
*@return Resultado devuelve el resultado de la suma.
*@param int $num1 primer número a sumar
*@param int $num2 segundo número a sumar
*@autor Daniel De Paula Muñoz
*@version 7.4
*{@internal Esta función suma dos números pasados por parámetros}
*/
   function sumar($num1, $num2){
	$resultado = $num1 + $num2;
	return $resultado;
   }
?>
