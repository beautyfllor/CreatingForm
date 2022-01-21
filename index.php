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

            <!--
            A tag 'form' tem no mínimo três elementos/atributos: name, method e action;
            No method, podemos escolher entre GET e POST:
            GET -> permite retirar os dados do formulário e disponibilizar na URL da página - Não é uma boa prática;
            POST -> permite retirar os dados do formulário e disponibilizar em variáveis locais internas/invisíveis;
            action -> é usado para especificar em qual arquivo ou página será disponibilizado os dados do FORM;
        -->
        <!--
            input type "text" - permite colocar uma caixa de texto
            size - especifica o tamanho da caixa
            maxlength - permite configurar  qtde de Caracteres que será digitado na caixa
        -->

            <p>Cidade:</p> 
            <select name="sltCidade">
                <option value=""  selected>Selecione um item</option>
                <option value="jandira">Jandira</option>
                <option value="barueri">Barueri</option>
                <option value="itapevi">Itapevi</option>
                <option value="osasco">Osasco</option>
                <option value="carapicuíba">Carapicuíba</option>
            </select>
            <!--
            <select> -> permite criar uma lista de opções;
                <option> -> através dela podemos criar itens dentro da lista;
                <option value=""> - a propriedade value é obrogatória para que o formulário consiga resgatar o valor do item
                selecionado pelo usuário e disponibilizar para o back-end;
                selected - ao abrir ou atualizar a página, deixa a option selecionada;
        -->

            <p>Sexo:</p>
            <input type="radio" name="rdoSexo" value="F" checked> Feminino
            <input type="radio" name="rdoSexo" value="M"> Masculino
            <input type="radio" name="rdoSexo" value="O"> Outro

            <!--
            radio - cria opções de escolha. 
            Obs: para configurar o radio fazendo com que permita apenas uma 
            opção de escolha, é obrigatório todas as inputs terem o mesmo nome.
            checked - ao abrir ou atualizar a página, deixa a input selecionada
        -->

        <p>Idioma:</p>
        <input type="checkbox" name="chkPortugues" value="PT" checked> Português
        <input type="checkbox" name="chkIngles" value="EN"> Inglês
        <input type="checkbox" name="chkEspanhol" value="ES"> Espanhol

        <p>Observação:</p>
        <textarea name="txtObs" id="" cols="30" rows="5"></textarea>

        <!--
            textarea - tem sua própria tag e deve ser aberta e fechada na mesma linha, sem espaço para evitar bugs;
            Para o usuário não poder redimensionar a textarea, fazemos esse código em CSS;
        -->

        <input type="submit" name="btnSalvar" value="Salvar">
        <input type="reset" name="btnLimpar" value="Limpar">

        <!--
            type="button" - apenas o JavaScript consegue retirar os dados;
            type="submit" - retira os dados do formulário através do próprio HTML, fazendo um submit nos dados;
            type="reset" - limpa o formulário;
        -->
    </form>
</body>
</html>