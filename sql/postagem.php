<?php 
    session_start();
    require('../php/conexao.php');

    $tema = $_POST['tema'];
    $img = $_POST['image'];
    $sobre = $_POST['sobre'];
    $autor = $_SESSION['nome'];
    
    $sql = "INSERT INTO postagens (tema, img, sobre, autor) VALUES ('$tema', '$img', '$sobre', '$autor')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../html/index.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>