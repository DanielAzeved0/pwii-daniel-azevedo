<html>
    <head>
        <title> form teste </title>
</head>
<body>
    <form action= "form.php" method="get">
        Digite algo: <input type= "text" name= "formulario"> <br>
        <input type="submit">
</form>

<?php
    
    echo "Você digitou:", $_GET["formulario"], "<br>";
    ?>
    </body>
    </html>