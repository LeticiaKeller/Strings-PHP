<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="string.css">
    <title>String</title>
</head>
<body>
    <div class="container">
    <?php
    echo "<h1> Manipulando Strings: </h1>";
        $produto= "pão";
        $preco= 4.8;
    #forma comum de digitar um número em formato de moeda
    echo "O $produto custa R$ " .number_format($preco,2);
    /*Uma forma mais simples %s=string que é o tipo da primeira variavel 
    %f= float numero real que é o tipo da segunda variavel, 
    .2 é a quantidade de casas decimais */
    printf("<br/>O %s custa R$ %.2f", $produto, $preco);

    //%d valor decimal (positivo ou negativo)
    //%u valor decimal sem sinal (apenas positivo)
    //%f valor real
    //%s string
    echo "<hr>";

    $x[0]= 4;
    $x[1]= 8;
    $x[2]= 3;
    $x[3]= 6;
    #print_r imprime vetor
    print_r($x);

    echo "<hr>";

    $x2= array(4,3,7,9,6,8,1);
    #semelhante ao print_r
    var_dump($x2);

    echo "<hr>";

    $x3= array(6,9,3,7,4,1,5);
    #semelhante ao print_r
    var_export($x3);

    echo "<hr>";

    $txt= "   O poeta é um fingidor. Finge tão completamente, Que chega a fingir que é dor, A dor que deveras sente<br>    ";
    #separa as palavras do texto na quantidade que você precisar.
    echo wordwrap($txt,4,"<br>\n");

    echo "<hr>";
    #quantidade de caracteres totais, incluindo espaços
    echo strlen($txt);

    echo "<hr>";
    #trim corta os caracteres de espaço no inicio e no fim
        $novo= trim($txt);
    echo strlen($novo);

    echo "<hr>";
    #ltrim corta os caracteres de espaço no inicio
        $novo= ltrim($txt);
    echo strlen($novo);

    echo "<hr>";
    #rtrim corta os caracteres de espaço no fim
        $novo= rtrim($txt);
    echo strlen($novo);

    echo "<hr>";
    #conta a quantidade de palavras na string
        $cont= str_word_count($txt,0);
    print ($cont);

    echo "<hr>";
    #coloca cada palvra da string no indice do vetor
        $cont= str_word_count($txt,1);
    print_r($cont);

    echo "<hr>";
    #transforma a string em um array
        $frase= "olá mundo querido";
        $vetor= explode("|",$frase);
    print_r($vetor);

    echo "<hr>";
    #separa as letras da string e coloca em cada indice de um vetor
        $nome= "leticia";
        $vetor1= str_split($nome);
    print_r ($vetor1);
    echo "<br>";
    #repete a string quantas vezes você quiser
        $rep= str_repeat($nome, 5);
        print ($rep);

    echo "<hr>";

        $v[0]= "Eu";
        $v[1]= "gosto";
        $v[2]= "de";
        $v[3]= "estudar";
        $v[4]= "PHP";
    #Junta os indices do vetor com # nos intervalos
        $texto= implode("#", $v); #ou join()
    print($texto);

    echo "<hr>";
    #descobrindo a letra pelo codigo
        $letra= chr(67);
    echo "A letra de código 67 é $letra";

    echo "<hr>";
    #descobrindo o codigo pela letra
        $l= "B";
        $cod= ord($l);
    echo "O código da letra B é $cod.";

    echo "<hr>";

        $mn= "Leticia Keller";
    #deixa a string toda minuscula
    print("O seu nome é ". strtolower($mn). "<br/>");
    #deixa a string toda maiuscula
    print("O seu nome é ". strtoupper($mn). "<br/>");
    #deixa a primeira letra da string maiscula se juntar com strtolower fica todo o resto minusculo
    print(ucfirst($mn). "<br/>");
    #deixa a primeira letras das palavras da string em maisculo
    print(ucwords($mn). "<br/>");
    #deixa as palavras da string ao contrario
    print(strrev($mn). "<br/>");
    #posição que uma palavra começa na string e ignora a caixa da palavra
        $pos= stripos($mn, "Keller");
    echo "A string foi encotrada na posição $pos";
    
    echo "<hr>";
        $f= "Estou aprendendo PHP no curso online de PHP";
        $c= substr_count($f, "PHP");
    print "PHP foi encontrado $c vezes.</br>";
    #escreve da letra na posição digitada em diante
        $sub= substr($f, 7);
    echo "$sub";
    echo "<br>";
    #substiti uma palabra da string por outra que você queira, se usar str_ireplace ele ignora
        $novafrase= str_replace("PHP","JAVA",$f);
    echo $novafrase;

    echo "<hr>";
    #"" a direita da string
        $n= str_pad($nome, 30,".", STR_PAD_RIGHT);
    print ("Meu nome é $n Keller");
    echo "<br>";
    #"" a esquerda da string
        $n2= str_pad($nome, 30,".", STR_PAD_LEFT);
    print ("Meu nome é $n2 Keller");
    echo "<br>";
    #"" ao redor da string
        $n3= str_pad($nome, 30,".", STR_PAD_BOTH);
    print ("Meu nome é $n3 Keller");

    ?>

</div>
</body>
</html>