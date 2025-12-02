<?php include 'connect.php';

	$post_dir = "../img_posts/";

	$titulo = $_POST["titulo"];
	$conteudo = $_POST["conteudo"];

	function processar_upload($input_name, $post_dir, $mysqli) {
    if (isset($_FILES[$input_name]) && $_FILES[$input_name]['error'] == UPLOAD_ERR_OK) {
        $file_name = uniqid() . basename($_FILES[$input_name]["name"]);
        $target_file = $post_dir . $file_name;

        if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
            return "img_posts/" . $file_name; 
        } else {
            return '';
        }
    }
    return '';
	}

	$imagem = processar_upload("imagem", $post_dir, $mysqli); 

	$imagem2 = processar_upload("imagem2", $post_dir, $mysqli);


	$insert = "INSERT INTO tb_post (titulo, dsc_post, img_post1, img_post2, user) VALUES ('". $titulo ."', '". $conteudo ."', '". $imagem ."', '". $imagem2 ."', '". $_SESSION['id'] ."')";
	if ($list = $mysqli->query($insert)) {
		header('Location: ../public/home.php');
	} else {
		echo $mysqli->error;
	};

	$mysqli->close();
?>