<?php
    session_start();
    include_once('../php/configData.php');

    //Para mostrar na tela
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    $valor = trim($email);
    $tabelaUser = str_replace(array('.', '@'), "", $valor);


    //Comando em sql para requisição

    if(!empty($_GET['search']))
    {
        //Armazenar o valor que for passado para a url
        $data = $_GET['search'];

        //Comando em sql para requisição
        $sql = "SELECT * FROM $tabelaUser WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' or situacao LIKE '%$data%' ORDER BY id asc";
    }
    else
    {
        //Comando em sql para requisição
        $sql = "SELECT * FROM $tabelaUser ORDER BY id asc";
    }
    $result = $conexao->query($sql);

    //Contanto registros
    $sqlCont = "SELECT count(*) as totalRegistros FROM $tabelaUser";
    $totalRg = $conexao->query($sqlCont);
    $quantidadeRg = mysqli_fetch_assoc($totalRg);

    //Recebendo a requisição a tabela de pagos

    $sqlContPg = "SELECT count(*) as totalPagos FROM $tabelaUser WHERE situacao LIKE '%Pago%'";
    $totalPg = $conexao->query($sqlContPg);
    $quantidadePg = mysqli_fetch_assoc($totalPg);

    //Recebendo a requisição de pendencias

    $sqlContPd = "SELECT count(*) as totalPendentes FROM $tabelaUser WHERE situacao LIKE '%Pendente%'";
    $totalPd = $conexao->query($sqlContPd);
    $quantidadePd = mysqli_fetch_assoc($totalPd);

    //Balanço previsto

    $sqlSl = "SELECT SUM(mensalidade) as balancoEsperado FROM $tabelaUser";
    $resultSl = $conexao->query($sqlSl);
    $quantidadeSl = mysqli_fetch_assoc($resultSl);

    //Balanço real

    $sqlSl2 = "SELECT SUM(mensalidade) as balancAlcancado FROM $tabelaUser WHERE situacao LIKE '%Pago%'";
    $resultSl2 = $conexao->query($sqlSl2);
    $quantidadeSl2 = mysqli_fetch_assoc($resultSl2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleRelatorio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
</head>
<body onload="chamarData()">
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
                <a type="button" class="nav-link" href="conta.php">acessar conta</a>
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
    <section id="reconhecimento">
      <div class="box-search m-3">
        <input type="search" class="form-control w-50" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
        <div class="dropdown">
          <button class="btn bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Filtrar
          </button>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" onclick="searchData1()"  href="#">Todos</a></li>
            <li><a class="dropdown-item" onclick="searchData2()"  href="#">Pagos</a></li>
            <li><a class="dropdown-item" onclick="searchData3()"  href="#">Pendentes</a></li>
          </ul>
        </div>
      </div>
        
    </section>
    <section class="ConteinerRelat">
      <div class="cabecalho">
        <div class="mb-3 inputs">
          <label for="mes" class="form-label">Data</label>
          <input type="text" class="form-control inputsRelat" id="mes" name="mes" value="" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Total de Alunos</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" readonly value="<?php echo $quantidadeRg['totalRegistros']; ?>">
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Total de Pendencias</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" value="<?php echo $quantidadePd['totalPendentes']; ?>" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Total de Pagos</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" value="<?php echo $quantidadePg['totalPagos']; ?>" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="balancoEsperado" class="form-label">Balanço Previsto</label>
          <input type="text" class="form-control inputsRelat" id="balancoEsperado" value="<?php echo 'R$'.$quantidadeSl['balancoEsperado']; ?>" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Balanço do mês</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" value="<?php echo 'R$'.$quantidadeSl2['balancAlcancado']; ?>" readonly>
        </div>
      </div>
      <div class="corpo">
        <div class="m-3 table-responsive">
          <table class="table table-striped table-bordered bg-white table-hover tabela">
              <thead style="background: #c7d9d2; color: white;">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Mensalidade</th>
                      <th scope="col">Data de Pagamento</th>
                      <th scope="col">Situação</th>
                      <th scope="col"></th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      //Executar enquanto users_data receber valores do banco/tabela
                      while($users_data = mysqli_fetch_assoc($result)){
                          echo "<tr>";
                            echo "<td>".$users_data['id']."</td>";
                            echo "<td>".$users_data['nome']."</td>";
                            echo "<td>".$users_data['mensalidade']."</td>";
                            echo "<td>".$users_data['inscricao']."</td>";
                            echo "<td class='situacao'>".$users_data['situacao']."</td>";
                            echo "<td class='d-flex justify-content-end'>
                                    <div class='m-1'>
                                      <a class='btn btn-secondary'  href='cadEdit.php?id=$users_data[id]' title='Editar'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                          <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                          <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                        </svg>
                                        Editar
                                      </a>
                                    </div>
                                  </td>";
                          echo "</tr>";
                      }
                  ?>
              </tbody>
              </table>
      </div>
      </div>
    </section>
    <div class="mb-3 mt-3 m-auto inputs">
      <input type="submit" class="form-control m-auto" id="formGroupExampleInput" value="Baixar Relatório" onclick="window.print()">
    </div>
  </main>
  <script src="../javascript/relatorio.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>