<?php
function calcular($n1, $n2, $op){

switch ($op) {
	case 'a':
		$r = $n1 + $n2;
		break;
	
	case 's':
		$r = $n1 - $n2;
		break;

	case 'd':
		if ($n2 != 0) {
			$r = $n1 / $n2;
 		}
		break;
}	
	return $r;
}

echo calcular(2, 8.5, 'a') . '<br>';
echo calcular(2, 8.5, 's') . '<br>';
echo calcular(2, 8.5, 'd');

?>