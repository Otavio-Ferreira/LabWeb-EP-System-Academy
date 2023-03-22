<?php
    session_start();
    include_once('../php/configData.php');

    //Se a sessão email e senha estiver vazio executar
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

        //destruir qualquer sessão existente e direcionar para o login
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../index.php');
    }

    //Para mostrar na tela
    $logado = $_SESSION['email'];

    //Pegar o valor da url caso ela não esteje vazia
    if(!empty($_GET['search']))
    {
        //Armazenar o valor que for passado para a url
        $data = $_GET['search'];

        //Comando em sql para requisição
        $sql = "SELECT * FROM alunos WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id asc";
    }
    else
    {
        //Comando em sql para requisição
        $sql = "SELECT * FROM alunos ORDER BY id asc";
    }

    //Recebendo a requisição a tabela
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
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
                <a class="nav-link" aria-current="page" href="sistema.php">Início</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="cadastroaluno.php">Cadastrar Aluno</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="treinos.php">Treino Personalizado</a>
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
      <?php echo "<p class='text-white'>Seja Bem Vindo <strong>$logado<strong></p>" ?>
    </section>
    <section class="w-auto">
      <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            <div class="slide first">
                <img src="../img/logo-p.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/logo-p.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/logo-p.png" alt="">
            </div>

            <div class="navegation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
        </div>
     </div>
    </section>
    <section>
      <h1 id="controle">Controle de Alunos</h1>

      <div class="box-search m-3">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn bt">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
      </div>
      <div class="m-3">
        <table class="table table-striped table-bordered bg-white table-hover">
            <thead style="background: #E3813D; color: white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Mensalidade</th>
                    <th scope="col">Inscrição</th>
                    <th scope="col">Sexo</th>
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
                        echo "<td>".$users_data['email']."</td>";
                        echo "<td>".$users_data['idade']."</td>";
                        echo "<td>".$users_data['endereco']."</td>";
                        echo "<td>".$users_data['telefone']."</td>";
                        echo "<td>".$users_data['mensalidade']."</td>";
                        echo "<td>".$users_data['inscricao']."</td>";
                        echo "<td>".$users_data['sexo']."</td>";
                        echo "<td>
                                <a class='btn btn-light btn-sm'  href='cadEdit.php?id=$users_data[id]' title='Editar'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                    </svg>
                                </a> <br>
                                <a class='btn btn-light btn-sm'href='../php/delete.php?id=$users_data[id]' title='Deletar'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                    </svg>
                                </a>
                             </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            </table>
    </div>
    </section>
  </main>

  <footer class="d-block position-static" style="margin-bottom: -20px">
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

  <script>
    let count = 1
    document.getElementById('radio1').select = true
    setInterval( function(){
        nextImage();
    }, 5000)

    function nextImage(){
        count++
        if(count > 3){
            count = 1
        }
    document.getElementById('radio'+count).checked = true
    }

    var search = document.getElementById('pesquisar')

        //Adicionando um evento para o elemento aramazenado em 'search', para quando a tecla 'Enter' for pressionada executar a função searchdata()
        search.addEventListener("keydown", (event) => {
            if(event.key === "Enter"){
                searchData()
            }
        })

        //Função que passa para a url o que foi digitado no campo de pesquisa
        function searchData(){
            window.location = `sistema.php?search=${search.value}`
        }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
