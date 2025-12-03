<!DOCTYPE php>
<html lang="pt-br">

<body>  
    <?php   include '../php/connect.php' ?>
    <?php   include 'navbar.php' ?>
    <main>
        <section id="home">
            <h2>Início</h2>
            <p>Por favor responda este formulario IMPORTANTE!</p>
            <a href="form.php" style="margin-top: 20px; display: inline-block; text-decoration: none; color:#ff9d00;">FORMULARIO</a>
        </section>
    </main>
    <main>
        <section id="fazer-post">
            <h2>Faça um post!</h2>
            <a href="post.php" style="margin-top: 20px; display: inline-block; text-decoration: none; color:#ff9d00;">Diga o que esta pensando aqui!</a>
        </section>
    </main>
    <main>
        <section id="posts">
            <?php 
                $sql = "SELECT

                        p.titulo AS titulo_post,
                        p.dsc_post,
                        u.username AS nome_usuario,
                        p.img_post1,
                        p.img_post2,
                        p.cd_post
                            FROM
                        tb_post p
                            JOIN
                        tb_user u ON p.user = u.cd_user 
                        ORDER BY p.cd_post DESC;";
                $res = $mysqli->query($sql);

                while ($row = $res->fetch_object()) {
                    $img1 = $row->img_post1;
                    echo "<div class='post'>";
                    echo "<h2>" . $row->titulo_post . "</h2>";
                    echo "<h5> Autor: " . $row->nome_usuario . "</h5>";
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
                    echo "<form action='comentarios_post.php' method='POST'>
                                    <input type='hidden' name='post' value=".$row->cd_post.">
                                    <button type='submit'>Comentar</button>
                                    </form>";
                    echo "</div>";
                    echo "<hr>";
                }
            ?>
          
            <p>Esta é uma página dedicada ao famoso gato Garfield. Aqui você pode compartilhar seus pensamentos e ver o que outros fãs têm a dizer! Este é um exemplo de post que pode ser visualizado nesta tela!</p>

        </section>  
        
    </main>
    <footer id="contact">
        <h2>Contato</h2>
        <p>Para mais informações, entre em contato conosco pelo email: ssarahdealmeida@gmail.com</p>
    </footer>
</body>
</html>