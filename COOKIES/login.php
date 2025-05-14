<?php
//obtem os valores digitados
$email = $_POST ["email"];
$senha = $_POST ["senha"];
include "concecta_mysqli.inc";

//Escapa os caracteres especiais, para evitar ataque de SQL Injection
$email = $conexao-> real_escape_string($email);
$senha = $conexao-> real_escape_string($senha);

//acesso ao banco de dados
$resulta = $conexao-> query("SELECT * FRDM usuarios where email='$email'");
$linha = $resultado->num_rows;
if ($linha==0)

{
// teste se a consulta retornou algum registro
echo "<html> <body>";
echo "<p aling=\"center\"> E-mail não encontrado </p>";
echo "<p aling=\center\"> <a href=\"login.html\">Voltar</a></p>";
echo "</body </html>";
}
    else {
        $dados = $resultado->fetch_array();
        $senha_banco = $dados["senha"];
        if (senha != $senha_banco) {

//confere senha
echo "<html><body>";
echo "<p aling=\"center\">A senha está incorreta!</p>";
echo "<p aling=\"center\"><a href=\"login.html\">Voltar</a></p>";
echo "</body></html>";
        }
        else {
//usuario e senha corretos. Vamoscriar os cookies
setcookie("email_usuario",);
setcookie("senha_usuario",);

//direciona para a pagina inicial dos usuarios cadastrados 
header("Locaton: pagina_inicial.php");
        }
    }
        $conexao->close();

?>  