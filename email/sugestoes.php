<?php
$emial_destino="daniel.azevedo081205@gmail.com.br";

if(isset($_POST['nome']) && isset($_POST['avaliacao']) && isset($_POST['sugestoes']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $avaliacao = $_POST['avaliacao'];
        $sugestoes = $_POST['sugestoes'];
    }
else
    {
        ECHO "todos os campos desem ser preenchidos!";
    }

$mensagem = "Nome do usuário: $nome\n";
$mensagem = "E-mail: $email\n";
$mensagem = "Avaliações: $avaliacao\n";
$mensagem = "Sugestões: $sugestoes\n";
mail($email_destino, "Sugestões de usuário", $mensagem, "From:Contato@seusite.com.br", "-r contato@seusite.com.br");

echo "Sua mensagem foi enviada com sucesso!";

?>