<!DOCTYPE php>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação da Resposta</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <?php
    include '../php/connect.php'
    ?>
    <?php   include 'navbar.php' ?>
    <main>
        <form id="form-garfield" action="formAction.php" method="get" onsubmit="return validarForm()">
                
                <label>Você ama o Garfield?</label>
                
                <div>
                    <input type="radio" name="amorGarfield" value="sim" id="sim">
                    <label for="sim">Sim</label>
                    
                    <input type="radio" name="amorGarfield" value="nao" id="nao">
                    <label for="nao">Não</label>
                </div>

                <p id="form-erro"></p> 
                
                <button type="submit">Enviar Resposta</button>
            </form>
            <a href="home.php" style="margin-top: 20px; display: inline-block; text-decoration: none; color:#ff9d00;">Voltar</a>
    </main>

</body>
</html>