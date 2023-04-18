<!DOCTYPE html>
<html>
    <head>
        <title>Processamento de Dados do Formulario</title>
    </head>
    <body>
        <h1>Processamento de Dados do Formulario</h1>
    <?php
    if <$_SERVER["REQUEST_METHOD"] == "GET") {
        $nome = $_GET["nome"];
        $mensagem = $_GET["mensagem"]
        $opcao1 = isset($_GET["checkbox"]) ? "opção 1 selecionada" : "Opção 1 não selecionada"
        $opcao2 = $_GET["radio"] == "opcao1" ? "opção 2 selecionada" : "Opção 2 não selecionada"
        $selecao = $_GET["selecao"]

        echo "<p>Nome: $nome</p>";
        echo "<P>Mensagem: $mensagem</p>"
        echo "<p>$opcao1</p>"
        echo "<p>$opcao2</p>"
        echo "<p>seleção: $selecao"
    }
    ?>
    </body>
</html>