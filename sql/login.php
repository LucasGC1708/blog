<?php 

    require('../php/conexao.php');

    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql = "SELECT * FROM admin WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        session_start();
        $row = $result->fetch_assoc();

        $_SESSION = $row;
        header('Location: ../html/index.php');
    }else{
        echo 'falha';
    }