<?php 
    require('../php/conexao.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM postagens WHERE id='$id'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        $img = $row['img'];
    }
?>

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
    <form action="../sql/edite.php?id=<?php echo $id ?>" method="post">
        <label for="tema">Tema:</label>
        <input type="text" id="tema" name="tema" required value= <?php echo $row['tema'] ?> >

        <label for="image">URL da Imagem:</label>
        <input type="file" id="image" name="image" value= '../img/<?php echo "$img"?>'>
        <label for="sobre">Sobre:</label>
        <input type="text" id="tema" name="sobre" required value="<?php echo $row['sobre'] ?>">
        <button type="submit">Enviar</button>
    </form>
</div>

</body>
        <script>
            const msg = document.getElementById('sobre').value= <?php echo $row['sobre'] ?>;
            console.log(msg.value);
        </script>
</html>