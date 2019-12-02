<!DOCTYPE html>
<html lang="en">
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
        <a class="navbar-brand" href="index.php"><img src="images/img-011.png" width="250" height="250" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
           
            
           
         
          <li class="nav-item"><a href="https://twitter.com/JAutomatizado" class="nav-link">Twitter</a></li>
             <li class="nav-item"><a href="controleUsuario.php?opcao=Sair" class="nav-link">Sair</a></li>
          </ul>
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
            <div>

            <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">  </span>
            <h2> </h2>
          </div>
        </div>
             <p>Bem-Vindo ao jardim automatizado</p></div>
              <h1 class="mb-4">Com o seu Jardim automatizado, você terá na web disponivel as informações dos  
                <strong class="typewrite" data-period="4000" data-type='[ "Sensores.", "Atuadores.", "alertas no Twitter." ]'>                
                  <span class="wrap"></span>
                </strong>
              </h1>
              <p>As informações coletadas nos sensores são apresentadas em tempo real e atualizadas a cada 30 segundos, também será disponibilizado a data e hora que o sistema ligou ou desligou 
             a irrigação do jardim e alguns alertas serão gerados em uma conta no twitter de forma automatica quando algumas faixas valores forem atingidas nos sensores.</p>
                          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    
     

   

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Sensores</span>
            <h2>Informações dos sensores</h2>
          </div>
        </div>
       
        <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" align="center">Umidade do solo</h4>
                 <p align="center"> <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/892273/widgets/113180"></iframe></p>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> </p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">As informações coletadas no sensor de umidade do solo são repassadas em tempo real e atualizadas a cada 30 segundos Será possivel monitorar qual a umidade do solo onde seu jardim está plantado</i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" align="center">Temperatura </h4>
                  <p class="card-category" align="center"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/906568/widgets/117466"></iframe>

</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">As informações coletadas no sensor de temperatura serão atualizadas em tempo real a cada 30 segundos. Será possivel monitorar alterações de temperatura em seu jardim </i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" align="center">umidade do ar</h4>
                  <p class="card-category" align="center"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/906568/widgets/117598"></iframe>
</p>
                </div>

                

                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">As informações coletadas no sensor de umidade do ar são repassadas em tempo real a cada 30 segundos. Será possivel monitorar qual a umidade do ar onde seu jardim está plantado</i> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">  </span>
            <h2> </h2>
          </div>
        </div>
          <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Informações dos graficos </span>
            <h2>Gráficos com informações recentes dos sensores</h2>
          </div>
        </div>
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">  </span>
            <h2> </h2>
          </div>
        </div>
   
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" align="center">Grafico da Umidade do solo</h4>
                 <p align="center"> <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/892273/charts/1?bgcolor=%23ffff&color=%23d62020&dynamic=true&results=60&title=Umidade+do+solo&type=line&xaxis=Hora+da+detec%C3%A7%C3%A3o&yaxis=Umidade+do+solo+%28%25%29"></iframe></p>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> </p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">As ultimas informações detectada no sensor de umidade do solo são disponibilizados em um gráfico de fácil entendimento. Ele ajuda a compreender as diferentes variações de temperatura e analisar em quais horarios essas variações costumam acontecer.</i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" align="center">Gráfico da temperatura</h4>
                  <p class="card-category" align="center"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/906568/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Temperatura&type=line"></iframe>
</p>               <span class="text-success"><i class="fa fa-long-arrow-up"></i> </p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">As ultimas informações detectada no sensor de temperatura são disponibilizados em um gráfico de fácil entendimento. Ele ajuda a compreender as diferentes variações de temperatura e analisar em quais horarios essas variações costumam acontecer.</i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title" align="center">Gráfico de umidade</h4>
                  <p class="card-category" align="center"><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/906568/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Umidade&type=line&yaxismax=100&yaxismin=0"></iframe>
</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">As ultimas informações detectada no sensor de Umidade do ar são disponibilizados em um gráfico de fácil entendimento. Ele ajuda a compreender as diferentes variações de temperatura e analisar em quais horarios essas variações costumam acontecer.</i> 
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">  </span>
            <h2> </h2>
          </div>
        </div>
 




          <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Irrigação Automatica</span>
            <h2>Informações dos Atuadores <a href="https://twitter.com/JAutomatizado?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Siga @JAutomatizado</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></h2>
            <div class="text">
          <a class="twitter-timeline" href="https://twitter.com/JAutomatizado?ref_src=twsrc%5Etfw">Informações dos Atuadores</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
          </div>
 
        </div>

        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">  </span>
            <h2> </h2>
          </div>
        </div>


      
        
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  

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