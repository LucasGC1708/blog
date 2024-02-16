<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<header>
        <nav class="nav-bar">
            <div class="logo" >
                <h1>PROJETO</h1> 
            </div>
            <h1>Blog Pessoal</h1>
            <div class="nav-list"> 
                <ul>
                    <?php 
                        
                        if(!isset($_SESSION['email'])){
                            echo "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>";
                        }else{
                            echo "<li class='nav-item'><a href='index.php' class='nav-link'>Home</a></li>";
                        }
                    
                    ?>
                    <!-- <li class='nav-item'><a href='../html/sistema.php' class='nav-link'>Perfil</a></li>
                    <li class='nav-item'><a href='../html/sistema.php' class='nav-link'>Perfil</a></li>
                    <li class='nav-item'><a href='../html/sistema.php' class='nav-link'>Perfil</a></li>
                    <li class='nav-item'><a href='../html/sistema.php' class='nav-link'>Perfil</a></li> -->
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src="../img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class='nav-item'><i class='fa-solid fa-house'></i><a href='sistema.php' class='nav-link'>Perfil</a></li> 
                <li class='nav-item'><i class='fa-solid fa-house'></i><a href='sistema.php' class='nav-link'>Perfil</a></li> 
                <li class='nav-item'><i class='fa-solid fa-house'></i><a href='sistema.php' class='nav-link'>Perfil</a></li> 
                <li class='nav-item'><i class='fa-solid fa-house'></i><a href='sistema.php' class='nav-link'>Perfil</a></li> 
                <li class='nav-item'><i class='fa-solid fa-house'></i><a href='sistema.php' class='nav-link'>Perfil</a></li> 
            </ul>
        </div>
    </header>
</body>
<script>
        function menuShow() {
                let menuMobile = document.querySelector('.mobile-menu');
                if (menuMobile.classList.contains('open')) {
                    menuMobile.classList.remove('open');
                    document.querySelector('.icon').src = "assets/img/menu_white_36dp.svg";
                } else {
                    menuMobile.classList.add('open');
                    document.querySelector('.icon').src = "assets/img/close_white_36dp.svg";
                }
            }
    </script>
</html>