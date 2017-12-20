<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
    <body>
    <header class="topo">
            <img src="http://mundodapsi.com/wp-content/uploads/2015/09/filmes_logo.jpg" alt="Filmes2">
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
        <h1 style='float: left; margin-left: 50px; font-family: algerian; font-weight: bold; font-size: 40px;'> Cadastre seu Filme </h1>
        </br>
        <form action="processa_dados.php" method="post">
            </br>
            <div class="input-group">
                <label class"col-sm-4 control-label" >
                    Nome do Filme &nbsp; 
                </label>
                <input class="col-sm-8 form-control" type="text" name="nome">
            </div>
            </br>
            <p>
                Data de Lançamento
                <input type="date" name="data">
            </p>
                
            <p>
                Descrição do Filme
                <textarea type="text" name="descricao"></textarea>
            </p>

            <p>
                Ator Principal do Filme
                <input type="text" name="ator">
            </p>

            <p>
                Diretor do Filme
                <input type="text" name="diretor">
            </p>

            <p>
                Bilheteria
                <input type="text" name="bilheteria">
            </p>
            
            <p>
                Link para Inserção da Imagem do Filme
                <input type="text" name="link">
            </p>
            </br>
            <button style = 'font-family: algerian; font-size: 25px'> Cadastrar Filme</button>;
        </form>
    </body>
</html>