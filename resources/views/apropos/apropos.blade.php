<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Source D'art it services</title>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

        <!-- ALL CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link rel="stylesheet" type="text/css" href="css/flaticon.css">
        <link rel="stylesheet" type="text/css" href="css/settings.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <link rel="stylesheet" type="text/css" href="css/preset.css" >
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" href="css/service.css">

        <link rel="icon"  type="image/png" href="images/favicon.png">

        
       
    </head>
    <body>

        <!--PRELOADER START-->
            <div class="preloader">
              <div class="loader" ><span>En cours patientez...</span></div>
            </div>
        <!--PRELOADER END-->

            <header class="header isSticky" id="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-1 noPaddingLeft">
                            <div class="logo " style="display: block !important;">
                                <a href="{{url('/')}}"><img src="images/logo.png" class="logo-img" width="20%" alt=""></a>
                            </div>
                        
                    
                        </div>
                        <div class="col-md-9 col-sm-10">
                            <nav class="mainMenu">
                                <div class="mobileBar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <ul>
                                    <li ><a href="{{url('/')}}">Accueil</a></li>
                                    <li class=" active"><a href="{{url('apropos')}}">À propos </a></li>
                                    <li class=""><a href="{{url('/')}}#team">Nos-Équipe</a></li>
                                    <li class=""><a href="">Nous faisons</a></li>
                                    <li class=""><a href="{{url('/')}}#ourwork">Services</a></li>
                                    <li class="has-menu-items"><a href="{{url('/')}}#sayhello">Galeries</a>
                                        <ul class="sub-menu">
                                            <li><a href="./galeries/">Photos</a></li>
                                            <li><a href="{{route('video')}}">Vidéos</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{url('/')}}#contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-2 hidden-sm md_class noPaddingRight">
                            <div class="callus">
                                <p> 
                                    <a><i class="fa fa-facebook-official"> </i> </a>    
                                    <a><i class="fa fa-instagram"></i> </a>     
                                    <a><i class="fa fa-youtube">  </i> </a>
                                    
                                
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            

        <section class="slider slider2" id="slider">
            <div class="tp-banner">
                 <ul>
                    <li data-transition="random-premium" data-slotamount="7" data-masterspeed="1000">
                         <div id="container">
                                <span id="text1"></span>
                                <span id="text2"></span>
                          </div>
                         

                            <svg id="filters">
                                <defs>
                                    <filter id="threshold">
                                        <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0 
                                            0 1 0 0 0
                                            0 0 1 0 0
                                            0 0 0 255 -140" />
                                    </filter>
                                </defs>
                            </svg>

                         
                         
                   
                         
                        
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="35"
                             data-speed="2000"
                             data-start="1500"
                             data-easing="Power4.easeOut">
                            <div class="revCon">
                                <h2 class="lead  color_white"><canvas id="canvas"></canvas></h2>
                            </div>
                        </div>
                        <div  style="z-index: 999;" class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="148"
                             data-speed="2000"
                             data-start="2000"
                             data-easing="Power4.easeOut">
                            <div class="revCon revBtn scroll">
                                <a href="#testmonialSec" class="bes_button scroll">En savoir plus <i class="flaticon-arrows"></i></a>
                            </div>
                        </div> 
                    </li>
                  
                </ul> 
           
          
           
           
           
            </div>
            <div class="mouseSlider"  style="z-index: 999;">
                <div class="c-scrolldown">
                    <div class="c-line"></div>
                </div>
                <a href="#testmonialSec" class="normal"><img src="images/mouse.png" alt=""></a>
                <a href="#testmonialSec" class="hover"><img src="images/mouseh.png" alt=""></a>
            </div>
        </section>

          <!--CHOOSE US START-->
            <section class="chooseus" id="chooseus">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="sectionTitle bigTitle2">
                                <h5 class="magenta text-uppercase bold">CONCEPT SOURCE D'ART</h5>
                                <h2 class="lead">Pourquoi tu devrais nous choisir</h2>
                            </div>
                        </div>
                    </div>
                
                </div>
            </section>
            <!--CHOOSE US END-->

            
          <!--TESTMONIAL START-->
          <section class="testmonialSec" id="testmonialSec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="testmonialCaro">

                            <div class="singleTestmn">
                                <p> <i class="fas fa-quote-left"></i> Nous sommes une Équipe de professionnels venant d’horizons différents, possédant des compétences variées et complémentaires. <i class="fas fa-quote-right"></i></p>
                                <div class="testAut">
                                    <h4>Expertise</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="singleTestmn">
                                <p><i class="fas fa-quote-left"></i> Nous sommes avant tout là pour entendre vos besoins et vos attentes afin de mettre en place, avec vous, la stratégie de prise en charge la plus adaptée.<i class="fas fa-quote-right"></i></p>
                                <div class="testAut">
                                    <h4>Écoute</h4>
                                    <p></p>
                                </div>
                            </div>


                            <div class="singleTestmn">
                                <p> <i class="fas fa-quote-left"></i> Nous et nos partenaires intervenons selon notre charte de confidentialité <i class="fas fa-quote-right"></i></p>
                                <div class="testAut">
                                    <h4>Professionnalisme</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="singleTestmn">
                                <p> <i class="fas fa-quote-left"></i> Les solutions que nous vous proposons sont élaborées avec vous tout au long de notre intervention, avec une revue au mois, au trimestre ou à l’année <i class="fas fa-quote-right"></i></p>
                                <div class="testAut">
                                    <h4>Accompagnement</h4>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </section>
        <!--TESTMONIAL END-->



          <!--CHOOSE US START-->
          <section class="chooseus" id="chooseus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sectionTitle bigTitle2">
                            <h5 class="magenta text-uppercase bold">Qui sommes-nous ?</h5>
                            <h2 class="lead">Nous ne faisons rien de moins que parfait.</h2>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        <!--CHOOSE US END-->
      
         
       

      

        <!--PARALLAX TWO START-->
        <section class="parallaxTwo" data-parallax="scroll" data-image-src="images/bg/13.jpg" data-bleed="10" id="">
            <div class="container">
                <div class="row">
                    <div class="parTwoContent">
                        <h2>We’re</h2>
                        <div class="clearfix"></div>
                        <h1>&nbsp;<span class="typewrite" data-period="2000" data-type='[ "Designer.", "Devloper.", "Creative." ]'></span></h1>
                        <p>
                            Nous sommes une agence d’organisation d’événements au Maroc,
                            apportant à ses clients une vision nouvelle et unique en matière de communication et organisation d’événements.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--PARALLAX TWO END-->


        

       


        <!--FOOTER-->
        @include('footer.footer')
        <!---------->
       

        <div class="subscriptionSuccess">
            <div class="subsNotice">
                <i class="fa fa-thumbs-o-up closers"></i>
                <div class="clearfix"></div>
                <p class="closers">Demande d'abonnement placée avec succès !</p>
            </div>
        </div>
        <div class="contactSuccess">
            <div class="consNotice">
                <i class="fa fa-thumbs-o-up closers"></i>
                <div class="clearfix"></div>
                <p class="closers">Votre message envoyé avec succès !</p>
            </div>
        </div>


        

        <!-- ALL JS -->
        <a id="backToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="./js/main.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript" src="js/slick.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="js/parallax.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
        
    </body>
</html>


