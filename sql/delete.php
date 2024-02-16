<?php 

    require('../php/conexao.php');

    $id = $_GET['id'];
    
    $sql = "DELETE FROM postagens WHERE id='$id'";    
    

    if ($conn->query($sql) === TRUE) {
        header('Location: ../html/index.php');
      } else {
        echo "Error updating record: " . $conn->error;
      }

?>