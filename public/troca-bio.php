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
            <form action="troca-bio.php" method="POST">
                <input type="text" name="conteudo" placeholder="Insira uma nova Bio para que todos saibam o quanto você ama o Garfield" maxlength="100">
                <button type="submit">Alterar sua Bio</button>
            </form>                       
        <?php 
        if(isset($_POST['conteudo'])){
            $newbio = $_POST['conteudo'];
            $update_sql = "UPDATE tb_user SET bios = '$newbio' WHERE cd_user = '$id';";
            if ($mysqli->query($update_sql) === TRUE) {
                echo "<h2>Bio alterada com sucesso!</h2>";
                echo '<a href="perfil.php" style="color:#ff9d00; text-decoration: none;">Voltar ao perfil</a>';
            } else {
                echo "Erro ao alterar a Bio: " . $mysqli->error;
            }
        }
        }else{
        echo '<h2>Você precisa estar logado para acessar esta página.</h2>';
        echo '<a href="login.php"  style="color:#ff9d00;text-decoration: none;">login</a>';
        echo '<br><a href="../index.php" style="color:#ff9d00; text-decoration: none;">voltar</a>';
    } ?>
    </main>
</body>
</html>