<?php

require_once "csrf.php";

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000)) {
  // após esse tempo será  desconectado
  session_unset();     // unset $_SESSION variável para o run-time 
  session_destroy();   // 
}

$_SESSION['LAST_ACTIVITY'] = time(); // atualizar o carimbo de hora da última atividade

setcookie("ck_authorized", "true", 1, "/");

if (!isset($_SESSION["nome"])) :
  header("location: index.php");
else :
  $login = $_SESSION["senha"];
endif;


?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Jardim automatizado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="PaginaInicial.php"><img src="images/img-011.png" width="250" height="250" class="d-inline-block align-top" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">



          <li class="nav-item"> <a href="https://twitter.com/JAutomatizado?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Siga @JAutomatizado</a></li>
          <li class="nav-item"><a href="https://twitter.com/JAutomatizado" class="nav-link">Twitter</a></li>
          <li class="nav-item"><a href="https://localhost/racks/cadastrarMudas.php" class="nav-link">Adicionar Mudas</a></li>
          <li class="nav-item active"><a href="controleUsuario.php?opcao=Sair" class="nav-link">Sair</a></li>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="home-slider ftco-degree-bg">
    <div class="slider-item">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-10 ftco-animate text-center">
            <h1 class="mb-4">Com seu Jardim automatizado, será possivel adicionar
              <strong class="typewrite" data-period="4000" data-type='[ "hortaliças.", "Flores.", "e demais mudas ." ]'>
                <span class="wrap"></span>
              </strong>
            </h1>
            <p>Maneira fácil para organizar quais platas estão presentes no seu jardim</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END slider -->

  <section class="ftco-section">
    <div class="container-fluid">

    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Informar plantas semeadas no canteiro</h2>
          </div>



          <div class="row block-9">
            <div class="col-md-6 pr-md-5">
              <form class="" method="post" action="controleMudas.php">
              <?php CSRF::create_token(); ?>
                <div class="form-group">
                  <label for="descricao">Nome da planta:</label>
                  <input type="text" class="form-control " placeholder="Nome da muda" id="nome" name="nome"> </div>
                <div class="form-group" id="quantidade">
                  <label for="quantidade">observações sobre o plantio: </label>
                  <input type="text" class="form-control " placeholder="Digite suas observações " id="localizacao" name="localizacao">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group" id="preco">
                  <label for="preco">Quantidade de plantas: </label>
                  <input type="number" step=".01" class="form-control " placeholder="Numero de plantas" id="quantidade" name="quantidade">
                  <small class="form-text text-muted"></small>
                </div>

                <div class="form-group">

                

                </div>


                <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar">Cadastrar</button>
               
              </form>

            </div>

            <div class="col-md-6" id="map">
              <a class="navbar-brand" href="PaginaInicial.php"><img src="images/jardim.jpg" width="400" height="400" class="d-inline-block align-top" alt=""></a>

            </div>
          </div>
        </div>
    </section>




    <div class="form-group">

      <div class="row">
        <div class="col-md-12">

        </div>
      </div>
    </div>
    </div>


    <div class="col-md-3">
      <p><span></span> </p>
    </div>
    <div class="col-md-3">
      <p><span></span> </p>
    </div>
    <div class="col-md-3">
      <p><span></span> </p>
    </div>
    </div>
    <div class="container-fluid">
      <div class="row no-gutters justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="h4">Canteiros monitorados </h2>
          <table class="table">
            <thead>
              <tr>
                <th>Nome da planta</th>
                <th>Observações</th>
                <th>Mudas plantadas</th>
   
              </tr>
            </thead>

            <tbody class="table-results">
              <?php
              include 'crudMudas.php';
              $resultado = mostrarProduto();
              if ($resultado) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                  $codigo = $linha["codigo"];
                  $nome = $linha["nome"];
                  $localizacao = $linha["localizacao"];
                  $quantidade = $linha["quantidade"];
                  echo "
                      <tr>
                        <td>" . $nome . "</td>
                        <td>" . $localizacao . "</td>
                        <td>" . $quantidade . "</td>


                      </tr>


                    ";
                }
              }
              ?>





            </tbody>
          </table>
        </div>
      </div>

    </div>

    <div class="row no-gutters justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading"> </span>
        <h2> </h2>
      </div>
    </div>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>