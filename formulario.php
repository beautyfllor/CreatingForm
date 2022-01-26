<?php
    //Todo o código em php deve estar entre a tag <?php
    //Escreve um conteúdo na tela
    //echo("Testando PHP");
    //print_r("Testando outra forma de escrever");

    //isset() - verifica a existência de uma variável ou de um objeto

    //Validação para identificar se o botão foi clicado e disponibilizado na ação do GET
    if(isset($_GET["btnSalvar"])) {
        //Recuperando dados via GET do formulário
        $nome = $_GET["txtNome"];
        $cidade = $_GET["sltCidade"];
        $sexo = $_GET["rdoSexo"];
        $obs = $_GET["txtObs"];

        //Foi criado essas variáveis para resolver o problema de variável indefinida na exibição dos dados
        $idiomaPortugues = null;
        $idiomaIngles = null;
        $idiomaEspanhol = null;

        //Recuperando os 'checkbox' que foram selecionados no formulário
        if(isset($_GET["chkPortugues"])) {
            $idiomaPortugues = $_GET["chkPortugues"];
        }

        if(isset($_GET["chkIngles"])) {
            $idiomaIngles = $_GET["chkIngles"];
        }

        if(isset($_GET["chkEspanhol"])) {
            $idiomaEspanhol = $_GET["chkEspanhol"];
        }

        //Escrevendo o conteúdo das variáveis no navegador
        //Concatenação é representado pelo ponto (.)
        echo("<b>Nome:</b> ". $nome . "<br>");
        echo("<b>Cidade:</b> " .$cidade . "<br>");
        echo("<b>Sexo:</b> " .$sexo . "<br>");
        echo("<b>Obs:</b> " .$obs . "<br>");
        echo("<b>Idiomas:</b> " .$idiomaPortugues . " " . $idiomaIngles . " " . $idiomaEspanhol . "<br>");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Formulário</title>
</head>
<body>
        
        <form name="frmCadastro" method="GET" action="index.php">
            <p>Nome:</p> 
            <input type="text" name="txtNome" size="50" maxlength="30">

            <p>Cidade:</p> 
            <select name="sltCidade">
                <option value=""  selected>Selecione um item</option>
                <option value="jandira">Jandira</option>
                <option value="barueri">Barueri</option>
                <option value="itapevi">Itapevi</option>
                <option value="osasco">Osasco</option>
                <option value="carapicuíba">Carapicuíba</option>
            </select>
           
            <p>Sexo:</p>
            <input type="radio" name="rdoSexo" value="F" checked> Feminino
            <input type="radio" name="rdoSexo" value="M"> Masculino
            <input type="radio" name="rdoSexo" value="O"> Outro
            
        <p>Idioma:</p>
        <input type="checkbox" name="chkPortugues" value="PT" checked> Português
        <input type="checkbox" name="chkIngles" value="EN"> Inglês
        <input type="checkbox" name="chkEspanhol" value="ES"> Espanhol

        <p>Observação:</p>
        <textarea name="txtObs" id="" cols="30" rows="5"></textarea>
         
        <input type="submit" name="btnSalvar" value="Salvar">
        <input type="reset" name="btnLimpar" value="Limpar">

    </form>
</body>
</html>
