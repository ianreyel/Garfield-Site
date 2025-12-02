<?php include 'connect.php';

	$email = $_POST['email'];
	$password = SHA1($_POST['password']);

	$sql =  "SELECT * 
			FROM tb_user 
			WHERE email = '". $email ."' AND senha = '".$password."'" ;

	$res = $mysqli->query($sql);

	if($res->num_rows == 1) {
		while ($resul = $res->fetch_object()) {
					
			$_SESSION['id'] = $resul->cd_user;
			$_SESSION['username'] = $resul->username;
			$_SESSION['mail'] = $resul->email;
            ?><script>
                alert('Login feito com sucesso!!!!!');
                window.location.href = '../public/home.php';</script><?php
        };

    } elseif($res->num_rows >= 2){  
        ?><script>
                alert('Erro no banco, 2 ou mais logins iguais');
                window.location.href = '../public/login.php';</script>
        <?php
    }else{
        ?><script> 
                alert('Login e/ou senha inválidos, tente novamente ou cadastre-se'); 
                window.location.href = '../public/login.php';</script>
        <?php
    };
?>