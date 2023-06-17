<?php
  session_start();
  $email = $_SESSION['email'];

  $valor = trim($email);
  $tabelaUser = str_replace(array('.', '@'), "", $valor);

    //se a rota GET(url) não estiver vazia, pegar o id
    if(!empty($_GET['id'])){

        //inclue a conexão
        include_once('../php/configData.php');

        //variáveiid recebe o valor id da rota get
        $id = $_GET['id'];

        //variável recebe comando SQL
        $sqlSlect = "SELECT * FROM $tabelaUser WHERE id='$id'";

        //variável recebe query da tabela
        $result = $conexao->query($sqlSlect);

        //se o número de linhas provenientes da variável result for maior que zero
        if($result -> num_rows > 0){

          //receber os valores dos campos e colocar em seus devidos lugares no formulário
          while($user_data = mysqli_fetch_assoc($result)){
              $id = $user_data['id'];
              $nome = $user_data['nome'];
              $idade = $user_data['idade'];
              $sexo = $user_data['sexo'];
              $inscricao = $user_data['inscricao'];
              $peso = $user_data['peso'];
              $altura = $user_data['altura'];
              $cintura = $user_data['cintura'];
              $quadril = $user_data['quadril'];
              $coxa = $user_data['coxa'];
              $gordura = $user_data['gordura'];
              $observacoes = $user_data['observacoes'];
              $dataAvaliacao = $user_data['dataAvaliacao'];
              $pesoAtual = $user_data['pesoAtual'];
              $alturaAtual = $user_data['alturaAtual'];
              $cinturaAtual = $user_data['cinturaAtual'];
              $quadrilAtual = $user_data['quadrilAtual'];
              $coxaAtual = $user_data['coxaAtual'];
              $gorduraAtual = $user_data['gorduraAtual'];
              $observacoesAtual = $user_data['observacoesAtual'];
              
              
        }
        }
        else{
            header('Location: ../index.php');
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
    <title>Cadastro do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleAvaliacao.css">
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
  <main class="m-auto">
    <div class="container p-2 rounded-top conteinerForm">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control inputCaixa1" name="nome" id="nome" value="<?php echo $nome; ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Idade:</label>
        <input type="number" min="1" class="form-control inputCaixa1" id="idade" name="idade" value="<?php echo $idade; ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="sexo" class="form-label">Sexo:</label>
        <input type="text" class="form-control inputCaixa1" id="sexo" value="<?php echo $sexo; ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="avaliação" class="form-label">Data 1ª Avaliação:</label>
        <input type="date" class="form-control inputCaixa1" id="avaliação" value="<?php echo $inscricao;?>" readonly>
      </div>
    </div>
    <form action="../php/update.php" method="POST">
        <div class="container p-2 rounded-top conteinerForm">
          <div class="mb-3">
            <label for="peso" class="form-label">Peso:</label>
            <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $peso; ?>" required>
          </div>
          
          <div class="mb-3">
            <label for="altura" class="form-label">Altura:</label>
            <input type="text" class="form-control" id="altura" name="altura" value="<?php echo $altura; ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Cintura | Quadril | Coxa:</label>
            <div class="d-flex justify-content-between">
              <input type="text" class="form-control w-25" id="cintura" name="cintura" value="<?php echo $cintura; ?>" required>
              <input type="text" class="form-control w-25" id="quadril" name="quadril" value="<?php echo $quadril; ?>" required>
              <input type="text" class="form-control w-25" id="coxa" name="coxa" value="<?php echo $coxa; ?>" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="gordura" class="form-label">Percentual de gordura:</label>
            <input type="text" class="form-control" id="gordura" name="gordura" value="<?php echo $gordura; ?>" required>
          </div>

          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="observacao" name="observacao" style="height: 100px"><?php echo $observacoes; ?></textarea>
            <label for="observacao">Observações</label>
          </div>

          <div class="d-flex justify-content-center">
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit"  name="submitUm" id="submitUm" class="btn bg-white mt-3" style="color: #E3813D" value="Adicionar 1ª Avaliação">
          </div>
        </div>
    </form>
    <form action="../php/update.php" method="POST">
        <div class="container p-2 rounded-bottom conteinerForm">
          <div>
            <label for="inscricaoAtual" class="form-label">Data da Avaliação:</label>
            <input type="date" class="form-control" id="inscricaoAtual" name="inscricaoAtual" value="<?php echo $dataAvaliacao; ?>" required>
          </div>
          
          <div class="d-flex justify-content-between">
            <div class="mb-3">
              <label for="pesoAtual" class="form-label">Peso:</label>
              <input type="text" class="form-control" id="pesoAtual" name="pesoAtual" style="width: 95%;" value="<?php echo $pesoAtual;?>" required>
            </div>
            
            <div class="mb-3">
              <label for="alturaAtual" class="form-label">Altura:</label>
              <input type="text" class="form-control" id="alturaAtual" name="alturaAtual" style="width: 95%;" value="<?php echo $alturaAtual; ?>" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Cintura | Quadril | Coxa:</label>
            <div class="d-flex justify-content-between">
              <input type="text" class="form-control w-25" id="cinturaAtual" name="cinturaAtual" value="<?php echo $cinturaAtual; ?>" required>
              <input type="text" class="form-control w-25" id="quadrilAtual" name="quadrilAtual" value="<?php echo $quadrilAtual; ?>" required>
              <input type="text" class="form-control w-25" id="coxaAtual" name="coxaAtual" value="<?php echo $coxaAtual; ?>" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="gorduraAtual" class="form-label">Percentual de gordura:</label>
            <input type="text" class="form-control" id="gorduraAtual" name="gorduraAtual" value="<?php echo $gorduraAtual; ?>" required>
          </div>

          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="observacaoAtual" name="observacaoAtual" style="height: 100px"><?php echo $observacoesAtual; ?></textarea>
            <label for="observacaoAtual">Observações Atuais</label>
          </div>
          
          <div class="d-flex justify-content-center">
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit"  name="submitDois" id="submitDois" class="btn bg-white mt-3" style="color: #E3813D" value="Adicionar nova Avaliação">
          </div>
        </div>
    </form>
  </main>
  <footer class="d-block position-static">
    <div class="d-block box border-bottom">
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
