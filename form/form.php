<?php
    // $_GET obtem dado do formulario enviado via GET
    // $_POST obtem dado do formulario enviado via POST
    $nome = $_GET['nome'];
    $idade = $_POST['idade'];
    echo "<h1>$nome</h1>";
    echo "<h1>$idade</h1>";
?>