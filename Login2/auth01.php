<?php
	//print_r($_POST);
	
	$condicao = " Pwd = '" . $_POST["Pwd"] . "' ";
	$ultimo = array_pop($_POST);
	foreach( $_POST as $item => $valor ){
		echo $item . " => " . $valor . "<br>";
		if( $valor != '' ){
			$condicao .= " AND " . $item . " = '". $valor . "' ";
			}
		}
	echo " WHERE " . $condicao;
?>