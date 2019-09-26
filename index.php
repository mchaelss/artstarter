<!DOCTYPE html>
<html lang="pt-br">

<head>

<title>ArtStarter - Desenvolvimento Web</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Mobile Chrome Exclusive -->
<meta name="theme-color" content="#0080C0">


<!-- iOS exclusive -->
<meta name="format-detection" content="telephone=no">


<?
/* 
===================================================================
===================================================================
                  SEO and others - START
===================================================================
===================================================================
*/

$_ = array();

$_['title']       = 'ArtStarter - Desenvolvimento Web';
$_['description'] = 'Criação de WebSites, Logomarcas, Cartões de Visitas e Peças Digitais em Geral 11 9 9531-3633';
$_['keywords']    = 'Site institucional, Desenvolvimento web, Cartão de Visita, Logomarcas, Site Responsivo, Integração Web, Banco de Dados';
$_['perm_url']    = 'http://artstarter.com.br/';
$_['page_image']  = 'http://artstarter.com.br/artstarter/img/logo_for_socialmedia.png';

?>
<?php /* SEO */ ?>
<meta name="description" content="<?= $_['description'] ?>" />
<meta name="keywords" content="<?=    $_['keywords']    ?>" />
<meta name="url" content="<?=         $_['perm_url']    ?>" />
<meta name="owner" content="ARTSTARTER" />
<meta name="author" content="Artstarters" />
<meta name="copyright" content="ARTSTARTER" />
<meta name="webmaster" content="Artstarters" />
<?php /* Base Link  <base href="< ? = $_['perm_url'] ? >" /> */ ?>
<?php /* Robots */ ?>
<meta name="robots" content="index,follow" />
<meta name="msnbot" content="all" />
<meta name="googlebot" content="index, follow" />
<link rel="alternate" type="application/xml" href="/sitemap.xml" />
<meta name="revisit-after" CONTENT="15 days" />
<?php /* Open Graphics */ ?>
<meta property="og:url" content="<?=         $_['perm_url']    ?>" />
<meta property="og:title" content="<?=       $_['title']       ?>" />
<meta property="og:description" content="<?= $_['description'] ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="ARTSTARTER" />
<meta property="og:image" content="<?= $_['page_image'] ?>" />
<meta property="og:image:width" content="300" />
<meta property="og:image:height" content="300" />
<?php /* Twitter Cards */ ?>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:domain" content="<?=      $_['perm_url']    ?>" />
<meta name="twitter:title" content="<?=       $_['title']       ?>" />
<meta name="twitter:description" content="<?= $_['description'] ?>" />
<meta name="twitter:image" content="<?=       $_['page_image']  ?>" />
<?
/* 
===================================================================
===================================================================
                 SEO and others - END
===================================================================
===================================================================
*/
?>



<!-- FavIcon -->
<link rel="shortcut icon" href="img/favicon.ico">

<link rel="apple-touch-icon-precomposed" sizes="57x57"   href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-57x57.png"   />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72"   href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-72x72.png"   />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60"   href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-60x60.png"   />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76"   href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-76x76.png"   />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>favicon-96x96.png"   sizes="96x96" />
<link rel="icon" type="image/png" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>favicon-32x32.png"   sizes="32x32" />
<link rel="icon" type="image/png" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>favicon-16x16.png"   sizes="16x16" />
<link rel="icon" type="image/png" href="<?= $_['perm_url'].'artstarter/img/favicon/' ?>favicon-128.png"     sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage"         content="<?= $_['perm_url'].'artstarter/img/favicon/' ?>mstile-144x144.png" />
<meta name="msapplication-square70x70logo"   content="<?= $_['perm_url'].'artstarter/img/favicon/' ?>mstile-70x70.png"   />
<meta name="msapplication-square150x150logo" content="<?= $_['perm_url'].'artstarter/img/favicon/' ?>mstile-150x150.png" />
<meta name="msapplication-wide310x150logo"   content="<?= $_['perm_url'].'artstarter/img/favicon/' ?>mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="<?= $_['perm_url'].'artstarter/img/favicon/' ?>mstile-310x310.png" />





<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- JQuery 2.1.4 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css"                                    rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"                      rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script"                          rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"             rel="stylesheet" type="text/css">

<!-- Theme CSS -->
<link href="css/agency.css?v1.3" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<link href="css/services.css" rel="stylesheet">
<link href="css/scroll.css" rel="stylesheet">


<!-- ARTSTARTER CSS -->
<link href="css/ARTSTARTER.css?<?= rand(); ?>" rel="stylesheet">


<script>

$(function()
{
	//
});

</script>




<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



<?php include('analyticstracking.php'); ?>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="">
                </a>        
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Serviços</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfólio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
					<li>
						<a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511995313633" class="tel"><i class="fa fa-whatsapp sr-contact"></i> 11 9 9531-3633</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active slide1">
          <div class="container">
            <div class="carousel-caption">
              <h2>SITES A PARTIR DE </h2>
              <h1><spam>R$ 399,90</spam></h1>
              <p>Tenha um site modelo:<br>Single-Page Application!</p>
              <p><a class="btn btn-lg btn-primary page-scroll" href="#contact" role="button">ORÇAMENTO</a></p>
            </div>
          </div>
        </div>
        <div class="item slide2">
          <div class="container">
            <div class="carousel-caption">
              <h1>Aumente sua visibilidade</h1>
              <p>Podemos te ajudar aumenter a visibilidade de seus nogócios!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">ORÇAMENTO</a></p>
            </div>
          </div>
        </div>
        <div class="item slide3">
          <div class="container">
            <div class="carousel-caption">
              <h1>Divulgue seus serviços</h1>
              <p>Um Site moderno e profissional pode fazer a diferança!</p>
              <p><a class="btn btn-lg btn-primary page-scroll" href="#contact" role="button">ORÇAMENTO</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	
	<!-- Services Section -->
	<div id="services" class="container text-center">
          <div class="row">
            <div class="service-heading-block">
				<h2 class="section-heading">NOSSOS SERVIÇOS</h2>
                <p class="text-center sub-title">Temos o que você precisa! <span class="text-primary">Soluções para atender</span> seu negócio<br/> da melhor forma possível</p>
            </div>             
              
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="text-center feature-block">
                <span class="fb-icon color-info">
                  <i class="fa fa-desktop" aria-hidden="true"></i>
                </span>
                <h4 class="color-info">Site Institucional</h4>
                <p class="section-subheading text-muted">Desenvolvimento de websites institucionais, promovendo o reconhecimento de sua empresa, em âmbito global.</p>
                <a class="btn btn-info btn-custom page-scroll" href="#contact">Orçamento</a>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
             <div class="text-center feature-block">
                <span class="fb-icon color-warning">
                  <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                </span>
                <h4 class="color-warning">Sistemas e Integrações</h4>
                <p class="section-subheading text-muted">Sistemas web funcionais e elegantes, personalizados de acordo com a necessidade e demanda de nossos clientes.</p>
                <a class="btn btn-warning btn-custom page-scroll" href="#contact">Orçamento</a>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="text-center feature-block">
                <span class="fb-icon color-success">
                  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
                </span>
                <h4 class="color-success">Extensões e Aplicativos</h4>
                <p class="section-subheading text-muted">Extensões personalizadas para o Google Chrome, e aplicativos para sistema Android.<br><br></p>
                <a class="btn btn-success btn-custom page-scroll" href="#contact">Orçamento</a>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="text-center feature-block">
                <span class="fb-icon color-danger">
                  <i class="glyphicon glyphicon-picture" aria-hidden="true"></i>
                </span>
                <h4 class="color-danger">Peças Digitais</h4>
                <p class="section-subheading text-muted">Artes digitais de alto nível; catálogos, e-mail marketing, cartões de visitas, logos e artes em geral.</p>
                <a class="btn btn-danger btn-custom page-scroll" href="#contact">Orçamento</a>
              </div>
            </div>
									
          </div> 
    </div>
	
	<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfólio</h2>
                    <h3 class="section-subheading text-muted">Confira nosso trabalho.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item"> <!--1-->
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/marquesgravacoes.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Marques Gravações</h4>
                        <p class="text-muted">Site Versão Desktop, Mobile e AMP</p>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6 portfolio-item"> <!--5-->
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/lovizettoadvocacia.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lovizetto Advocacia</h4>
                        <p class="text-muted">Site Responsivo, Logotipo e Cartões</p>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6 portfolio-item"> <!--6-->
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/jem-mecanica-de-autos.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>J&M Mecânica de Autos</h4>
                        <p class="text-muted">Site Responsivo, Vetorização de Logotipo</p>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6 portfolio-item"> <!--2-->
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/3zerobrindes.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>3Zero Brindes</h4>
                        <p class="text-muted">Melhorias para o Site e Banners</p>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6 portfolio-item"> <!--3-->
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crossbrindes.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Cross Brindes</h4>
                        <p class="text-muted">Melhorias para o Site e Banners</p>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6 portfolio-item"> <!--4-->
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ccf.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Compro Cortadores de Frios</h4>
                        <p class="text-muted">Site Institucional, Logotipo e Facebook</p>
                    </div>
                </div>
				
                <!-- <div class="col-md-4 col-sm-6 portfolio-item"> <!--9-->
                    <!-- <a href="#portfolioModal09" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/identidadevisualprog.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ProgBus</h4>
                        <p class="text-muted">Logotipo e Mídia Social</p>
                    </div>
                </div> -->
				
				<!-- <div class="col-md-4 col-sm-6 portfolio-item"> <!--10-->
                <!--    <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/identidadevisual.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>RW Custom Film</h4>
                        <p class="text-muted">Logotipo e Mídia Social</p>
                    </div>
                </div>	-->			
            </div>
        </div>        
    </section>
	
	<!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Marques Gravações</h2>
                                <p class="item-intro text-muted">Desenvolvimento do Site Versão Desktop, Mobile e AMP</p>
                                <img class="img-responsive img-centered" src="img/portfolio/marquesgravacoesx2.jpg" alt="">
								<h3>Para visualizar o Site clique <a target="_blank" href="http://marquesgravacoes.com.br/">AQUI</a>.</h3>
								<p>Recriação da logomarca da empresa (em um novo conceito). Criação de website institucional responsivo (para desktops, tablets e otimizado para celulares) com: S.E.O., Google Analytics, Mapa do Site, Dados Estruturados, página em AMP, plugin do Facebook, plugin do Google Maps e cadastro para newsletter. Contém: Home, Quem Somos, Serviços, Galeria de fotos (portifólio) e Contato.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	
	<!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>3Zero Brindes</h2>
                                <p class="item-intro text-muted">Atualização do site para versão mobile, reformulação de categorias e atualização de banners e fotos.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/3zerobrindesx2.jpg" alt="">
								<h3>Para visualizar o Site clique <a target="_blank" href="http://treszerobrindes.com.br/">AQUI</a>.</h3>
								<p>Reorganização completa do Banco de Dados de produtos do e-commerce + cadastro de novos produtos. Reorganização completa das categorias do site + cadastro de novas categorias. Como resultado, o e-commerce ficou mais enxuto, com mais produtos por categoria e mais fácil de navegar. Remodelação do layout do e-commerce e reorganização do site mobile (e correção de "bugs" na plataforma original).</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Cross Brindes</h2>
                                <p class="item-intro text-muted">Atualização do site para versão mobile, reformulação de categorias e atualização de banners e fotos.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/crossbrindesx2.jpg" alt="">
								<h3>Para visualizar o Site clique <a target="_blank" href="http://crossbrindes.com.br/">AQUI</a>.</h3>
								<p>Este e-commerce recebeu uma série de melhorias em seu código original. Tanto relacionadas a layout como elementos mais complexos como: busca, ajustes no painel de controle, remodelação do site mobile e correção de “bugs” na plataforma original. Todo o e-commerce foi reorganizado em termos de produtos e categorias. Também foram feitas melhorias nos e-mails de confirmação para os clientes e na disposição de elementos como banners e logomarca da empresa.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Compro Cortadores de Frios</h2>
                                <p class="item-intro text-muted">Desenvolvimento do Site institucional, Logotipo, Pagina do Facebook e midias digitais.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/ccfx2.jpg" alt="">
								<h3>Para visualizar o Site clique <a target="_blank" href="http://comprocortadoresdefrios.com.br/">AQUI</a>.</h3>
								<p>Criação de website institucional responsivo (para desktops, tablets e celulares) com: S.E.O., Google Analytics, Logotipo, Facebook e Peças digitais. O site contém: 4 sessões.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Portfolio Modal 5 -->
	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Lovizetto Advocacia</h2>
                                <p class="item-intro text-muted">Desenvolvimento do Site Responsivo, Logotipo e Cartões de Visita.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/lovizettoadvocaciax2.jpg" alt="">
								<h3>Para visualizar o Site clique <a target="_blank" href="http://lovizettoadvocacia.com.br/">AQUI</a>.</h3>
								<p>Criação da logomarca e cartões de visitas da empresa. Criação de website institucional responsivo (para desktops, tablets e para celulares) com: Google Analytics, Sistema de Notícias (com CRM) e plugin do Google Maps personalizado.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Portfolio Modal 6 -->
	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>J&M Mecânica de Autos</h2>
                                <p class="item-intro text-muted">Desenvolvimento do Site Responsivo e Vetorização do Logotipo.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/jem-mecanica-de-autosx2.jpg" alt="">
								<h3>Para visualizar o Site clique <a target="_blank" href="http://jemmecanica.com.br/">AQUI</a>.</h3>
								<p>Criação de website institucional responsivo (para desktops, tablets e para celulares) com: Plugin do Google Maps personalizado. e Vetorização do Logotipo.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <!-- Portfolio Modal 09 -->
   <!-- <div class="portfolio-modal modal fade" id="portfolioModal09" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>PROGBUS</h2>
                                <p class="item-intro text-muted">Logotipo e Layouts para Facebook</p>
                                <img class="img-responsive img-centered" src="img/portfolio/identidadevisualprog_full.png" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> FECHAR</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
    </div> -->
	
	<!-- Portfolio Modal 10 -->
    <!-- <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                             <!--   <h2>RW CustomFilm</h2>
                                <p class="item-intro text-muted">Logotipo e Capa para Facebook</p>
                                <img class="img-responsive img-centered" src="img/portfolio/identidadevisual-full.png" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

	<section id="clientes_all">
	
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading">Principais Clientes</h2>
				<h3 class="">(em ordem alfabética)</h3>
				<p></p>
			</div>
		</div>
	
<script>
var clientes_arr = ["3zero Brindes", "Anhembi Climatização", "C.C.F. Compro Cortadores de Frios", "CrossBrindes", "J&M Mecânica", "Lovizetto Advocacia", "LVA Corretora de Seguros", "Marques Gravações", "Mercado Geral", "Progbus", "RW Custom Film", "Vip Tiger Seguros"];
//
var final_clients_HTML = '';
//
clientes_arr.forEach(function(e)
{
	final_clients_HTML += '<span>' + e + ',</span> ';
});
//
final_clients_HTML += '...';
final_clients_HTML = final_clients_HTML.replace(",</span> ...", "...</span> ");
//
$('#clientes_all p').html(final_clients_HTML);
</script>
	</section>
	
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sobre</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4></h4>
                                    <h4 class="subheading">Quem Somos</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">A ARTSTARTER conta com uma equipe de programadores, web designers e designers gráficos habilitados, para o seu projeto web, gráfico ou de sistemas. Desde a criação do wireframe até o gestor de conteúdo completo.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4></h4>
                                    <h4 class="subheading">Missão</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">A ARTSTARTER tem como foco, oferecer a seus clientes e parceiros, serviços altamente profissionais por um preço acessível.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4></h4>
                                    <h4 class="subheading">Visão</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Tratamos cada nova ideia como única. A parceria com nossos clientes, proporcionará a exclusividade e autenticidade em cada projeto.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4><br>BEM VINDO!								
								</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
  
    
    <!-- Clients Aside 
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="http://www.marquesgravacoes.com.br/" target="_blank">
                        <img src="img/logos/progbus.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <h2 class="section-heading">Entre em contato</h2>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Insira o seu nome. ">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Insira o seu email. ">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu Telefone *" id="phone" required data-validation-required-message="Insira o seu telefone">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua Mensagem *" id="message" required data-validation-required-message="Por favor entre com sua mensagem."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
								<a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511995313633" class="tel"><i class="fa fa-whatsapp sr-contact"></i> 11 9 9531-3633</a><br>
								<a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511991970963" class="tel"><i class="fa fa-whatsapp sr-contact"></i> 11 9 9197-0963</a>																
								<br><br>
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Artstarter 2017</p>
                </div>
            </div>
			<div class="col-md-12">
				<ul class="list-inline social-buttons">
					<li><a href="https://www.facebook.com/Artstarter-685262234960464/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/artstarter_/" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/company/artstarter-desenvolvimento/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
				
			</div>
        </div>
	<a class="scroll-to-top page-scroll" href="#page-top"><i class="fa fa-chevron-up"></i></a>		
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->


<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js?<?= rand( 100, 100000 ) ?>"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>



</body>

</html>
