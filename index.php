<?php
if (isset($_COOKIE["lang"])) {
    include "compara.inc";
     
} else{


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Bimestral</title>


</head>

<body>
    <div class="header">
        <br>
        <center>
            <h1>Bem vindo ao Site Web Design em Foco</h1>
        </center>
    </div>
    <br><br>
    <center><p>Escolha o idioma para entrar</p></center>
    <center><div class="flags">
        <a href="idioma.php?lang=ingles"><img class="flag" src="https://flagcdn.com/w320/gb.png" alt="Inglês"
                width="70"></a>
        <a href="idioma.php?lang=portugues"><img class="flag" src="https://flagcdn.com/w320/br.png" alt="Português"
                width="70"></a>
        <a href="idioma.php?lang=espanhol"><img class="flag" src="https://flagcdn.com/w320/es.png" alt="Espanhol"
                width="70"></a>
    </div>
</center>
</body> 
</html>

<?php
}
?>