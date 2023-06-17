<?php
  session_start();
  include_once('../php/configData.php');

  $email = $_SESSION['email'];
  $valor = trim($email);
  $tabelaUser = str_replace(array('.', '@'), "", $valor);

  if(!empty($_GET['search']))
    {
        //Armazenar o valor que for passado para a url
        $data = $_GET['search'];

        //Comando em sql para requisição
        $sql = "SELECT * FROM $tabelaUser WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' or situacao LIKE '%$data%' ORDER BY id asc";

        //mostrar treino

        if(!empty($_GET['search'])){

          //inclue a conexão
          include_once('../php/configData.php');
      
          //variáveiid recebe o valor id da rota get
          $id = $_GET['search'];
      
          //variável recebe comando SQL
          $sqlSlect = "SELECT * FROM $tabelaUser WHERE id='$id'";
      
          //variável recebe query da tabela
          $result = $conexao->query($sqlSlect);
      
          //se o número de linhas provenientes da variável result for maior que zero
          if($result -> num_rows > 0){
      
            //receber os valores dos campos e colocar em seus devidos lugares no formulário
            while($user_data = mysqli_fetch_assoc($result)){
      
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
          }
          }

    }
    else
    {
        //Comando em sql para requisição
        $sql = "SELECT * FROM $tabelaUser ORDER BY id asc";
    }
    $result = $conexao->query($sql);

 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0thek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleTreino.css">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body onload="mostrarTreino()">
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
          </ul>
        </div>
        <button class="btn bg-white" onclick="window.print()">Download</button>
      </div>
      <div class="corpo">
        <div class="m-3 table-responsive">
          <table class="table table-striped table-bordered bg-white table-hover">
              <thead style="background: #c7d9d2; color: white;">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Personal</th>
                      <th scope="col">Nível</th>
                      <th scope="col">Treino</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  //Executar enquanto users_data receber valores do banco/tabela
                    while($users_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$users_data['id']."</td>";
                    echo "<td>".$users_data['nome']."</td>";
                    echo "<td>".$users_data['personal']."</td>";
                    echo "<td>".$users_data['nivel']."</td>";
                    echo "<td class='d-flex justify-content-center'>
                            <div class=' m-auto'>
                              <a class='btn btn-secondary m-auto' href='treinosView.php?search=$users_data[id]' title='Ver Treino'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'>
                                  <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
                                  <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
                                </svg>
                                Visualizar
                              </a>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            ?>
          </tbody>
        </table>
      </div>
    </section>
    <section id="treinoBox" class="container justify-content-space-around mt-3 mb-3 pai treinos">
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
          <label class="m-auto">SÁBADO-FEIRA</label>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="../javascript/treinos.js"></script>
</body>
</html>