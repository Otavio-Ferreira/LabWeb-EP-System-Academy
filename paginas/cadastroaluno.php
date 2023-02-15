<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleCadaluno.css">
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
                <a class="nav-link" href="#">Treino Personalizado</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="#">Sair</a>
              </li>
          </div>
          <div class="offcanvas-footer">
              <img src="img/logo-p.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main class="d-flex justify-content-center w-100">
        <form method="POST" action="" class="d-flex justify-content-around w-75 p-3 ">
        
              <div class="container p-2 rounded-start">
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Nome:</label>
                  <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputaEmail" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="exampleInputaEmail">
                </div>
                <div class="mb-3">
                  <label for="exampleInputIdade" class="form-label">Idade:</label>
                  <input type="number" min="1" class="form-control" id="exampleInput
                  idade" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEndereco" class="form-label">Endereço:</label>
                  <input type="text" class="form-control" id="exampleInputEndereco">
                </div>
              </div>
        
              <div class="container p-2 rounded-end">
                <div class="mb-3">
                  <label for="exampleInputTelefone" class="form-label">Telefone:</label>
                  <input type="text" class="form-control" id="exampleInputTelefone">
                </div>
                <div class="mb-3">
                  <label for="exampleInputValormensalidade" class="form-label">Valor da mensalidade:</label>
                  <input type="text" class="form-control" id="exampleInputaValorMensalidade">
                </div>
                <div class="mb-3">
                  <label for="exampleInputaDate" class="form-label">Data de Inscrição:</label>
                  <input type="date" class="form-control" id="exampleInputaDate">
                </div>
                <div class="mb-3 d-flex justify-content-evenly border m-auto p-3 mb-2 bg-white text-dark rounded-2">
                  <label class="form-label">Sexo:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Feminino</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Masculino</label>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <input type="submit" class="btn bg-dark text-white" value="Cadastrar Aluno">
                </div>
              </div>
      
          </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>




