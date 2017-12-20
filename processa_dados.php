<?php



$nome = $_POST['nome'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];
$ator = $_POST['ator'];
$diretor =$_POST['diretor'];
$bilheteria = $_POST['bilheteria'];
$link = $_POST['link'];

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

$sql = "insert into filmes (nome, data, descricao, ator, diretor, bilheteria, link) values(:nome, :data, :descricao, :ator, :diretor, :bilheteria, :link)";
$query = $conn->prepare($sql);
$query->bindParam(':nome', $nome);
$query->bindParam(':data', $data);
$query->bindParam(':descricao', $descricao);
$query->bindParam(':ator', $ator);
$query->bindParam(':diretor', $diretor);
$query->bindParam(':bilheteria', $bilheteria);
$query->bindParam(':link', $link);

 try
 {
    $query->execute();
    header('Location: cadastro.php');
 
 }
 catch(PDOException $e)
 {
    echo "Erro: " . $e->getMessage();
 } 