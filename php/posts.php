<?php 
    require('conexao.php');

    $sql = "SELECT * FROM postagens ORDER BY id DESC";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "
            <div class='postagens'>
                <h2>{$row['tema']}</h2>
                <div class='informacoes'>
                    <img src='../img/{$row['img']}' alt=''>
                    <p>{$row['sobre']}</p>
                </div>";
                if($nome == $row['autor']){
                    echo "<div class='opcoes'>
                        <div class='edite'>
                            <a href='editar.php?id=$row[id]'><i class='fa-solid fa-pen-to-square'></i></a>
                        </div>
                        <div class='lixo'>
                            <a href='../sql/delete.php?id=$row[id]' onclick=\"return confirm('Tem certeza que deseja deletar?');\"><i  class='fa-solid fa-trash-can'></i></a>
                        </div>
                    </div>";
                }
            echo "</div>
            ";
        }
    }

?>
<!-- 
<div class="postagens">
                <h2>Tema 1</h2>
                <div class="informacoes">
                    <img src="../img/blog1.jpg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
                        elit. Dolorum eum, ipsam rerum voluptatibus id alias
                         nulla, quam, excepturi voluptatem ratione nesciunt.
                          Eos rerum consequatur animi quaerat ad asperiores, 
                          voluptatum doloremque!</p>
                </div>
                <div class="opcoes">
                    <div class="edite">
                        <a href="editar.php"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                    <div class="lixo">
                        <a href="deletar.php"><i  class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div> -->