<?php 

    require('../php/conexao.php');

    $tema = $_POST['tema'];
    $sobre = $_POST['sobre'];
    $id = $_GET['id'];
    
    if(empty($_POST['image'])){
        $sql = "UPDATE postagens SET tema='$tema', sobre='$sobre' WHERE id='$id'";
    }else{
        $img = $_POST['image'];
        $sql = "UPDATE postagens SET tema='$tema', img='$img', sobre='$sobre' WHERE id='$id'";
    }
    if ($conn->query($sql) === TRUE) {
        header('Location: ../html/index.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }

?>