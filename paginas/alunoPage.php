<?php
    session_start();
    include_once('../php/configData.php');

    //Se a sessão email e senha estiver vazio executar
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

        //destruir qualquer sessão existente e direcionar para o login
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    //Para mostrar na tela
    $emailLogin = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    $valor = trim($emailLogin);
    $tabelaUser = str_replace(array('.', '@'), "", $valor);

    //Pegar dados pertinentes do aluno
    $sqlSlect = "SELECT * FROM $tabelaUser WHERE senhaAluno='$senha'";
    $result = $conexao->query($sqlSlect);

    while($user_data = mysqli_fetch_assoc($result)){

      $nome = $user_data['nome'];
      $senhaAluno = $user_data['senhaAluno'];
      $idade = $user_data['idade'];

      $email = $user_data['email'];
      $endereco = $user_data['endereco'];
      $telefone = $user_data['telefone'];

      $mensalidade = $user_data['mensalidade'];
      $inscricao = $user_data['inscricao'];
      $situacao = $user_data['situacao'];
    }

    //Tratamento das datas e verificação de pagamento
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Área Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleFooter.css">
    <link rel="stylesheet" href="../css/styleAluno.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-ligth">
  <header>
    <nav class="navbar navbar-dark fixed-top position-static">
      <div class="container-fluid">
        <p id="subname"><span id="othek">OTHEK</span> SYSTEM ACADEMY - ALUNO</p>
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
                <a class="nav-link" aria-current="page" href="alunoPage.php">Dados Pessoais</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="alunoAvaliacao.php">Avaliação Física</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="alunoTreino.php">Acessar Treino</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="../php/sair.php">Sair</a>
              </li>
          </div>
          <div class="offcanvas-footer">
              <img src="img/logo-p.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="reconhecimento" style="text-align: center;">
      <?php echo "<p class='text-white'>Seja Bem Vindo <strong>$email<strong></p>" ?>
    </section>
    <section class="w-auto">
      <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            <div class="slide first">
                <img src="../img/car1.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/car1.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/car1.png" alt="">
            </div>

            <div class="navegation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
        </div>
     </div>
    </section>
    <section class="d-flex justify-content-around flex-wrap">
      <div class="boxInformacoes">
        <h2 class="titleInfor">Informações pessoais</h2>
        <form action="">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome;?>" readonly>
          </div>
          <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade" value="<?php echo $idade;?>" readonly>
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <div class="mb-3 input-group">
                <input type="password" class="form-control" id="senha" name="senha" required aria-label="Recipient's username" aria-describedby="basic-addon2" placeholder="Senha" value="<?php echo $senha;?>" readonly>
                <span class="input-group-text" id="eye">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                </span>
            </div>
          </div>
        </form>
      </div>
      <div class="boxInformacoes">
        <h2 class="titleInfor">Informações de contato</h2>
        <form action="">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email;?>" readonly>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?php echo $telefone;?>" readonly>
          </div>
          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereco" value="<?php echo $endereco;?>" readonly>
          </div>
        </form>
      </div>
      <div class="boxInformacoes">
        <h2 class="titleInfor">Informações sobre o plano</h2>
        <form action="">
          <div class="mb-3">
            <label for="mensalidade" class="form-label">Mensalidade</label>
            <input type="text" class="form-control" id="mensalidade" name="mensalidade" placeholder="Mensalidade" value="<?php echo $mensalidade;?>" readonly>
          </div>
          <div class="mb-3">
            <label for="inscricao" class="form-label">Data de Inscrição</label>
            <input type="text" class="form-control" id="inscricao" name="inscricao" placeholder="Inscricao" value="<?php echo $inscricao;?>" readonly>
          </div>
          <div class="mb-3">
            <label for="situacao" class="form-label">Situacao</label>
            <input type="text" class="form-control" id="situacao" name="situacao" placeholder="situacao" value="<?php echo $situacao;?>" readonly>
          </div>
        </form>
      </div>
    </section>
  </main>

  <footer class="d-block position-static bg-black" style="margin-bottom: -20px">
    <div class="d-block box border-bottom">
      <p id="footertilte">Othek Programing Group</p>
      <p id="developers">Desenvolvedores do projeto:</p>
    </div>

    <div class="d-flex justify-content-center w-25 mg-auto box" id="contact">
      <div class="container">
        <div class="container phrase">
          <label class="lab">Otavio</label>
          <img class="d-block" src="img/linkedin.png" alt="">
        </div>
        <div class="container phrase">
          <label class="lab">Elaine</label> 
          <img class="d-block" src="img/linkedin.png" alt="">
        </div>
      </div>

      <div class="container">
        <div class="container phrase">
          <label class="lab">Artur</label>
          <img class="d-block" src="img/linkedin.png" alt="">
        </div>
        <div class="container phrase">
         <label class="lab">Vitória</label>
          <img class="d-block" src="img/linkedin.png" alt="">
        </div>
      </div>

      <div class="container">
        <div class="container phrase">
          <label class="lab">Evili</label>
          <img class="d-block" src="img/linkedin.png" alt="">
        </div>
        <div class="container phrase">
         <label class="lab">Raissa</label>
          <img class="d-block" src="img/linkedin.png" alt="">
        </div>
      </div>
    </div>
    <div class="textfinal box">
      <p><strong>SYSTEM ACADEMY</strong> &copy; 2023-Todos os direitos reservados</p>
    </div>
  </footer>
  <script src="../javascript/inicio.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="../javascript/login.js"></script>
</body>
</html>
