<?php 
    session_start();
    
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $nome = $_SESSION['nome'];
    }else{
        $nome = "";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <?php include('header.php')?>
    <section class="painel">
        <div class="interface">
            <div class="postar">
                
                <a href="postagem.php"><button>Nova Postagem <i class="fa-solid fa-envelope"></i></button></a>
                <!-- <i class="fa-solid fa-list"></i> -->
            </div>
            <?php include('../php/posts.php');?>
        </div>
    </section>
</body>
</html>