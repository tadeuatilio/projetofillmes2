<?php

$id = $_GET['valor'];

try 
{
    $conn = new PDO("mysql:host=localhost;dbname=bdfilmes", 'root', '');
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET CHARACTER SET utf8");
    
}
catch(PDOException $e)
{
    echo "Conexão falhou: " . $e->getMessage();
} 


$sql = "select * from filmes where id = :id";
$query = $conn->prepare($sql);

$query->bindParam(':id', $id);

 try
 {
    $query->execute();
    $dados = $query->fetch(PDO::FETCH_ASSOC);
 }
 catch(PDOException $e)
 {
    echo "Erro: " . $e->getMessage();
 } 

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
        <body>

        <p>Nome do Filme: <?= $dados['nome']?></p>
        <p>Data Lançamento: <?= $dados['data']?></p>
        <p>Descrição: <?= $dados['descricao']?></p>
        <p>Ator Principal: <?= $dados['ator']?></p>
        <p>Diretor: <?= $dados['diretor']?></p>
        <p>Bilheteria: <?= $dados['bilheteria']?></p>
        <p>Link para Inserção da Imagem do FIlme: <?= $dados['link']?></p>

        </body>
</html>