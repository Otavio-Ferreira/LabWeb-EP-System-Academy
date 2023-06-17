<?php
  session_start();
  $email = $_SESSION['email'];
  $valor = trim($email);
  $tabelaUser = str_replace(array('.', '@'), "", $valor);

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
          $personal = $user_data['personal'];
          $objetivo = $user_data['objetivo'];
          $nivel = $user_data['nivel'];

          $grupoSegunda = $user_data['grupoSegunda'];
          $treino = $user_data['treinoSegunda'];
          $serie = $user_data['serieSegunda'];
          $repeticao = $user_data['repeticaoSegunda'];

          $grupoTerca = $user_data['grupoTerca'];
          $treinoT = $user_data['treinoTerca'];
          $serieT = $user_data['serieTerca'];
          $repeticaoT = $user_data['repeticaoTerca'];

          $grupoQuarta = $user_data['grupoQuarta'];
          $treinoQ = $user_data['treinoQuarta'];
          $serieQ = $user_data['serieQuarta'];
          $repeticaoQ = $user_data['repeticaoQuarta'];

          $grupoQuinta = $user_data['grupoQuinta'];
          $treinoq = $user_data['treinoQuinta'];
          $serieq = $user_data['serieQuinta'];
          $repeticaoq = $user_data['repeticaoQuinta'];

          $grupoSexta = $user_data['grupoSexta'];
          $treinoS = $user_data['treinoSexta'];
          $serieS = $user_data['serieSexta'];
          $repeticaoS = $user_data['repeticaoSexta'];

          $grupoSabado = $user_data['grupoSabado'];
          $treinos = $user_data['treinoSabado'];
          $series = $user_data['serieSabado'];
          $repeticaos = $user_data['repeticaoSabado'];
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
    <form action="../php/update.php" method="POST">
      <div class="container d-block justify-content-center w-100 p-3">
        <div class="container d-flex flex-wrap justify-content-center pai">
          <div class="infor">
            <div class="first">
                <input type="text" class="form-control" id="floatingInputAluno" placeholder="Aluno" name="aluno" placeholder="Aluno" value="<?php echo $nome; ?>">
                <input type="text" class="form-control" id="floatingInputPersonal" name="personal" placeholder="Personal" value="<?php echo $personal;?>">
            </div>
            <div class="second">
              <div id="ob">
                <input type="text" class="form-control obj" placeholder="Objetivo" name="objetivo" c value="<?php echo $objetivo; ?>">
              </div>
              <div id="ob2">
                <div class="level">
                  <select name="level" id="level" class="ob3" class="form-control">
                    <option value="Nivel"><?php echo $nivel; ?></option>
                    <option value="Iniciante">Iniciante</option>
                    <option value="Intermediario">Intermediário</option>
                    <option value="Avançado">Avançado</option>
                  </select>
                </div>
                  <input type="hidden" name="id" value=<?php echo $id;?>>
                    <input type="submit" value="Enviar" id="enviarTreino" name="enviarTreino" class="btn btn-light ob3">
              </div>
            </div>
          </div>
        </div>
          <div class="container d-flex justify-content-space-around pai treinos">
              <div class="columns container tabletreinos rounded">
                  <div class="cabeçalho">
                    <label for="treino_a">SEGUNDA-FEIRA</label>
                    <select name="grupoSegunda" class="form-select" id="level"  value="Nível">
                      <option value="Grupo"><?php echo $grupoSegunda; ?></option>
                      <option value="Grupo-A">Grupo-A</option>
                      <option value="Grupo-B">Grupo-B</option>
                      <option value="Grupo-C">Grupo-C</option>
                      <option value="Grupo-D">Grupo-D</option>
                      <option value="Vrupo-E">Grupo-E</option>
                     </select>
                  </div>
                  <div class="caixaInputs">
                    <div class="inputsDaCaixa trei" id="tre1">
                      <label for="">Treinos</label> <br>
                        <input type="text" name="treinoSegunda1">
                        <input type="text" name="treinoSegunda2">
                        <input type="text" name="treinoSegunda3">
                        <input type="text" name="treinoSegunda4">
                        <input type="text" name="treinoSegunda5">
                        <input type="text" name="treinoSegunda6">
                        <input type="text" name="treinoSegunda7">
                        <input type="text" name="treinoSegunda8">
                        <input type="text" name="treinoSegunda9">
                        <input type="text" name="treinoSegunda10">
                        <input type="text" name="treinoSegunda11">
                        <input type="text" name="treinoSegunda12">
                        <input type="text" name="treinoSegunda13">
                        <input type="text" name="treinoSegunda14">
                        <input type="text" name="treinoSegunda15">
                    </div>
                    <div class="inputsDaCaixa ser" id="ser1">
                      <label for="series">Séries</label> <br>
                      <input type="text" name="serieSegunda1">
                      <input type="text" name="serieSegunda2">
                      <input type="text" name="serieSegunda3">
                      <input type="text" name="serieSegunda4">
                      <input type="text" name="serieSegunda5">
                      <input type="text" name="serieSegunda6">
                      <input type="text" name="serieSegunda7">
                      <input type="text" name="serieSegunda8">
                      <input type="text" name="serieSegunda9">
                      <input type="text" name="serieSegunda10">
                      <input type="text" name="serieSegunda11">
                      <input type="text" name="serieSegunda12">
                      <input type="text" name="serieSegunda13">
                      <input type="text" name="serieSegunda14">
                      <input type="text" name="serieSegunda15">
                    </div>
                    <div class="inputsDaCaixa rep" id="rep1">
                      <label for="repeticoes">Repetições</label> <br>
                      <input type="text" name="repeticaoSegunda1">
                      <input type="text" name="repeticaoSegunda2">
                      <input type="text" name="repeticaoSegunda3">
                      <input type="text" name="repeticaoSegunda4">
                      <input type="text" name="repeticaoSegunda5">
                      <input type="text" name="repeticaoSegunda6">
                      <input type="text" name="repeticaoSegunda7">
                      <input type="text" name="repeticaoSegunda8">
                      <input type="text" name="repeticaoSegunda9">
                      <input type="text" name="repeticaoSegunda10">
                      <input type="text" name="repeticaoSegunda11">
                      <input type="text" name="repeticaoSegunda12">
                      <input type="text" name="repeticaoSegunda13">
                      <input type="text" name="repeticaoSegunda14">
                      <input type="text" name="repeticaoSegunda15">
                    </div>
                  </div>
              </div>
              <div class="columns container tabletreinos rounded">
                <div class="cabeçalho">
                  <label for="treino_a">TERÇA-FEIRA</label>
                  <select name="grupoTerca" class="form-select"  id="level"  value="Nível">
                    <option value="Grupo"><?php echo $grupoTerca; ?></option>
                      <option value="Grupo-A">Grupo-A</option>
                      <option value="Grupo-B">Grupo-B</option>
                      <option value="Grupo-C">Grupo-C</option>
                      <option value="Grupo-D">Grupo-D</option>
                      <option value="Grupo-E">Grupo-E</option>
                   </select>
                </div>
                <div class="caixaInputs">
                  <div class="inputsDaCaixa trei">
                    <label for="">Treinos</label> <br>
                    <input type="text" name="treinoTerca1">
                    <input type="text" name="treinoTerca2">
                    <input type="text" name="treinoTerca3">
                    <input type="text" name="treinoTerca4">
                    <input type="text" name="treinoTerca5">
                    <input type="text" name="treinoTerca6">
                    <input type="text" name="treinoTerca7">
                    <input type="text" name="treinoTerca8">
                    <input type="text" name="treinoTerca9">
                    <input type="text" name="treinoTerca10">
                    <input type="text" name="treinoTerca11">
                    <input type="text" name="treinoTerca12">
                    <input type="text" name="treinoTerca13">
                    <input type="text" name="treinoTerca14">
                    <input type="text" name="treinoTerca15">
                  </div>
                  <div class="inputsDaCaixa ser">
                    <label for="series">Séries</label> <br>
                    <input type="text" name="serieTerca1">
                    <input type="text" name="serieTerca2">
                    <input type="text" name="serieTerca3">
                    <input type="text" name="serieTerca4">
                    <input type="text" name="serieTerca5">
                    <input type="text" name="serieTerca6">
                    <input type="text" name="serieTerca7">
                    <input type="text" name="serieTerca8">
                    <input type="text" name="serieTerca9">
                    <input type="text" name="serieTerca10">
                    <input type="text" name="serieTerca11">
                    <input type="text" name="serieTerca12">
                    <input type="text" name="serieTerca13">
                    <input type="text" name="serieTerca14">
                    <input type="text" name="serieTerca15">
                  </div>
                  <div class="inputsDaCaixa rep">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text" name="repeticaoTerca1">
                    <input type="text" name="repeticaoTerca2">
                    <input type="text" name="repeticaoTerca3">
                    <input type="text" name="repeticaoTerca4">
                    <input type="text" name="repeticaoTerca5">
                    <input type="text" name="repeticaoTerca6">
                    <input type="text" name="repeticaoTerca7">
                    <input type="text" name="repeticaoTerca8">
                    <input type="text" name="repeticaoTerca9">
                    <input type="text" name="repeticaoTerca10">
                    <input type="text" name="repeticaoTerca11">
                    <input type="text" name="repeticaoTerca12">
                    <input type="text" name="repeticaoTerca13">
                    <input type="text" name="repeticaoTerca14">
                    <input type="text" name="repeticaoTerca15">
                  </div>
                </div>
            </div>
              <div class="columns container tabletreinos rounded">
                  <div class="cabeçalho">
                    <label for="treino_a">QUARTA-FEIRA</label>
                    <select name="grupoQuarta" class="form-select"  id="level"  value="Nível">
                      <option value="Grupo"><?php echo $grupoQuarta; ?></option>
                      <option value="Grupo-A">Grupo-A</option>
                      <option value="Grupo-B">Grupo-B</option>
                      <option value="Grupo-C">Grupo-C</option>
                      <option value="Grupo-D">Grupo-D</option>
                      <option value="Grupo-E">Grupo-E</option>
                     </select>
                  </div>
                  <div class="caixaInputs">
                  <div class="inputsDaCaixa trei">
                    <label for="">Treinos</label> <br>
                    <input type="text" name="treinoQuarta1">
                    <input type="text" name="treinoQuarta2">
                    <input type="text" name="treinoQuarta3">
                    <input type="text" name="treinoQuarta4">
                    <input type="text" name="treinoQuarta5">
                    <input type="text" name="treinoQuarta6">
                    <input type="text" name="treinoQuarta7">
                    <input type="text" name="treinoQuarta8">
                    <input type="text" name="treinoQuarta9">
                    <input type="text" name="treinoQuarta10">
                    <input type="text" name="treinoQuarta11">
                    <input type="text" name="treinoQuarta12">
                    <input type="text" name="treinoQuarta13">
                    <input type="text" name="treinoQuarta14">
                    <input type="text" name="treinoQuarta15">
                  </div>
                  <div class="inputsDaCaixa ser">
                    <label for="series">Séries</label> <br>
                    <input type="text" name="serieQuarta1">
                    <input type="text" name="serieQuarta2">
                    <input type="text" name="serieQuarta3">
                    <input type="text" name="serieQuarta4">
                    <input type="text" name="serieQuarta5">
                    <input type="text" name="serieQuarta6">
                    <input type="text" name="serieQuarta7">
                    <input type="text" name="serieQuarta8">
                    <input type="text" name="serieQuarta9">
                    <input type="text" name="serieQuarta10">
                    <input type="text" name="serieQuarta11">
                    <input type="text" name="serieQuarta12">
                    <input type="text" name="serieQuarta13">
                    <input type="text" name="serieQuarta14">
                    <input type="text" name="serieQuarta15">
                  </div>
                  <div class="inputsDaCaixa rep">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text" name="repeticaoQuarta1">
                    <input type="text" name="repeticaoQuarta2">
                    <input type="text" name="repeticaoQuarta3">
                    <input type="text" name="repeticaoQuarta4">
                    <input type="text" name="repeticaoQuarta5">
                    <input type="text" name="repeticaoQuarta6">
                    <input type="text" name="repeticaoQuarta7">
                    <input type="text" name="repeticaoQuarta8">
                    <input type="text" name="repeticaoQuarta9">
                    <input type="text" name="repeticaoQuarta10">
                    <input type="text" name="repeticaoQuarta11">
                    <input type="text" name="repeticaoQuarta12">
                    <input type="text" name="repeticaoQuarta13">
                    <input type="text" name="repeticaoQuarta14">
                    <input type="text" name="repeticaoQuarta15">
                  </div>
                </div>
              </div>
              <div class="columns container tabletreinos rounded">
                  <div class="cabeçalho">
                    <label for="treino_a">QUINTA-FEIRA</label>
                    <select name="grupoQuinta" class="form-select"  id="level"  value="Nível">
                      <option value="Grupo"><?php echo $grupoQuinta; ?></option>
                      <option value="Grupo-A">Grupo-A</option>
                      <option value="Grupo-B">Grupo-B</option>
                      <option value="Grupo-C">Grupo-C</option>
                      <option value="Grupo-D">Grupo-D</option>
                      <option value="Grupo-E">Grupo-E</option>
                     </select>
                  </div>
                  <div class="caixaInputs">
                  <div class="inputsDaCaixa trei">
                    <label for="">Treinos</label> <br>
                    <input type="text" name="treinoQuinta1">
                    <input type="text" name="treinoQuinta2">
                    <input type="text" name="treinoQuinta3">
                    <input type="text" name="treinoQuinta4">
                    <input type="text" name="treinoQuinta5">
                    <input type="text" name="treinoQuinta6">
                    <input type="text" name="treinoQuinta7">
                    <input type="text" name="treinoQuinta8">
                    <input type="text" name="treinoQuinta9">
                    <input type="text" name="treinoQuinta10">
                    <input type="text" name="treinoQuinta11">
                    <input type="text" name="treinoQuinta12">
                    <input type="text" name="treinoQuinta13">
                    <input type="text" name="treinoQuinta14">
                    <input type="text" name="treinoQuinta15">
                  </div>
                  <div class="inputsDaCaixa ser">
                    <label for="series">Séries</label> <br>
                    <input type="text" name="serieQuinta1">
                    <input type="text" name="serieQuinta2">
                    <input type="text" name="serieQuinta3">
                    <input type="text" name="serieQuinta4">
                    <input type="text" name="serieQuinta5">
                    <input type="text" name="serieQuinta6">
                    <input type="text" name="serieQuinta7">
                    <input type="text" name="serieQuinta8">
                    <input type="text" name="serieQuinta9">
                    <input type="text" name="serieQuinta10">
                    <input type="text" name="serieQuinta11">
                    <input type="text" name="serieQuinta12">
                    <input type="text" name="serieQuinta13">
                    <input type="text" name="serieQuinta14">
                    <input type="text" name="serieQuinta15">
                  </div>
                  <div class="inputsDaCaixa rep">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text" name="repeticaoQuinta1">
                    <input type="text" name="repeticaoQuinta2">
                    <input type="text" name="repeticaoQuinta3">
                    <input type="text" name="repeticaoQuinta4">
                    <input type="text" name="repeticaoQuinta5">
                    <input type="text" name="repeticaoQuinta6">
                    <input type="text" name="repeticaoQuinta7">
                    <input type="text" name="repeticaoQuinta8">
                    <input type="text" name="repeticaoQuinta9">
                    <input type="text" name="repeticaoQuinta10">
                    <input type="text" name="repeticaoQuinta11">
                    <input type="text" name="repeticaoQuinta12">
                    <input type="text" name="repeticaoQuinta13">
                    <input type="text" name="repeticaoQuinta14">
                    <input type="text" name="repeticaoQuinta15">
                  </div>
                </div>
              </div>
              <div class="columns container tabletreinos rounded">
                <div class="cabeçalho">
                  <label for="treino_a">SEXTA-FEIRA</label>
                  <select name="grupoSexta" class="form-select" id="level"  value="Nível">
                    <option value="Grupo"><?php echo $grupoSexta; ?></option>
                      <option value="Grupo-A">Grupo-A</option>
                      <option value="Grupo-B">Grupo-B</option>
                      <option value="Grupo-C">Grupo-C</option>
                      <option value="Grupo-D">Grupo-D</option>
                      <option value="Grupo-E">Grupo-E</option>
                   </select>
                </div>
                <div class="caixaInputs">
                  <div class="inputsDaCaixa trei">
                    <label for="">Treinos</label> <br>
                    <input type="text" name="treinoSexta1">
                    <input type="text" name="treinoSexta2">
                    <input type="text" name="treinoSexta3">
                    <input type="text" name="treinoSexta4">
                    <input type="text" name="treinoSexta5">
                    <input type="text" name="treinoSexta6">
                    <input type="text" name="treinoSexta7">
                    <input type="text" name="treinoSexta8">
                    <input type="text" name="treinoSexta9">
                    <input type="text" name="treinoSexta10">
                    <input type="text" name="treinoSexta11">
                    <input type="text" name="treinoSexta12">
                    <input type="text" name="treinoSexta13">
                    <input type="text" name="treinoSexta14">
                    <input type="text" name="treinoSexta15">
                  </div>
                  <div class="inputsDaCaixa ser">
                    <label for="series">Séries</label> <br>
                    <input type="text" name="serieSexta1">
                    <input type="text" name="serieSexta2">
                    <input type="text" name="serieSexta3">
                    <input type="text" name="serieSexta4">
                    <input type="text" name="serieSexta5">
                    <input type="text" name="serieSexta6">
                    <input type="text" name="serieSexta7">
                    <input type="text" name="serieSexta8">
                    <input type="text" name="serieSexta9">
                    <input type="text" name="serieSexta10">
                    <input type="text" name="serieSexta11">
                    <input type="text" name="serieSexta12">
                    <input type="text" name="serieSexta13">
                    <input type="text" name="serieSexta14">
                    <input type="text" name="serieSexta15">
                  </div>
                  <div class="inputsDaCaixa rep">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text" name="repeticaoSexta1">
                    <input type="text" name="repeticaoSexta2">
                    <input type="text" name="repeticaoSexta3">
                    <input type="text" name="repeticaoSexta4">
                    <input type="text" name="repeticaoSexta5">
                    <input type="text" name="repeticaoSexta6">
                    <input type="text" name="repeticaoSexta7">
                    <input type="text" name="repeticaoSexta8">
                    <input type="text" name="repeticaoSexta9">
                    <input type="text" name="repeticaoSexta10">
                    <input type="text" name="repeticaoSexta11">
                    <input type="text" name="repeticaoSexta12">
                    <input type="text" name="repeticaoSexta13">
                    <input type="text" name="repeticaoSexta14">
                    <input type="text" name="repeticaoSexta15">
                  </div>
                </div>
            </div>
                <div class="columns container tabletreinos rounded">
                  <div class="cabeçalho">
                    <label for="treino_a">SÁBADO</label>
                    <select name="grupoSabado" class="form-select" id="level"  value="Nível">
                      <option value="Grupo"><?php echo $grupoSabado; ?></option>
                      <option value="Grupo-A">Grupo-A</option>
                      <option value="Grupo-B">Grupo-B</option>
                      <option value="Grupo-C">Grupo-C</option>
                      <option value="Grupo-D">Grupo-D</option>
                      <option value="Grupo-E">Grupo-E</option>
                     </select>
                  </div>
                  <div class="caixaInputs">
                  <div class="inputsDaCaixa trei">
                    <label for="">Treinos</label> <br>
                    <input type="text" name="treinoSabado1">
                    <input type="text" name="treinoSabado2">
                    <input type="text" name="treinoSabado3">
                    <input type="text" name="treinoSabado4">
                    <input type="text" name="treinoSabado5">
                    <input type="text" name="treinoSabado6">
                    <input type="text" name="treinoSabado7">
                    <input type="text" name="treinoSabado8">
                    <input type="text" name="treinoSabado9">
                    <input type="text" name="treinoSabado10">
                    <input type="text" name="treinoSabado11">
                    <input type="text" name="treinoSabado12">
                    <input type="text" name="treinoSabado13">
                    <input type="text" name="treinoSabado14">
                    <input type="text" name="treinoSabado15">
                  </div>
                  <div class="inputsDaCaixa ser">
                    <label for="series">Séries</label> <br>
                    <input type="text" name="serieSabado1">
                    <input type="text" name="serieSabado2">
                    <input type="text" name="serieSabado3">
                    <input type="text" name="serieSabado4">
                    <input type="text" name="serieSabado5">
                    <input type="text" name="serieSabado6">
                    <input type="text" name="serieSabado7">
                    <input type="text" name="serieSabado8">
                    <input type="text" name="serieSabado9">
                    <input type="text" name="serieSabado10">
                    <input type="text" name="serieSabado11">
                    <input type="text" name="serieSabado12">
                    <input type="text" name="serieSabado13">
                    <input type="text" name="serieSabado14">
                    <input type="text" name="serieSabado15">
                  </div>
                  <div class="inputsDaCaixa rep">
                    <label for="repeticoes">Repetições</label> <br>
                    <input type="text" name="repeticaoSabado1">
                    <input type="text" name="repeticaoSabado2">
                    <input type="text" name="repeticaoSabado3">
                    <input type="text" name="repeticaoSabado4">
                    <input type="text" name="repeticaoSabado5">
                    <input type="text" name="repeticaoSabado6">
                    <input type="text" name="repeticaoSabado7">
                    <input type="text" name="repeticaoSabado8">
                    <input type="text" name="repeticaoSabado9">
                    <input type="text" name="repeticaoSabado10">
                    <input type="text" name="repeticaoSabado11">
                    <input type="text" name="repeticaoSabado12">
                    <input type="text" name="repeticaoSabado13">
                    <input type="text" name="repeticaoSabado14">
                    <input type="text" name="repeticaoSabado15">
                  </div>
                </div>
          </div>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../javascript/treinos.js"></script>
    </body>
</html>