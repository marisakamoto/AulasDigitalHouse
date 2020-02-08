<?php
     echo '<pre>';
    var_dump($_POST);
    $nome=$_POST["nomeCliente"];
    $email=$_POST["emailCliente"];
    $telefone = $_POST["telefoneCliente"];
echo "<h1> Nome: $nome</h1>";  
echo "<h1> Email: $email</h1>";  
echo "<h1> Telefone: $telefone</h1>";  



?>