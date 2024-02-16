<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Informações</title>
    <link rel="stylesheet" href="../css/public.css">
</head>
<body>

<div class="container">
    <form action="../sql/postagem.php" method="post">
        <label for="tema">Tema:</label>
        <input type="text" id="tema" name="tema" required>

        <label for="image">URL da Imagem:</label>
        <input type="file" id="image" name="image">

        <label for="sobre">Sobre:</label>
        <textarea id="sobre" name="sobre" rows="4" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>