<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>const_var</title>
</head>
<body>
    <?php 

    /*int = numero,
    string = caractere,
    boleano = true/false,
    float = 0.0 */
    
    $aluno = "Arnoldo";
    $idade =  "130";
    /*const inicia com a palavra "define"
    entre aspas duplas
    1° constante
    2° valor */

    define("instituicao","Centro de educacao tecnologica do amazonas");
    
    echo "Ola aluno $aluno com idade: $idade. Bem vindo ao " . instituicao
    
    ?>

</body>
</html>