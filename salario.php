<?php declare (strict_types=1); ?>
<!DOCTYPE html>
<html>

    <header> <title> Aula 3 - PHP </title> </header>  

    <body>

        <form action= "" method="POST">

            <label for = "salario">Salário</label>
            <input type = "text" name="salario" id="salario"> <br>
            <label for = "porcento">Imposto</label>
            <input type = "text" name="porcento" id="porcento"> <br>
            <button type = "submit"> Enviar</button>

        </form>

        <?php  
            require 'funcoes.php';

            if ( count($_POST)!=0){
            $resultado = calculaSalario($_POST["salario"],$_POST["porcento"]);
            echo "O salário final será $resultado reais";
            }
    

        ?>
        
    </body>


</html>  

