<?php include '../php/connect.php';
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $delete_sql = "DELETE FROM tb_post WHERE cd_post = '$numero' AND user = '{$_SESSION['id']}'";
    if ($mysqli->query($delete_sql) === TRUE) {
        header("Location: ../public/perfil.php");
    } else {
        echo "Erro ao excluir o post: " . $mysqli->error;
    }
}
?>