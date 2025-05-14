<?php 
    $destinatario = "Daniel.azevedo081205@gmial.com.br";
    $mensagem = "<front color=\"#0000FF\">Teste<\font>";
    mail($destinatario, "Teste", mensagem, "Content-Type: text/html");
?>