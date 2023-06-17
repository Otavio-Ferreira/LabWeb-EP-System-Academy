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
      $email = $user_data['email'];

      $grupoSegunda = $user_data['grupoSegunda'];
      $treinoSegunda = $user_data['treinoSegunda'];
      $serieSegunda = $user_data['serieSegunda'];
      $repeticaoSegunda = $user_data['repeticaoSegunda'];

      $grupoTerca = $user_data['grupoTerca'];
      $treinoTerca = $user_data['treinoTerca'];
      $serieTerca = $user_data['serieTerca'];
      $repeticaoTerca = $user_data['repeticaoTerca'];

      $grupoQuarta = $user_data['grupoQuarta'];
      $treinoQuarta = $user_data['treinoQuarta'];
      $serieQuarta = $user_data['serieQuarta'];
      $repeticaoQuarta = $user_data['repeticaoQuarta'];

      $grupoQuinta = $user_data['grupoQuinta'];
      $treinoQuinta = $user_data['treinoQuinta'];
      $serieQuinta = $user_data['serieQuinta'];
      $repeticaoQuinta = $user_data['repeticaoQuinta'];

      $grupoSexta = $user_data['grupoSexta'];
      $treinoSexta = $user_data['treinoSexta'];
      $serieSexta = $user_data['serieSexta'];
      $repeticaoSexta = $user_data['repeticaoSexta'];

      $grupoSabado = $user_data['grupoSabado'];
      $treinoSabado = $user_data['treinoSabado'];
      $serieSabado = $user_data['serieSabado'];
      $repeticaoSabado = $user_data['repeticaoSabado'];
    }

    //Tratamento das datas e verificação de pagamento
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleFooter.css">
    <link rel="stylesheet" href="../css/styleTreino.css">
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
    <section id="treinoBox" class="container d-flex justify-content-space-around mt-3 mb-3 pai treinos">
      <div class="columns container tabletreinos rounded" style="width: 400px">
        <div class="d-block cabeçalho">
          <label class="m-auto">SEGUNDA-FEIRA</label>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" value="<?php echo $grupoSegunda; ?>" readonly>
            <label for="floatingInput">Grupo</label>
          </div>
        </div>
        <div class="d-flex justify-content-between w-100">
          <div>
            <p>Treinos</p>
            <p><?php echo $treinoSegunda?></p>
          </div>
          <div>
            <p>Séries</p>
            <p><?php echo $serieSegunda?></p>
          </div>
          <div>
            <p>Repetiçõe</p>
            <p><?php echo $repeticaoSegunda?></p>
          </div>
        </div>
      </div>
      <div class="columns container tabletreinos rounded" style="width: 400px">
        <div class="d-block cabeçalho">
          <label class="m-auto">TERÇA-FEIRA</label>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" value="<?php echo $grupoTerca; ?>" readonly>
            <label for="floatingInput">Grupo</label>
          </div>
        </div>
        <div class="d-flex justify-content-between w-100">
          <div>
            <p>Treinos</p>
            <p><?php echo $treinoTerca?></p>
          </div>
          <div>
            <p>Séries</p>
            <p><?php echo $serieTerca?></p>
          </div>
          <div>
            <p>Repetiçõe</p>
            <p><?php echo $repeticaoTerca?></p>
          </div>
        </div>
      </div>

      <div class="columns container tabletreinos rounded" style="width: 400px">
        <div class="d-block cabeçalho">
          <label class="m-auto">QUARTA-FEIRA</label>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" value="<?php echo $grupoQuarta; ?>" readonly>
            <label for="floatingInput">Grupo</label>
          </div>
        </div>
        <div class="d-flex justify-content-between w-100">
          <div>
            <p>Treinos</p>
            <p><?php echo $treinoQuarta?></p>
          </div>
          <div>
            <p>Séries</p>
            <p><?php echo $serieQuarta?></p>
          </div>
          <div>
            <p>Repetiçõe</p>
            <p><?php echo $repeticaoQuarta?></p>
          </div>
        </div>
      </div>

      <div class="columns container tabletreinos rounded" style="width: 400px">
        <div class="d-block cabeçalho">
          <label class="m-auto">QUINTA-FEIRA</label>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" value="<?php echo $grupoQuinta; ?>" readonly>
            <label for="floatingInput">Grupo</label>
          </div>
        </div>
        <div class="d-flex justify-content-between w-100">
          <div>
            <p>Treinos</p>
            <p><?php echo $treinoQuinta?></p>
          </div>
          <div>
            <p>Séries</p>
            <p><?php echo $serieQuinta?></p>
          </div>
          <div>
            <p>Repetiçõe</p>
            <p><?php echo $repeticaoQuinta?></p>
          </div>
        </div>
      </div>

      <div class="columns container tabletreinos rounded" style="width: 400px">
        <div class="d-block cabeçalho">
          <label class="m-auto">SEXTA-FEIRA</label>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" value="<?php echo $grupoSexta; ?>" readonly>
            <label for="floatingInput">Grupo</label>
          </div>
        </div>
        <div class="d-flex justify-content-between w-100">
          <div>
            <p>Treinos</p>
            <p><?php echo $treinoSexta?></p>
          </div>
          <div>
            <p>Séries</p>
            <p><?php echo $serieSexta?></p>
          </div>
          <div>
            <p>Repetiçõe</p>
            <p><?php echo $repeticaoSexta?></p>
          </div>
        </div>
      </div>

      <div class="columns container tabletreinos rounded" style="width: 400px">
        <div class="d-block cabeçalho">
          <label class="m-auto">SÁBADO</label>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" value="<?php echo $grupoSabado; ?>" readonly>
            <label for="floatingInput">Grupo</label>
          </div>
        </div>
        <div class="d-flex justify-content-between w-100">
          <div>
            <p>Treinos</p>
            <p><?php echo $treinoSabado;?></p>
          </div>
          <div>
            <p>Séries</p>
            <p><?php echo $serieSabado;?></p>
          </div>
          <div>
            <p>Repetiçõe</p>
            <p><?php echo $repeticaoSabado;?></p>
          </div>
        </div>
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
</body>
</html>
