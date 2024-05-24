<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>VARIAVEIS</h1>

<?php
$NOTA1 = 7
$NOTA2 = 8
$NOTA3 = 0 
$MEDIA = ($NOTA1 + $NOTA2 + $NOTA3) / 3;
?>

<h1>ESTRUTURAS CONDICIONAIS</h1>

<?php
if($MEDIA >=7) {
echo "Aprovado";
}

else{
    echo"Reprovado";
}
?>

<h1>ESTRUTURAS DE REPETIÇÃO</h1>

<?php
$alunos = array (
"halley" => 10,
"ana" => 5, 
"bruna" => 5,
"diego" => 6,
"carla" => 5,
);
?>


<h1>FUNÇOES</h1>
</body>
</html>