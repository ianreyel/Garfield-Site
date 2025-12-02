<!DOCTYPE php>
<html lang="pt-br">
<head>
    <?php   include 'navbar.php' ?>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <main>
        <?php include '../php/connect.php';
            if (isset($_SESSION['id'])) {
            	echo '<h2>Você ja esta logado.</h2>';
		        echo '<a href="../index.php" style="color:#ff9d00;text-decoration: none;">voltar</a>';
            } else {  
        ?>
        <div class="box">
            <form action="../php/new-user.php" method="post" autocomplete="off" class="sign-up-form">
                    <input type="text" name="username" minlength="4" class="input-field" autocomplete="off" required placeholder="Nome"/> <br>
                    <input type="email" name="email" minlength="4" class="input-field" autocomplete="off" required placeholder="Email"/> <br>
                    <input type="password" name="password" minlenght="4" maxlength="16" class="input-field" autocomplete="off" required placeholder="Senha"/> <br>
                    <input type="text" name="conteudo" placeholder="Insira uma Bio para que todos saibam o quanto você ama o Garfield" maxlength="100">
                    <input type="submit" value="Cadastrar-se" class="sign-btn">
            </form>
        </div>
        <?php } ?>
    </main>
</body>
</html>