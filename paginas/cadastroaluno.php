<?php

<<<<<<< Updated upstream
=======
  session_start();
  $logado = $_SESSION['email'];
  $senha = $_SESSION['senha'];

>>>>>>> Stashed changes
  if(isset($_POST['submit'])){

    //inclue a conexão
    include_once('../php/configData.php');

    //cria variáveis que recebem o valores dos inputs que vinheram com o subimit do post
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $mensalidade = $_POST['mensalidade'];
    $inscricao = $_POST['inscricao'];
    $sexo = $_POST['genero'];

    //variável que recebe o comando para inserir os dados na tabela
<<<<<<< Updated upstream
    $result = mysqli_query($conexao, "INSERT INTO alunos (nome, email, idade, endereco, telefone, mensalidade, inscricao, sexo) VALUES ('$nome', '$email', '$idade', '$endereco', '$telefone', '$mensalidade', '$inscricao', '$sexo')");
=======
    $result = mysqli_query($conexao, "INSERT INTO $senha (nome, email, idade, endereco, telefone, mensalidade, inscricao, sexo) VALUES ('$nome', '$email', '$idade', '$endereco', '$telefone', '$mensalidade', '$inscricao', '$sexo')");
>>>>>>> Stashed changes

  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleConta.css">
    <link rel="stylesheet" href="../css/styleCadaluno.css">
    <link rel="stylesheet" href="../css/styleFooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
  <header>
    <nav class="navbar navbar-dark fixed-top position-static">
      <div class="container-fluid">
        <p id="subname"><span id="othek">OTHEK</span> SYSTEM ACADEMY</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end caixanav" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title titlearea" id="offcanvasDarkNavbarLabel">Área de navegação</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item naveg">
                <a class="nav-link" aria-current="page" href="../index.php">Início</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="cadastroaluno.php">Cadastrar Aluno</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="treinos.php">Treino Personalizado</a>
              </li>
              <li class="nav-item naveg">
<<<<<<< Updated upstream
=======
                <a type="button" class="nav-link"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  acessar conta
                </a>
              </li>
              <li class="nav-item naveg">
>>>>>>> Stashed changes
                <a class="nav-link" href="../php/sair.php">Sair</a>
              </li>
          </div>
          <div class="offcanvas-footer">
              <img src="../img/logo-p.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </nav>
  </header>
<<<<<<< Updated upstream
  <main class="d-flex justify-content-center w-100">
        <form action="cadastroaluno.php" method="POST" class="d-flex justify-content-around w-75 p-3" style="margin-top: 60px">
=======
  <main class="m-auto">
        <form action="cadastroaluno.php" method="POST">
>>>>>>> Stashed changes
        
              <div class="container p-2 rounded-top conteinerForm">
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome:</label>
                  <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="idade" class="form-label">Idade:</label>
                  <input type="number" min="1" class="form-control" id="idade" name="idade" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="endereco" class="form-label">Endereço:</label>
                  <input type="text" class="form-control" id="endereco" name="endereco" required>
                </div>
              </div>
        
              <div class="container p-2 rounded-bottom conteinerForm">
                <div class="mb-3">
                  <label for="telefone" class="form-label">Telefone:</label>
                  <input type="tel" class="form-control" id="telefone" name="telefone" required>
                </div>
                <div class="mb-3">
                  <label for="mensalidade" class="form-label">Valor da mensalidade:</label>
                  <input type="text" class="form-control" id="mensalidade" name="mensalidade" required>
                </div>
                <div class="mb-3">
                  <label for="inscricao" class="form-label">Data de Inscrição:</label>
                  <input type="date" class="form-control" id="inscricao" name="inscricao" required>
                </div>
                <div class="mb-3 d-flex justify-content-evenly border m-auto p-3 mb-2 bg-white text-dark rounded-2">
                  <label class="form-label" for="genero">Sexo:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="feminino" value="Feminino" required>
                    <label class="form-check-label" for="feminino">Feminino</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="masculino" value="Masculino" required>
                    <label class="form-check-label" for="masculino">Masculino</label>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <input type="submit"  name="submit" id="submit" class="btn bg-white" style="color: #E3813D" value="Cadastrar Aluno">
                </div>
              </div>
      
          </form>
  </main>
<<<<<<< Updated upstream
  <footer class="d-block">
    <div class="d-block box">
=======
  <footer class="d-block position-static">
    <div class="d-block box border-bottom">
>>>>>>> Stashed changes
      <p id="footertilte">Othek Programing Group</p>
      <p id="developers">Desenvolvedores do projeto:</p>
    </div>

    <div class="d-flex justify-content-center w-25 mg-auto box" id="contact">
      <div class="container">
        <div class="container phrase">
          <label class="lab">Otavio</label>
          <img class="d-block" src="../img/linkedin.png" alt="">
        </div>
        <div class="container phrase">
          <label class="lab">Elaine</label> 
          <img class="d-block" src="../img/linkedin.png" alt="">
        </div>
      </div>

      <div class="container">
        <div class="container phrase">
          <label class="lab">Artur</label>
          <img class="d-block" src="../img/linkedin.png" alt="">
        </div>
        <div class="container phrase">
         <label class="lab">Vitória</label>
          <img class="d-block" src="../img/linkedin.png" alt="">
        </div>
      </div>

      <div class="container">
        <div class="container phrase">
          <label class="lab">Evili</label>
          <img class="d-block" src="../img/linkedin.png" alt="">
        </div>
        <div class="container phrase">
         <label class="lab">Raissa</label>
          <img class="d-block" src="../img/linkedin.png" alt="">
        </div>
      </div>
    </div>
    <div class="textfinal box">
      <p><strong>SYSTEM ACADEMY</strong> &copy; 2023-Todos os direitos reservados</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>




