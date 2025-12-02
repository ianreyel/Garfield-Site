<!DOCTYPE php>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
    <?php   include 'navbar.php' ?>
<body>
    <main>
        <?php include '../php/connect.php';
        if (isset($_SESSION['id'])) {
            	echo '<h2>Você ja esta logado.</h2>';
		        echo '<a href="../index.php" style="color:#ff9d00;text-decoration: none;">voltar</a>';
        } else {  
        ?>
        <div class="box">
            <form action="../php/login.php" method="post" autocomplete="off" class="sign-up-form">
                <input type="email" name="email" minlength="4" class="input-field" autocomplete="off" required placeholder="Email"/><br>
                <input type="password" name="password" minlenght="4" maxlength="16" class="input-field" autocomplete="off" required placeholder="Senha"/><br>
                <input type="submit" value="Entrar" class="sign-btn">
            </form>
        </div>
        <?php } ?>
    </main>
</body>
</html>