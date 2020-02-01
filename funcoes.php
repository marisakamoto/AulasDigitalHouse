<?php 
 function calculaSalario ($salario, $porcento){
    $imposto=0;
    $imposto = $salario * $porcento / 100;
    $salario = $salario - $imposto;
    return  $salario;
}
?>