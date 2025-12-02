<!DOCTYPE php>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação da Resposta</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <?php   include 'navbar.php';
    include '../php/connect.php';
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];}
    ?>
    <main>
        <?php
        if (isset($_SESSION['id'])) {?>
            <form action="troca-senha.php" method="POST">
                <input type="password" name="senha1"  placeholder="Nova senha">
                <input type="password" name="senha2"  placeholder="Confirme senha">
                <button type="submit">Alterar Senha</button>
            </form>                       
        <?php 
        if(isset($_POST['senha1'], $_POST['senha2'])){
            $senha1 = $_POST['senha1'];
            $senha2 = $_POST['senha2'];
            if($senha1 === $senha2){
                $newsenha = SHA1($senha1);
                $update_sql = "UPDATE tb_user SET senha = '$newsenha' WHERE cd_user = '$id';";
                if ($mysqli->query($update_sql) === TRUE) {
                    echo "<h2>Senha alterada com sucesso!</h2>";
                    echo '<a href="perfil.php" style="color:#ff9d00; text-decoration: none;">Voltar ao perfil</a>';
                } else {
                    echo "Erro ao alterar a senha: " . $mysqli->error;
                }
            }else{
                echo "<h2>As senhas não coincidem. Tente novamente.</h2>";}
        }
        }else{
        echo '<h2>Você precisa estar logado para acessar esta página.</h2>';
        echo '<a href="login.php"  style="color:#ff9d00;text-decoration: none;">login</a>';
        echo '<br><a href="../index.php" style="color:#ff9d00; text-decoration: none;">voltar</a>';
    } ?>
    </main>
</body>
</html>