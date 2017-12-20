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
  <h1 style="margin-left: 20px">Filmes Cadastrados</h1>
  <!-- classe main da pag -->
  <main class="filmes">
  <?php
      //conexão com o banco de dados bdfilmes
			$conn = mysqli_connect("localhost", "root", "", "bdfilmes");
			if (!$conn) {
			    die ("Connection failed: ".mysqli_connect_error());
			}
			
			$sql = "SELECT * FROM filmes ";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)){
			       ?>
    <!-- dividindo em 3 partes -->
    <article>
      <!-- estilização da borda -->
      <div class="borda">
        <!-- img titanic -->
        <img src="<?php echo $row['link']; ?>" alt="<?php echo $row['nome']; ?>">
        <!-- título primeiro filme -->
        <h2><?php echo $row['nome']; ?>
          <!-- direciona o ano para o canto direito da div em questão -->
          <span style="float: right; font-weight: normal;"><?php echo $row['data']; ?></span>
        </h2>
        <!-- borda que envolve a descrição do filme -->
        <div class="borda-span">
          <!-- Descrição primeiro filme -->
          <span><?php echo $row['descricao']; ?></span>
        </div>
        <!-- inserindo botão e margem -->
        <div style="text-align: right; margin-top: 20px;">
          <!-- Botão leia mais -->
          <a href="detalhe.php?id=<?php echo $row['id']; ?>" class="botao">Leia mais</a>
        </div>

      </div>

    </article>
    <?php
			}
			   
			} else {
			    echo "0 results";
			}
			
						
			mysqli_close($conn);
			?>

  </main>
  <!-- criação rodapé -->
  <footer class="rodape">
    <!-- texto rodapé -->
    <h4>Projeto 2 - Filmes 2  - Tadeu - RA 035</h4>
  </footer>
  
</body>

</html>