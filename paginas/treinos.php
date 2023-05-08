<?php
  session_start();
  $logado = $_SESSION['email'];
  $senha = $_SESSION['senha'];
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
                    <a class="nav-link" href="treinos.php">Treino Personalizado</a>
                  </li>
                  <li class="nav-item naveg">
                    <a class="nav-link" href="conta.php">Acessar Conta</a>
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
    <div class="container d-block justify-content-center w-100 p-3">
      <div class="container d-flex flex-wrap justify-content-center pai">
        <div class="infor">
          <div class="first">
            <input type="text" placeholder="Aluno" >
            <input type="text" placeholder="Personal" >
          </div>
          <div class="second">
            <div id="ob">
              <input type="text" placeholder="Objetivo" class="obj">
            </div>
            <div id="ob2">
              <div class="level">
                <select name="levels" id="level" class="ob3">
                  <option value="nivel">Nível</option>
                  <option value="iniciante">iniciante</option>
                  <option value="intermediario">Intermediário</option>
                  <option value="avançado">Avançado</option>
                </select>
              </div>
                  <input type="submit" value="Enviar" class="btn btn-light ob3" onclick="window.print()">
            </div>          
          </div>
        </div>
      </div>

        <div class="container d-flex justify-content-space-around pai treinos">

            <div class="columns container tabletreinos rounded">
                <div class="cabeçalho">
                  <label for="treino_a">SEGUNDA-FEIRA</label>
                  <select name="levels" class="form-select" id="level"  value="Nível">
                    <option value="grupo">Grupo</option>
                    <option value="grupoA">Grupo-A</option>
                    <option value="grupoB">Grupo-B</option>
                    <option value="grupoC">Grupo-C</option>
                    <option value="grupoD">Grupo-D</option>
                    <option value="grupoE">Grupo-E</option>       
                   </select>
                </div>
                <div class="caixaInputs">
                  <div class="inputsDaCaixa trei" id="tre1">
                    <label for="">Treinos</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa ser" id="ser1">
                    <label for="series">Séries</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa rep" id="rep1">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square-fill m-1" viewBox="0 0 16 16" onclick="add(1)" >
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                </svg>
            </div>
            
            <div class="columns container tabletreinos rounded">
              <div class="cabeçalho">
                <label for="treino_a">TERÇA-FEIRA</label>
                <select name="levels" class="form-select"  id="level"  value="Nível">
                  <option value="grupo">Grupo</option>
                    <option value="grupoA">Grupo-A</option>
                    <option value="grupoB">Grupo-B</option>
                    <option value="grupoC">Grupo-C</option>
                    <option value="grupoD">Grupo-D</option>
                    <option value="grupoE">Grupo-E</option>       
                 </select>
              </div>
              <div class="caixaInputs">
                <div class="inputsDaCaixa trei" id="tre2">
                  <label for="">Treinos</label> <br>
                  <input type="text">
                  <input type="text">
                  <input type="text">
                  <input type="text">
                </div>
                <div class="inputsDaCaixa ser" id="ser2">
                  <label for="series">Séries</label> <br>
                  <input type="text">
                  <input type="text">
                  <input type="text">
                  <input type="text">
                </div>
                <div class="inputsDaCaixa rep" id="rep2">
                  <label for="repeticoes">Repetições</label> <br>
                  <input type="text">
                  <input type="text">
                  <input type="text">
                  <input type="text">
                </div>
                
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square-fill m-1" viewBox="0 0 16 16" onclick="add(2)" >
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
              </svg>
          </div>

            <div class="columns container tabletreinos rounded">
                <div class="cabeçalho">
                  <label for="treino_a">QUARTA-FEIRA</label>
                  <select name="levels" class="form-select"  id="level"  value="Nível">
                    <option value="grupo">Grupo</option>
                    <option value="grupoA">Grupo-A</option>
                    <option value="grupoB">Grupo-B</option>
                    <option value="grupoC">Grupo-C</option>
                    <option value="grupoD">Grupo-D</option>
                    <option value="grupoE">Grupo-E</option>       
                   </select>
                </div>
                <div class="caixaInputs">
                  <div class="inputsDaCaixa trei" id="tre3">
                    <label for="">Treinos</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa ser" id="ser3">
                    <label for="series">Séries</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa rep" id="rep3">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square-fill m-1" viewBox="0 0 16 16" onclick="add(3)" >
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                </svg>
            </div>

            <div class="columns container tabletreinos rounded">
                <div class="cabeçalho">
                  <label for="treino_a">QUINTA-FEIRA</label>
                  <select name="levels" class="form-select"  id="level"  value="Nível">
                    <option value="grupo">Grupo</option>
                    <option value="grupoA">Grupo-A</option>
                    <option value="grupoB">Grupo-B</option>
                    <option value="grupoC">Grupo-C</option>
                    <option value="grupoD">Grupo-D</option>
                    <option value="grupoE">Grupo-E</option>       
                   </select>
                </div>
                <div class="caixaInputs">
                  <div class="inputsDaCaixa trei" id="tre4">
                    <label for="">Treinos</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa ser" id="ser4">
                    <label for="series">Séries</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa rep" id="rep4">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square-fill m-1" viewBox="0 0 16 16" onclick="add(4)" >
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                </svg>
                
            </div>

            <div class="columns container tabletreinos rounded">
              <div class="cabeçalho">
                <label for="treino_a">SEXTA-FEIRA</label>
                <select name="levels" class="form-select" id="level"  value="Nível">
                  <option value="grupo">Grupo</option>
                    <option value="grupoA">Grupo-A</option>
                    <option value="grupoB">Grupo-B</option>
                    <option value="grupoC">Grupo-C</option>
                    <option value="grupoD">Grupo-D</option>
                    <option value="grupoE">Grupo-E</option>       
                 </select>
              </div>
              <div class="caixaInputs">
                <div class="inputsDaCaixa trei" id="tre5">
                  <label for="">Treinos</label> <br>
                  <input type="text">
                  <input type="text">
                  <input type="text">
                  <input type="text">
                </div>
                <div class="inputsDaCaixa ser" id="ser5">
                  <label for="series">Séries</label> <br>
                  <input type="text">
                  <input type="text">
                  <input type="text">
                  <input type="text">
                </div>
                <div class="inputsDaCaixa rep" id="rep5">
                  <label for="repeticoes">Repetições</label> <br>
                  <input type="text">
                  <input type="text">
                  <input type="text">
                  <input type="text">
                </div>
                
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square-fill m-1" viewBox="0 0 16 16" onclick="add(5)" >
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
              </svg>
          </div>

              <div class="columns container tabletreinos rounded">
                <div class="cabeçalho">
                  <label for="treino_a">SÁBADO</label>
                  <select name="levels" class="form-select" id="level"  value="Nível">
                    <option value="grupo">Grupo</option>
                    <option value="grupoA">Grupo-A</option>
                    <option value="grupoB">Grupo-B</option>
                    <option value="grupoC">Grupo-C</option>
                    <option value="grupoD">Grupo-D</option>
                    <option value="grupoE">Grupo-E</option>       
                   </select>
                </div>
                <div class="caixaInputs">
                  <div class="inputsDaCaixa trei" id="tre6">
                    <label for="">Treinos</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa ser" id="ser6">
                    <label for="series">Séries</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  <div class="inputsDaCaixa rep" id="rep6">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                  </div>
                  
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square-fill m-1" viewBox="0 0 16 16" onclick="add(6)" >
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                </svg>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../javascript/treinos.js"></script>
    </body>
</html>