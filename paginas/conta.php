<?php
  session_start();
  include_once('../php/configData.php');
  $email = $_SESSION['email'];
  $senha = $_SESSION['senha'];

  $sqlSlect = "SELECT * FROM users WHERE email='$email' and senha='$senha'";

  //variável recebe query da tabela
  $result = $conexao->query($sqlSlect);

        //se o número de linhas provenientes da variável result for maior que zero
        if($result -> num_rows > 0){

            //receber os valores dos campos e colocar em seus devidos lugares no formulário
            while($user_data = mysqli_fetch_assoc($result)){
            $id = $user_data['id'];
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $dataFim = $user_data['dataFim'];
            $dataInicio = $user_data['dataInicio'];
            $plano = $user_data['plano'];
        }
        }
        else{
            header('Location: ../index.php');
        }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleConta.css">
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
                <a class="nav-link" href="treinosView.php">Treino Personalizado</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="conta.php">Acessar Conta</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="relatorio.php">Acessar Relatório</a>
              </li>
              <li class="nav-item naveg">
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
  <main>
    <section>
      <form action="../php/userUpdate.php" method="POST">
        <div class="containerDados">
          <div class="editInfor">
              <div>
                <div class="form-floating">
                  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>">
                  <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome; ?>">
                  <label for="nome">Nome</label>
                </div> <br><br>
        
                <div class="form-floating">
                  <input type="email" class="form-control" name="email" id="Email" value="<?php echo $email; ?>">
                  <label for="email">Email</label>
                </div><br><br>
                <div class="form-floating">
                  <input type="password" class="form-control" name="senha" id="senha" value="<?php echo $senha; ?>">
                  <label for="senha">Senha</label>
                </div> <br><br>
                <input type="submit" id="update" name="update" value="Atualizar">
              </div>
          </div>
          <div class="editInfor">
              <div class="w-75">
                <div class="form-floating mt-3">
                  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>">
                  <input type="text" class="form-control" name="datainicio" id="datainicio" value="<?php echo $dataInicio; ?>">
                  <label for="datainicio">Data do inicio da assinatura</label>
                </div> <br>
        
                <div class="form-floating mt-3">
                  <input type="text" class="form-control" name="datafim" id="datafim" value="<?php echo $dataFim; ?>">
                  <label for="datafim">Data do fim da assinatura</label>
                </div><br>
                <div class="form-floating mt-3">
                  <input type="text" class="form-control" name="plano" id="plano" value="<?php echo $plano; ?>">
                  <label for="plano">Senha</label>
                </div> <br>
              </div>
          </div>
        </div>
      </form>
    </section>
  </main>

  <footer class="d-block position-static" style="margin-bottom: -20px">
    <div class="d-block box">
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
