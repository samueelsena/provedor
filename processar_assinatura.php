<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Processamento de Assinatura</title>
</head>
<body>
    <h1>Processamento de Assinatura</h1>

    <?php
    // Verifica se os dados do formulário foram enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores enviados pelo formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        // Exibe os dados recebidos
        echo "<p>Obrigado por se inscrever na nossa newsletter!</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";

        // Aqui você pode adicionar código para salvar os dados em um banco de dados ou realizar outras ações necessárias.
    } else {
        // Se os dados não foram enviados via POST, exibe uma mensagem de erro
        echo "<p>Erro: Não foi possível processar a assinatura.</p>";
    }
    ?>
</body>
</html>
