<!DOCTYPE php>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Web</title>
	<?php   include '../public/navbar.php' ?>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>  
    <main>
        <section id="user">
			<?php include '../php/connect.php';

				$post = $_POST['post'];

				$sql =  "SELECT * 
						FROM tb_cmt 
						WHERE post = '". $post ."'";

				$res = $mysqli->query($sql);

                while ($row = $res->fetch_object()) {
                    echo "<div class='post'>";
                    echo "<h2>" . $row->conteudo . "</h2>";
                    //echo "<h5> Autor: " . $row->nome_usuario . "</h5>";
                    //echo "<p>" . $row->dsc_post . "</p>";
                    echo "<hr>";
                }

				if($res->num_rows === 0) {
					echo '<h2>Ninguem comentou ainda, seja o primeiro!!!</h2>';
				} 
			?>
        </section>
    </main>

</html>
