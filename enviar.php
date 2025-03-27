<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $adolescente = $_POST['adolescente'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];

    $destinatario = "acampmjamis@gmail.com";
    $assunto = "Autorização para Acampamento";
    $mensagem = "
        <h2>Autorização para Acampamento</h2>
        <p><strong>Nome do responsável:</strong> $nome</p>
        <p><strong>CPF:</strong> $cpf</p>
        <p><strong>Nome do adolescente:</strong> $adolescente</p>
        <p><strong>RG:</strong> $rg</p>
        <p><strong>Telefone:</strong> $telefone</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@seusite.com\r\nReply-To: $destinatario";

    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
