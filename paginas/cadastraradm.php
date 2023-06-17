<?php
    //essa página cadastra novos usuários
    $plano = $_GET['search'];

    //se houver um post de um subimit
    if(isset($_POST['submit'])){

        //inclue a conexão
        include_once('../php/configData.php');

        //cria variáveis que recebem o valores dos inputs que vinheram com o subimit do post
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $plano = $_POST['plano'];
        $dataInicio = $_POST['dataPagamento'];
        $dataFim = $_POST['dataFim'];
        $codConfirm = $_POST['codConfirm'];

        $sql = "SELECT * FROM users WHERE codeConfirm = '$codConfirm'";
        $resultCod = $conexao->query($sql);

        if(mysqli_num_rows($resultCod) < 1){
            echo "<script> alert('Código de confirmação inválido!'); window.location = `cadastraradm.php?search=${plano}` </script>";
            
        }
        else {

                //variável que recebe o comando para inserir os dados na tabela
                $sqlInsertNewUser = "UPDATE users
                SET nome='$nome',email='$email',senha='$senha',plano='$plano',dataInicio='$dataInicio',dataFim='$dataFim' WHERE codeConfirm='$codConfirm'";

                $result = $conexao->query($sqlInsertNewUser);

                //tratamento do email
                $valor = trim($email);
                $tabelaUser = str_replace(array('.', '@'), "", $valor);
                //echo $tabelaUser;
        
                $sqlCreate = "CREATE TABLE $tabelaUser (id int auto_increment primary key not null,  nome varchar(50),  email varchar(50),  senhaAluno varchar(30), idade int,  endereco varchar(100),  telefone varchar(50),  mensalidade double,  inscricao date,  sexo varchar(20),  situacao varchar(20), peso float, altura float, cintura float, quadril float, coxa float, gordura float, observacoes varchar(200), dataAvaliacao date, pesoAtual float, alturaAtual float, cinturaAtual float, quadrilAtual float, coxaAtual float, gorduraAtual float, observacoesAtual varchar(200), personal varchar(50), objetivo varchar(30), nivel varchar(30), grupoSegunda varchar(30), treinoSegunda varchar(600),  serieSegunda varchar(300),  repeticaoSegunda varchar(300), grupoTerca varchar(30),  treinoTerca varchar(600),  serieTerca varchar(300),  repeticaoTerca varchar(300), grupoQuarta varchar(30),  treinoQuarta varchar(600),  serieQuarta varchar(300),  repeticaoQuarta varchar(300), grupoQuinta varchar(30),  treinoQuinta varchar(600),  serieQuinta varchar(300),  repeticaoQuinta varchar(300), grupoSexta varchar(30),  treinoSexta varchar(600),  serieSexta varchar(300),  repeticaoSexta varchar(300), grupoSabado varchar(30),  treinoSabado varchar(600),  serieSabado varchar(300),  repeticaoSabado varchar(300) );";

                $resultCreate = $conexao->query($sqlCreate);
    
                header('Location: login.php');
        }

        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Personal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleCadAdm.css">
    <link rel="stylesheet" href="../css/styleFooter.css">
</head>
<body onload="opcoesPagamentos()">
    <header>
        <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid d-flex justify-content-between">
            <div>
            <span style="color: white; font-weight: bold; font-size: 25px;">OTHEK <span  style="color: orange; font-weight: bold;">SYSTEM ACADEMY</span></span>
            </div>
            <div>
            <a href="login.php" type="button" class="btn btn-outline-warning">Entrar</a> 
            </div>
        </div>
        </nav>
    </header>
    <main>
        <div id="container">
            <div class="form">
                <form action="cadastraradm.php" method="POST">
                    <div class="caixasForm">
                        <div class="boxInputs">
                            <input type="text" value="<?php echo $plano; ?>" name="plano" id="plano" readonly><a href="home.php#planos" class="bi bi-pencil-square text-dark" id="edit"></a>
                        </div>
                        <div class="boxInputs">
                            <input type="text" placeholder="Nome" name="nome" id="nome" required>
                        </div>
                        <div class="boxInputs">
                            <input type="email" placeholder="Email" name="email" id="email" required>
                        </div>
                        <div class="boxInputs">
                            <div class="boxInputs2">
                                <input type="password" placeholder="Crie uma senha" name="senha" id="senha" required>
                                <i class="bi bi-eye-fill text-dark" id="eye"></i>
                            </div>
                        </div>
                        <div class="boxInputs">
                            <a type="button" href="https://wa.me/5588981865558?text=Olá%2C+vim+pelo+site%2C+acabei+de+efetuar+um+pagamento%2C+segue+o+comprovante." id="enviarComprovante" class="bi bi-whatsapp margin-right-2" target="_blank"> Enviar Comprovante</a>
                        </div>
                        <div class="boxInputs">
                            <div class="boxInputs2">
                                <input type="text" placeholder="Código de confirmação" name="codConfirm" id="codConfirm" required>
                            </div>
                        </div>
                    </div>

                    <div class="caixasForm">
                        <div class="boxInputs" id="boxInputsData">
                            <input type="text" name="dataPagamento" id="dataPagamento" value="" class="inputsData" required style="border-radius: 10px 0px 0px 10px;" readonly>
                            <span id="ate">Até</span>
                            <input type="text" name="dataFim" id="dataFim" value="" class="inputsData" required style="border-radius: 0px 10px 10px 0px;" readonly>
                        </div>
                        <div class="boxInputs">
                            <img src="" id="qrcode" class="w-100" alt="">
                        </div>
                    </div>
                    
                    <div class=" w-100 m-auto">
                        <input type="submit" id="submit" name="submit" value="Cadastrar" class="d-block m-auto" onclick="confirmar()">
                    </div>
                </form>
            </div>
        </div>
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
    <script src="../javascript/cadastraradm.js"></script>
</body>
</html>