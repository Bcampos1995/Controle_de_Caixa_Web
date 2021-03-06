<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Controle de Caixa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Controle de Caixa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrar.html">Cadastrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      </br>
    <!--Formulário de Cadastro-->
<div class="container">

    <h2 style="text-align:center"/><p>Cadastre-se</p></h2>
        <h3></h3>
        <br><br>
    <form action="#" method="post">
        <div class="form-group">
            <label>Nome:</label>
            <input name="nome" type="text" class="form-control" placeholder="Nome">
        </div>

        <div class="form-group">
            <label>Sobrenome:</label>
            <input name="sobrenome" type="text" class="form-control" placeholder="Nome">
        </div>
        
        <div class="form-group">
            <label>E-mail:</label>
            <input name="email" type="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label>Telefone:</label>
            <input name="telefone" type="tel" class="form-control" placeholder="Nome">
        </div>
   
        <div class="form-group">
           <label>Senha:</label>
            <input name="senha" type="password" class="form-control" placeholder="Senha">
        </div>
         <p><button type="submit" class="btn btn-dark">Cadastrar-se</button></p>
         <p><button type="reset" class="btn btn-dark">Limpar</button></p>

         <?php
 			define('DB_HOST'        , "DESKTOP-1PTIC21");
   			define('DB_USER'        , "sa");
   			define('DB_PASSWORD'    , "bcn4545*");
   			define('DB_NAME'        , "ControleCaixa");
   			define('DB_DRIVER'      , "SQLEXPRESS");

   			
  
   			require_once "conexao.php";
  
   		try{
  
       $Conexao    = Conexao::getConnection();
       $query      = $Conexao->query("SELECT nome, preco, quantidade FROM produto");
       $produtos   = $query->fetchAll();
  
   		}catch(Exception $e){
       	echo $e->getMessage();
       	exit;
   		}
		?>
      

    </form>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


