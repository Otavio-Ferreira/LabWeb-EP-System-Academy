<?php

    //Iniciando uma sessão
    session_start();

    //Destruindo qualquer sessão existente com email senha
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
<<<<<<< Updated upstream
    header("Location: ../index.php");
=======
    header("Location: ../paginas/home.php");
>>>>>>> Stashed changes
?>