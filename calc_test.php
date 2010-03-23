<pre><?php

	include 'calc.php';
	
	if ( somar(5, 2) == 5 + 2 )
		echo 'ok<br>';
	else
		echo 'Erro <br>';
		
	
	if ( subtrair (5, 2) == 5 - 2 )
		echo 'ok<br>';
	else
		echo 'Erro<br>';
		
		
	if ( dividir (5, 2) == 5 / 2 )
		echo 'ok<br>';
	else
		echo 'Erro<br>';
		
	
	if ( multiplicar (5, 2 ) == 5 * 2 )
		echo 'ok<br>';
	else
		echo 'Erro<br>';	
	
	
	if ( somar(5, multiplicar(2, 3)) == 5 + (2 * 3) )
		echo 'ok<br>';
	else
		echo 'Erro<br>';
		
	echo '5 + 2= ' . somar(5, 2) 		. '<br>';
	echo '5 - 2= ' . subtrair(5,2) 		. '<br>';
	echo '5 / 2= ' .	dividir(5,2) 		. '<br>';
	echo '5 * 2= ' . multiplicar(5,2) 	. '<br>';
	
	echo '5 + 2 * 3= ' 		. somar(5,multiplicar(2,3)) 				. '<br>';
	echo '8 - 3 + 5= ' 		. somar(subtrair(8,3),5)					. '<br>';
	echo '9 / 3 + 4 * 2= '	. somar(dividir (9,3), multiplicar(4,2)) 	. '<br>';
	
	

?></pre>