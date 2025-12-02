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
			<?php include 'connect.php';

				$email = $_POST['email'];
				$name = $_POST['username'];
				$password = SHA1($_POST['password']);
				$bio = $_POST['conteudo'];

				$sql =  "SELECT * 
						FROM tb_user 
						WHERE email = '". $email ."'";

				$res = $mysqli->query($sql);

				if($res->num_rows != 0) {
					echo 'Você ja tem uma conta! <a href="login.php" style="margin-top: 20px; display: inline-block; text-decoration: none; color:#ff9d00;">Faça login aqui</a>.';
				} else {  
					$insert = "INSERT INTO tb_user (email, username, is_admin, senha, bios) VALUES ('". $email ."', '". $name ."', 0, '". $password ."', '". $bio ."')";
					if ($list = $mysqli->query($insert)) {
						header('Location: ../public/home.php');
					} else {
						echo $mysqli->error;
					};
				}
			?>
        </section>
    </main>

</html>


