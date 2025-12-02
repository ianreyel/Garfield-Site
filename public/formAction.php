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
        <h1>Sua Resposta</h1>

        <div id="mensagem-validacao">
            <p>Processando sua resposta...</p>
        </div>
        
        <a href="home.php" style="margin-top: 20px; display: inline-block;">Voltar</a>
    </main>

    <script>

        window.onload = function() {

            const params = new URLSearchParams(window.location.search);

            const resposta = params.get('amorGarfield');
            
            const mensagemEl = document.getElementById('mensagem-validacao');

            if (resposta === 'sim') {

                mensagemEl.innerHTML = "<h2>Oba!</h2><p>Somos todos amantes deste gato laranja gordinho.</p> <img src=\"../img/roda.gif\" alt=\"Garfield Rodando\">";
                mensagemEl.style.color = '#006400';
            } else if (resposta === 'nao') {

                mensagemEl.innerHTML = "<h2>Você não é bem vindo!</h2> <img src=\"../img/raiva.png\" alt=\"Garfield Bravo\" width=\"150\"> <p>Saia deste site imediatamente.</p>";
                mensagemEl.style.color = '#D8000C';
            } else {

                mensagemEl.innerHTML = "<h2>Ops!</h2><p>Parece que você não selecionou uma resposta válida.</p>";
            }
        }
    </script>
</body>
</html>