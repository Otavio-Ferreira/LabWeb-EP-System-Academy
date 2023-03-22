<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0thek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../css/styleTreino.css">
    <link rel="stylesheet" href="../css/styleSistema.css">
    <link rel="stylesheet" href="../css/styleResponsive.css">
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
        <div class="container d-block justify-content-center w-100 p-3">
          <div class="container d-flex justify-content-between  headerTreino">
            <div class="lo">
              <img src="../img/logoTreino.png" width="200">
            </div>
            <div class="infor">
              <div class="first">
                <input type="text" placeholder="Aluno">
                <input type="text" placeholder="Personal" >
              </div>
              <div class="second">
                <input type="text" placeholder="Objetivo" class="obj" >
              </div>
          </div>
        </div>
        <div class="container d-flex justify-content-between pai treinos">
          <div class="columns container tabletreinos rounded">
              <label for="treino_a">Treino A</label>
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
              <input type="text">
          </div>
          <div class="columns container tabletreinos rounded">
            <label for="treino_b">Treino B</label>
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
          </div>
          <div class="columns container tabletreinos rounded">
            <label for="treino_C">Treino C</label>
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
          </div>
          <div class="columns container tabletreinos rounded">
            <label for="treino_D">Treino D</label>
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
          </div>
          <div class="columns container tabletreinos rounded">
            <label for="treino_E">Treino E</label>
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
          </div>
        </div>  <br><br>
             <div class="container d-flex justify-content-center">
          <input type="submit" value="Enviar" class="btn bt" onclick="window.print()">
        </div>
            </div>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>