<!DOCTYPE php>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação da Resposta</title>
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <?php include '../php/connect.php';
     if (isset($_SESSION['id'])) {  
     ?>

    <?php   include 'navbar.php' ?>
    <main>
        <form id="post-garfield" action="../php/new-post.php" method="post" enctype="multipart/form-data">
                <div>
                    <input type="text" name="titulo" placeholder="Título" maxlength="20">
                    
                    <textarea name="conteudo" placeholder="Diga o que você pensa para este gatinho gordo:" rows="5"></textarea>
                    
                    <div class="images-container">
                        <label for="input-imagem" class="image-upload-box">
                            <div id="upload-placeholder" class="upload-placeholder">
                                <span>Clique para adicionar imagem</span>
                            </div>
                            <img id="preview-imagem" class="preview-imagem" style="display: none;">
                            <input type="file" name="imagem" id="input-imagem" accept="image/*" style="display: none;">
                        </label>

                        <label for="input-imagem2" class="image-upload-box">
                            <div id="upload-placeholder2" class="upload-placeholder">
                                <span>Clique para adicionar imagem</span>
                            </div>
                            <img id="preview-imagem2" class="preview-imagem" style="display: none;">
                            <input type="file" name="imagem2" id="input-imagem2" accept="image/*" style="display: none;">
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit">Enviar Post</button>
                </div>
            </form>
            <a href="home.php" style="margin-top: 20px; display: inline-block; text-decoration: none; color: #ff9d00;">Voltar</a>
            <?php 
            }else{
                include 'navbar.php';
                echo '<main> <h2>Você precisa estar logado para acessar esta página.</h2>';
                echo '<a href="home.php"  style="margin-top: 20px; display: inline-block; text-decoration: none; color:#ff9d00;">voltar</a></main>';
            } ?>
    </main>

    <script>
        // Primeiro quadrado
        const inputImagem = document.getElementById('input-imagem');
        const previewImagem = document.getElementById('preview-imagem');
        const uploadPlaceholder = document.getElementById('upload-placeholder');

        inputImagem.addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImagem.src = e.target.result;
                    previewImagem.style.display = 'block';
                    uploadPlaceholder.style.display = 'none';
                };
                
                reader.readAsDataURL(file);
            } else {
                previewImagem.style.display = 'none';
                uploadPlaceholder.style.display = 'flex';
            }
        });

        // Segundo quadrado
        const inputImagem2 = document.getElementById('input-imagem2');
        const previewImagem2 = document.getElementById('preview-imagem2');
        const uploadPlaceholder2 = document.getElementById('upload-placeholder2');

        inputImagem2.addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImagem2.src = e.target.result;
                    previewImagem2.style.display = 'block';
                    uploadPlaceholder2.style.display = 'none';
                };
                
                reader.readAsDataURL(file);
            } else {
                previewImagem2.style.display = 'none';
                uploadPlaceholder2.style.display = 'flex';
            }
        });
    </script>

</body>
</html>