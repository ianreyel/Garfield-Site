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
        if (isset($_SESSION['id'])) {
            $user = "SELECT * FROM tb_user WHERE cd_user = '$id';";
                            $resul = $mysqli->query($user);

                            while ($row = $resul->fetch_object()) {
                                echo "<div class='perfil' id='perfil'>
                                    <img src='../img/icon.png' alt='Ícone de Perfil' width='300px'>
                                    <div class='info-texto'>
                                        <h2>". $row->username ."</h2>
                                        <h4>". $row->email ."</h4>
                                        <p>$row->bios</p>
                                        <form action='troca-senha.php'>
                                            <button type='submit'>Trocar de senha</button>
                                        </form>
                                        <form action='troca-bio.php'>
                                            <button type='submit'>Trocar Bio</button>
                                        </form>
                                    </div>
                                </div>";}
            }
        ?>
        <main>
            <?php
            if (isset($_SESSION['id'])) {
                echo "<h1> Seus Posts </h1>";
                echo "<hr>";
                echo "<hr>";
                $sql = "SELECT * FROM tb_post WHERE user = '$id';";
                        $res = $mysqli->query($sql);

                        while ($row = $res->fetch_object()) {
                            $img1 = $row->img_post1;
                            echo "<div class='post'>";
                            echo "<h2>" . $row->titulo . "</h2>";
                        if (!empty($row->img_post1)) {
                                $img = $row->img_post1;
                                $dir_img = "../".$img;
                                echo "<img src='$dir_img' alt='Imagem do Post 1' style='max-width: 300px; height: auto;'>"; 
                            }
                            if (!empty($row->img_post2)) {
                                $img = $row->img_post2;
                                $dir_img = "../".$img;
                                echo "<img src='$dir_img' alt='Imagem do Post 1' style='max-width: 300px; height: auto;'>"; 
                            }
                            echo "<p>" . $row->dsc_post . "</p>";
                            echo "<form action='../php/delet_post.php' method='POST'>
                                    <input type='hidden' name='numero' value=".$row->cd_post.">
                                    <button type='submit' style='background-color: red;'>Excluir</button>
                                    </form>";
                            echo "</div>";
                            echo "<hr>";
            }?>
                <a href="home.php" style="margin-top: 20px; display: inline-block; text-decoration: none;">Voltar</a>
        </main>
    </main>
    <?php }else{
        echo '<h2>Você precisa estar logado para acessar esta página.</h2>';
        echo '<a href="login.php"  style="color:#ff9d00;text-decoration: none;">login</a>';
        echo '<br><a href="../index.php" style="color:#ff9d00; text-decoration: none;">voltar</a>';
    } ?>
</body>
</html>