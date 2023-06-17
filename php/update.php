<?php
    session_start();
    $email = $_SESSION['email'];
    $valor = trim($email);
    $tabelaUser = str_replace(array('.', '@'), "", $valor);
       //Incluindo arquivo de conexão ao banco
       include_once('configData.php');

       //se houver um post com id = upadate
       if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senhaAluno = $_POST['senhaAluno'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $situacao = $_POST['situacao'];
        $telefone = $_POST['telefone'];
        $mensalidade = $_POST['mensalidade'];
        $inscricao = $_POST['inscricao'];
        $sexo = $_POST['genero'];

        $sqlInsert = "UPDATE $tabelaUser
        SET nome='$nome',email='$email', senhaAluno='$senhaAluno',idade='$idade',endereco='$endereco',telefone='$telefone',mensalidade='$mensalidade',inscricao='$inscricao',sexo='$sexo', situacao='$situacao' WHERE id='$id'";

        $result = $conexao->query($sqlInsert);
        }
        else if(isset($_POST['submitUm'])){
            $id = $_POST['id'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $cintura = $_POST['cintura'];
            $quadril = $_POST['quadril'];
            $coxa = $_POST['coxa'];
            $gordura = $_POST['gordura'];
            $observacoes = $_POST['observacao'];

            $sqlInsertUm = "UPDATE $tabelaUser
            SET peso='$peso',altura='$altura', cintura='$cintura',quadril='$quadril',coxa='$coxa',gordura='$gordura',observacoes='$observacoes' WHERE id='$id'";

            $result = $conexao->query($sqlInsertUm);
        }
        else if(isset($_POST['submitDois'])){
            $id = $_POST['id'];
            $dataAvaliacao = $_POST['inscricaoAtual'];
            $pesoAtual = $_POST['pesoAtual'];
            $alturaAtual = $_POST['alturaAtual'];
            $cinturaAtual = $_POST['cinturaAtual'];
            $quadrilAtual = $_POST['quadrilAtual'];
            $coxaAtual = $_POST['coxaAtual'];
            $gorduraAtual = $_POST['gorduraAtual'];
            $observacoesAtual = $_POST['observacaoAtual'];

            $sqlInsertDois = "UPDATE $tabelaUser
            SET dataAvaliacao='$dataAvaliacao',pesoAtual='$pesoAtual',alturaAtual='$alturaAtual', cinturaAtual='$cinturaAtual', quadrilAtual='$quadrilAtual', coxaAtual='$coxaAtual', gorduraAtual='$gorduraAtual', observacoesAtual='$observacoesAtual' WHERE id='$id'";

            $result = $conexao->query($sqlInsertDois);
        }
        else if(isset($_POST['enviarTreino'])){
            $id = $_POST['id'];
            $personal = $_POST['personal'];
            $objetivo = $_POST['objetivo'];
            $level = $_POST['level'];

            //Segunda feira
            $grupoSegunda = $_POST['grupoSegunda'];

            $treinoSegunda = $_POST['treinoSegunda1'].'<br>'.$_POST['treinoSegunda2'].'<br>'.$_POST['treinoSegunda3'].'<br>'.$_POST['treinoSegunda4'].'<br>'.$_POST['treinoSegunda5'].'<br>'.$_POST['treinoSegunda6'].'<br>'.$_POST['treinoSegunda7'].'<br>'.$_POST['treinoSegunda8'].'<br>'.$_POST['treinoSegunda9'].'<br>'.$_POST['treinoSegunda10'].'<br>'.$_POST['treinoSegunda11'].'<br>'.$_POST['treinoSegunda12'].'<br>'.$_POST['treinoSegunda13'].'<br>'.$_POST['treinoSegunda14'].'<br>'.$_POST['treinoSegunda15']; 

            $serieSegunda = $_POST['serieSegunda1'].'<br>'.$_POST['serieSegunda2'].'<br>'.$_POST['serieSegunda3'].'<br>'.$_POST['serieSegunda4'].'<br>'.$_POST['serieSegunda5'].'<br>'.$_POST['serieSegunda6'].'<br>'.$_POST['serieSegunda7'].'<br>'.$_POST['serieSegunda8'].'<br>'.$_POST['serieSegunda9'].'<br>'.$_POST['serieSegunda10'].'<br>'.$_POST['serieSegunda11'].'<br>'.$_POST['serieSegunda12'].'<br>'.$_POST['serieSegunda13'].'<br>'.$_POST['serieSegunda14'].'<br>'.$_POST['serieSegunda15']; 


            $repeticaoSegunda = $_POST['repeticaoSegunda1'].'<br>'.$_POST['repeticaoSegunda2'].'<br>'.$_POST['repeticaoSegunda3'].'<br>'.$_POST['repeticaoSegunda4'].'<br>'.$_POST['repeticaoSegunda5'].'<br>'.$_POST['repeticaoSegunda6'].'<br>'.$_POST['repeticaoSegunda7'].'<br>'.$_POST['repeticaoSegunda8'].'<br>'.$_POST['repeticaoSegunda9'].'<br>'.$_POST['repeticaoSegunda10'].'<br>'.$_POST['repeticaoSegunda11'].'<br>'.$_POST['repeticaoSegunda12'].'<br>'.$_POST['repeticaoSegunda13'].'<br>'.$_POST['repeticaoSegunda14'].'<br>'.$_POST['repeticaoSegunda15'];

            //Terca feira

            $grupoTerca = $_POST['grupoTerca'];

            $treinoTerca = $_POST['treinoTerca1'].'<br>'.$_POST['treinoTerca2'].'<br>'.$_POST['treinoTerca3'].'<br>'.$_POST['treinoTerca4'].'<br>'.$_POST['treinoTerca5'].'<br>'.$_POST['treinoTerca6'].'<br>'.$_POST['treinoTerca7'].'<br>'.$_POST['treinoTerca8'].'<br>'.$_POST['treinoTerca9'].'<br>'.$_POST['treinoTerca10'].'<br>'.$_POST['treinoTerca11'].'<br>'.$_POST['treinoTerca12'].'<br>'.$_POST['treinoTerca13'].'<br>'.$_POST['treinoTerca14'].'<br>'.$_POST['treinoTerca15']; 

            $serieTerca = $_POST['serieTerca1'].'<br>'.$_POST['serieTerca2'].'<br>'.$_POST['serieTerca3'].'<br>'.$_POST['serieTerca4'].'<br>'.$_POST['serieTerca5'].'<br>'.$_POST['serieTerca6'].'<br>'.$_POST['serieTerca7'].'<br>'.$_POST['serieTerca8'].'<br>'.$_POST['serieTerca9'].'<br>'.$_POST['serieTerca10'].'<br>'.$_POST['serieTerca11'].'<br>'.$_POST['serieTerca12'].'<br>'.$_POST['serieTerca13'].'<br>'.$_POST['serieTerca14'].'<br>'.$_POST['serieTerca15']; 


            $repeticaoTerca = $_POST['repeticaoTerca1'].'<br>'.$_POST['repeticaoTerca2'].'<br>'.$_POST['repeticaoTerca3'].'<br>'.$_POST['repeticaoTerca4'].'<br>'.$_POST['repeticaoTerca5'].'<br>'.$_POST['repeticaoTerca6'].'<br>'.$_POST['repeticaoTerca7'].'<br>'.$_POST['repeticaoTerca8'].'<br>'.$_POST['repeticaoTerca9'].'<br>'.$_POST['repeticaoTerca10'].'<br>'.$_POST['repeticaoTerca11'].'<br>'.$_POST['repeticaoTerca12'].'<br>'.$_POST['repeticaoTerca13'].'<br>'.$_POST['repeticaoTerca14'].'<br>'.$_POST['repeticaoTerca15'];

            //quarta feira

            $grupoQuarta = $_POST['grupoQuarta'];

            $treinoQuarta = $_POST['treinoQuarta1'].'<br>'.$_POST['treinoQuarta2'].'<br>'.$_POST['treinoQuarta3'].'<br>'.$_POST['treinoQuarta4'].'<br>'.$_POST['treinoQuarta5'].'<br>'.$_POST['treinoQuarta6'].'<br>'.$_POST['treinoQuarta7'].'<br>'.$_POST['treinoQuarta8'].'<br>'.$_POST['treinoQuarta9'].'<br>'.$_POST['treinoQuarta10'].'<br>'.$_POST['treinoQuarta11'].'<br>'.$_POST['treinoQuarta12'].'<br>'.$_POST['treinoQuarta13'].'<br>'.$_POST['treinoQuarta14'].'<br>'.$_POST['treinoQuarta15']; 

            $serieQuarta = $_POST['serieQuarta1'].'<br>'.$_POST['serieQuarta2'].'<br>'.$_POST['serieQuarta3'].'<br>'.$_POST['serieQuarta4'].'<br>'.$_POST['serieQuarta5'].'<br>'.$_POST['serieQuarta6'].'<br>'.$_POST['serieQuarta7'].'<br>'.$_POST['serieQuarta8'].'<br>'.$_POST['serieQuarta9'].'<br>'.$_POST['serieQuarta10'].'<br>'.$_POST['serieQuarta11'].'<br>'.$_POST['serieQuarta12'].'<br>'.$_POST['serieQuarta13'].'<br>'.$_POST['serieQuarta14'].'<br>'.$_POST['serieQuarta15']; 


            $repeticaoQuarta = $_POST['repeticaoQuarta1'].'<br>'.$_POST['repeticaoQuarta2'].'<br>'.$_POST['repeticaoQuarta3'].'<br>'.$_POST['repeticaoQuarta4'].'<br>'.$_POST['repeticaoQuarta5'].'<br>'.$_POST['repeticaoQuarta6'].'<br>'.$_POST['repeticaoQuarta7'].'<br>'.$_POST['repeticaoQuarta8'].'<br>'.$_POST['repeticaoQuarta9'].'<br>'.$_POST['repeticaoQuarta10'].'<br>'.$_POST['repeticaoQuarta11'].'<br>'.$_POST['repeticaoQuarta12'].'<br>'.$_POST['repeticaoQuarta13'].'<br>'.$_POST['repeticaoQuarta14'].'<br>'.$_POST['repeticaoQuarta15'];

            //Quinta feira

            $grupoQuinta = $_POST['grupoQuinta'];

            $treinoQuinta = $_POST['treinoQuinta1'].'<br>'.$_POST['treinoQuinta2'].'<br>'.$_POST['treinoQuinta3'].'<br>'.$_POST['treinoQuinta4'].'<br>'.$_POST['treinoQuinta5'].'<br>'.$_POST['treinoQuinta6'].'<br>'.$_POST['treinoQuinta7'].'<br>'.$_POST['treinoQuinta8'].'<br>'.$_POST['treinoQuinta9'].'<br>'.$_POST['treinoQuinta10'].'<br>'.$_POST['treinoQuinta11'].'<br>'.$_POST['treinoQuinta12'].'<br>'.$_POST['treinoQuinta13'].'<br>'.$_POST['treinoQuinta14'].'<br>'.$_POST['treinoQuinta15']; 

            $serieQuinta = $_POST['serieQuinta1'].'<br>'.$_POST['serieQuinta2'].'<br>'.$_POST['serieQuinta3'].'<br>'.$_POST['serieQuinta4'].'<br>'.$_POST['serieQuinta5'].'<br>'.$_POST['serieQuinta6'].'<br>'.$_POST['serieQuinta7'].'<br>'.$_POST['serieQuinta8'].'<br>'.$_POST['serieQuinta9'].'<br>'.$_POST['serieQuinta10'].'<br>'.$_POST['serieQuinta11'].'<br>'.$_POST['serieQuinta12'].'<br>'.$_POST['serieQuinta13'].'<br>'.$_POST['serieQuinta14'].'<br>'.$_POST['serieQuinta15']; 


            $repeticaoQuinta = $_POST['repeticaoQuinta1'].'<br>'.$_POST['repeticaoQuinta2'].'<br>'.$_POST['repeticaoQuinta3'].'<br>'.$_POST['repeticaoQuinta4'].'<br>'.$_POST['repeticaoQuinta5'].'<br>'.$_POST['repeticaoQuinta6'].'<br>'.$_POST['repeticaoQuinta7'].'<br>'.$_POST['repeticaoQuinta8'].'<br>'.$_POST['repeticaoQuinta9'].'<br>'.$_POST['repeticaoQuinta10'].'<br>'.$_POST['repeticaoQuinta11'].'<br>'.$_POST['repeticaoQuinta12'].'<br>'.$_POST['repeticaoQuinta13'].'<br>'.$_POST['repeticaoQuinta14'].'<br>'.$_POST['repeticaoQuinta15'];

            //sexta feira

            $grupoSexta = $_POST['grupoSexta'];

            $treinoSexta = $_POST['treinoSexta1'].'<br>'.$_POST['treinoSexta2'].'<br>'.$_POST['treinoSexta3'].'<br>'.$_POST['treinoSexta4'].'<br>'.$_POST['treinoSexta5'].'<br>'.$_POST['treinoSexta6'].'<br>'.$_POST['treinoSexta7'].'<br>'.$_POST['treinoSexta8'].'<br>'.$_POST['treinoSexta9'].'<br>'.$_POST['treinoSexta10'].'<br>'.$_POST['treinoSexta11'].'<br>'.$_POST['treinoSexta12'].'<br>'.$_POST['treinoSexta13'].'<br>'.$_POST['treinoSexta14'].'<br>'.$_POST['treinoSexta15']; 

            $serieSexta = $_POST['serieSexta1'].'<br>'.$_POST['serieSexta2'].'<br>'.$_POST['serieSexta3'].'<br>'.$_POST['serieSexta4'].'<br>'.$_POST['serieSexta5'].'<br>'.$_POST['serieSexta6'].'<br>'.$_POST['serieSexta7'].'<br>'.$_POST['serieSexta8'].'<br>'.$_POST['serieSexta9'].'<br>'.$_POST['serieSexta10'].'<br>'.$_POST['serieSexta11'].'<br>'.$_POST['serieSexta12'].'<br>'.$_POST['serieSexta13'].'<br>'.$_POST['serieSexta14'].'<br>'.$_POST['serieSexta15']; 


            $repeticaoSexta = $_POST['repeticaoSexta1'].'<br>'.$_POST['repeticaoSexta2'].'<br>'.$_POST['repeticaoSexta3'].'<br>'.$_POST['repeticaoSexta4'].'<br>'.$_POST['repeticaoSexta5'].'<br>'.$_POST['repeticaoSexta6'].'<br>'.$_POST['repeticaoSexta7'].'<br>'.$_POST['repeticaoSexta8'].'<br>'.$_POST['repeticaoSexta9'].'<br>'.$_POST['repeticaoSexta10'].'<br>'.$_POST['repeticaoSexta11'].'<br>'.$_POST['repeticaoSexta12'].'<br>'.$_POST['repeticaoSexta13'].'<br>'.$_POST['repeticaoSexta14'].'<br>'.$_POST['repeticaoSexta15'];

            //Sábado

            $grupoSabado = $_POST['grupoSabado'];

            $treinoSabado = $_POST['treinoSabado1'].'<br>'.$_POST['treinoSabado2'].'<br>'.$_POST['treinoSabado3'].'<br>'.$_POST['treinoSabado4'].'<br>'.$_POST['treinoSabado5'].'<br>'.$_POST['treinoSabado6'].'<br>'.$_POST['treinoSabado7'].'<br>'.$_POST['treinoSabado8'].'<br>'.$_POST['treinoSabado9'].'<br>'.$_POST['treinoSabado10'].'<br>'.$_POST['treinoSabado11'].'<br>'.$_POST['treinoSabado12'].'<br>'.$_POST['treinoSabado13'].'<br>'.$_POST['treinoSabado14'].'<br>'.$_POST['treinoSabado15']; 

            $serieSabado = $_POST['serieSabado1'].'<br>'.$_POST['serieSabado2'].'<br>'.$_POST['serieSabado3'].'<br>'.$_POST['serieSabado4'].'<br>'.$_POST['serieSabado5'].'<br>'.$_POST['serieSabado6'].'<br>'.$_POST['serieSabado7'].'<br>'.$_POST['serieSabado8'].'<br>'.$_POST['serieSabado9'].'<br>'.$_POST['serieSabado10'].'<br>'.$_POST['serieSabado11'].'<br>'.$_POST['serieSabado12'].'<br>'.$_POST['serieSabado13'].'<br>'.$_POST['serieSabado14'].'<br>'.$_POST['serieSabado15']; 


            $repeticaoSabado = $_POST['repeticaoSabado1'].'<br>'.$_POST['repeticaoSabado2'].'<br>'.$_POST['repeticaoSabado3'].'<br>'.$_POST['repeticaoSabado4'].'<br>'.$_POST['repeticaoSabado5'].'<br>'.$_POST['repeticaoSabado6'].'<br>'.$_POST['repeticaoSabado7'].'<br>'.$_POST['repeticaoSabado8'].'<br>'.$_POST['repeticaoSabado9'].'<br>'.$_POST['repeticaoSabado10'].'<br>'.$_POST['repeticaoSabado11'].'<br>'.$_POST['repeticaoSabado12'].'<br>'.$_POST['repeticaoSabado13'].'<br>'.$_POST['repeticaoSabado14'].'<br>'.$_POST['repeticaoSabado15'];
           
            //esse daqui edita, a pagina treinos da aba será um visualizador

            $sqlInsertTreino = "UPDATE $tabelaUser
            SET personal='$personal',objetivo='$objetivo',nivel='$level', grupoSegunda='$grupoSegunda', treinoSegunda='$treinoSegunda', serieSegunda='$serieSegunda', repeticaoSegunda='$repeticaoSegunda', grupoTerca='$grupoTerca', treinoTerca='$treinoTerca', serieTerca='$serieTerca', repeticaoTerca='$repeticaoTerca', grupoQuarta='$grupoQuarta', treinoQuarta='$treinoQuarta', serieQuarta='$serieQuarta', repeticaoQuarta='$repeticaoQuarta', grupoQuinta='$grupoQuinta', treinoQuinta='$treinoQuinta', serieQuinta='$serieQuinta', repeticaoQuinta='$repeticaoQuinta', grupoSexta='$grupoSexta', treinoSexta='$treinoSexta', serieSexta='$serieSexta', repeticaoSexta='$repeticaoSexta', grupoSabado='$grupoSabado', treinoSabado='$treinoSabado', serieSabado='$serieSabado', repeticaoSabado='$repeticaoSabado' WHERE id='$id'";

            $result = $conexao->query($sqlInsertTreino);
        }
        header('Location: ../index.php');
    //Utilizar else if para os outros submits
    
    //para o treino jogar os mesmo treino do dia numa mesma linha com um <br> entre os treinos, tambem serve para repeticoes e series
?>