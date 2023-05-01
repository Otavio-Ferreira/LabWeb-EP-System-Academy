<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styleHome.css">
  <link rel="stylesheet" href="../css/styleFooter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="shortcut icon" href="../img/logooficial.png" type="image/x-icon">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container-fluid d-flex justify-content-between">
        <div>
          <span class="link-light">OTHEK <span class="text-warning">SYSTEM ACADEMY</span></span>
        </div>
        <div>
          <a href="#planos" type="button" class="btn btn-outline-light">Assine agora</a>
          <a href="login.php" type="button" class="btn btn-outline-warning">Entrar</a> 
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="car">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/car1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/car2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none w-50 d-md-block">
              <h1 class="titleCar">Sistema de academia completo com diversas funções que vão facilitar o controle de alunos</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/car2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <ul class="lista">
                <li>Cadastre seus alunos em um banco de dados</li>
                <li>Informações dos alunos em primeira mão</li>
                <li>Faça treinos personalizados</li>
              </ul>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </section>
    <section class="container boxOthers">
      <h1 class="title">Othek System Academy</h1>
      <div class="container" id="about">
        <div class="boxSystem">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/cap1.png" class="d-block w-100 imgCap" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/cap2.png" class="d-block w-100 imgCap" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/cap3.png" class="d-block w-100 imgCap" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="boxSystem boxText">
          <p>Othek System Academy é um sistema de gerenciamento de alunos de uma academia, destinado esclusivamente para guarar as informações dos alunos de forma segura, também tendo a funcionalidade de criar treinos rápidos e enviá-los para os alunos em formato de pdf.</p>
        </div>
      </div>
    </section>
    <section class="m-auto container boxOthers" id="planos">
      <h1 class="title">Escolha seu plano</h1>
      <div class="d-flex justify-content-around flex-wrap">
        <div class="card">
          <p class="mes">1 Mês</p>
          <p class="valor">R$ 50,00</p>
          <p class="desconto">Igual a R$ 50,00 por mês</p>
          <button class="btnCard" onclick="plano(1)">Plano Mensal</button>
        </div>
          
        <div class="card">
          <p class="mes">3 Meses</p>
          <p class="valor">R$ 120,00</p>
          <p class="desconto">Igual a R$ 40,00 por mês</p>
          <button class="btnCard" onclick="plano(2)">Plano Trimestral</button>
        </div>
        
        <div class="card">
          <p class="mes">12 Meses</p>
          <p class="valor">R$ 360,00</p>
          <p class="desconto">Igual a R$ 30,00 por mês</p>
          <button class="btnCard" onclick="plano(3)">Plano Anual</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="../javascript/home.js"></script>
</body>
</html>