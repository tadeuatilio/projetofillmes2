<!DOCTYPE html>
<html>

<head>
  <!-- título -->
  <title>Filmes</title>

  <meta charset="utf-8">
  <!-- Responsividade nos aparelhos mobiles -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- ícone do cabeçalho do brownser -->
  <link rel="shortcut icon" href="https://maxcdn.icons8.com/Share/icon/Cinema//film_soundtracks1600.png" type="image/x-icon" />
  <!-- Chamada do "estilo.css" -->
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

<body>
  <header class="topo">
    <img src="http://mundodapsi.com/wp-content/uploads/2015/09/filmes_logo.jpg" alt="Filmes">
    <div class="menu">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="cadastro.php">Cadastro</a>
        </li>
        <li>
          <a href="sobre.html">Sobre</a>
        </li>
        <li>
          <a href="contato.html">Contato</a>
        </li>
      </ul>
    </div>

  </header>
<!-- Primeiro subtítulo -->
<h1 style="margin-left: 20px">Detalhes do Filme:</h1>
  <!-- classe main da pag -->
  <main class="filmes">
  <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "bdfilmes";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "SELECT * FROM filmes WHERE id = ".$_GET['id']."";
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) > 0){

			    $row = mysqli_fetch_assoc($result);			      
			    echo "<h2 style='float: right; margin-right: 50px; font-family: algerian; font-weight: bold; font-size: 36px;'>".$row['nome'];
			    echo " (".$row['data'].")";
			    echo "</h2>";
			    
			    echo "<img style='margin: 30px' src='".$row['link']."' width='94%'>";	
                
                echo "<div style='margin: 30px'>";

                echo "<textarea rows='4' style='font-size: 23px; background-color: ghostwhite; color: black;' cols='95' disabled>".$row['descricao']."</textarea>";
                
                echo "<div class='input-group' style='margin-top: 40px'>";

                echo "<label style='font-size: 30px; font-weight: bold; margin-right: 40px' class'control-label'>Ator: </label>";
                
                echo "<input class='form-control' style='font-size: 23px; background-color: ghostwhite; color: black;' disabled type='text' name='ator' value=".$row['ator']."></input>";
                                
                echo "</div>";

                echo "<div class='input-group' style='margin-top: 40px'>";

                echo "<label style='font-size: 30px; font-weight: bold; margin-right: 40px' class'control-label'>Diretor: </label>";

                echo "<input class='form-control' style='font-size: 23px; background-color: ghostwhite; color: black;' disabled type='text' name='diretor' value=".$row['diretor']."></input>";
                
                echo "</div>";
                
                echo "<div class='input-group' style='margin-top: 40px'>";

                echo "<label style='font-size: 30px; font-weight: bold; margin-right: 40px' class'control-label'>Bilheteria: </label>";

                echo "<input class='form-control' style='font-size: 23px; background-color: ghostwhite; color: black;' disabled type='text' name='bilheteria' value=".$row['bilheteria']."></input>";
           
                echo "</div>";
                
                echo "</div>";
			    		    
			} else {
			    echo "nenhum filme encontrado";
			}
									
			mysqli_close($conn);
			?>

        </main>