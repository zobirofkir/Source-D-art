<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Source d'art ne fait rien de moins que parfait</title>
        <meta charset="utf-8">
        <meta name="description" content="Source d'art ne fait rien de moins que parfait">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Source d'art, Sourcedart, Source dart Sourcedart.org">

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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css">
        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
    </head>
    
    <body>

        <!--PRELOADER START-->
           

            <div class="preloader">
                <div class="loader" ><span>En cours patientez...</span></div>
            </div>
            

        <!--PRELOADER END-->

        <!--HEADER 01 START-->
        <header class="header isSticky" id="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 noPaddingLeft">
                        <div class="logo "  style="display: block !important;">
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
                                <li class="scroll  active"><a href="#slider">Accueil</a></li>
                                <li class="scroll"><a href="#about">À propos </a></li>
                                <li class="scroll"><a href="#team">Nos-Équipe</a></li>
                                <li class="scroll "><a href="#whatwe">Nous faisons</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('/confidalite')}}">Résumer</a></li>
                                        
                                    </ul>
                               </li>
                                <li class="scroll"><a href="#ourwork">Services</a></li>
                               
                                <li class="scroll has-menu-items"><a href="#sayhello">Galeries</a>
                                    <ul class="sub-menu">
                                        <li><a href="/galeries/">Photos</a></li>
                                        <li><a href="/videos/">Vidéos</a></li>
                                    </ul>
                                </li>
                                <li class="scroll"><a href="#contact">Contact</a></li>
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
        <!--HEADER 01 END-->

        <!--SLIDER START-->
        <section class="slider slider2" id="slider">
            <div class="tp-banner">
                 <ul>
                    <li data-transition="cube" data-slotamount="7" data-masterspeed="1000">
                        <img src="images/slider/s1.jpg"  alt=""> 
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="-40"
                             data-speed="1600"
                             data-start="1000"
                             data-easing="easeInOutCubic">
                            <div class="revCon">
                                <h5 class="text-uppercase color_white">Nous ne faisons rien de moins que parfait</h5>
                            </div>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="35"
                             data-speed="2000"
                             data-start="1500"
                             data-easing="Power4.easeOut">
                            <div class="revCon">
                                <h2 class="lead lead1 color_white">Bienvenue à Source d'art</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="148"
                             data-speed="2000"
                             data-start="2000"
                             data-easing="Power4.easeOut">
                            <div class="revCon revBtn scroll">
                                <a href="#about" class="bes_button">En savoir plus <i class="flaticon-arrows"></i></a>
                            </div>
                        </div>
                    </li>
                    <li data-transition="random-premium" data-slotamount="7" data-masterspeed="1000">
                        <img src="images/slider/s2.jpg"  alt=""> 
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="-40"
                             data-speed="1600"
                             data-start="1000"
                             data-easing="easeInOutCubic">
                            <div class="revCon">
                                <h5 class="text-uppercase color_white">Votre service est notre objectif</h5>
                            </div>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="35"
                             data-speed="2000"
                             data-start="1500"
                             data-easing="Power4.easeOut">
                            <div class="revCon">
                                <h2 class="lead lead1 color_white">L'aventure commence ici.</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="148"
                             data-speed="2000"
                             data-start="2000"
                             data-easing="Power4.easeOut">
                            <div class="revCon revBtn scroll">
                                <a href="#about" class="bes_button">En savoir plus <i class="flaticon-arrows"></i></a>
                            </div>
                        </div>
                    </li>
                    <li data-transition="random-premium" data-slotamount="7" data-masterspeed="1000">
                        <img src="images/slider/s3.jpg"  alt=""> 
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="-40"
                             data-speed="1600"
                             data-start="1000"
                             data-easing="easeInOutCubic">
                            <div class="revCon">
                                <h5 class="text-uppercase color_white">Nos équipes sont toujours ici pour vous soit</h5>
                            </div>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="35"
                             data-speed="2000"
                             data-start="1500"
                             data-easing="Power4.easeOut">
                            <div class="revCon">
                                <h2 class="lead lead1 color_white">Multimedia service</h2>
                            </div>
                        </div>
                        <div class="tp-caption sfb"
                             data-x="center"
                             data-y="center"
                             data-hoffset="0"
                             data-voffset="148"
                             data-speed="2000"
                             data-start="2000"
                             data-easing="Power4.easeOut">
                            <div class="revCon revBtn scroll">
                                <a href="#about" class="bes_button">En savoir plus <i class="flaticon-arrows"></i></a>
                            </div>
                        </div>
                    </li>
                </ul> 
           
          
           
           
           
            </div>
            <div class="mouseSlider">
                <div class="c-scrolldown">
                    <div class="c-line"></div>
                </div>
                <a href="#about" class="normal"><img src="images/mouse.png" alt=""></a>
                <a href="#about" class="hover"><img src="images/mouseh.png" alt=""></a>
            </div>
        </section>
        <!--SLIDER END-->

        <!--ABOUT START-->
        <section class="about" id="about">
            <div class="aboutTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="abcontentT">
                                <h5 class="text-uppercase magenta bold">découvrir sur mesure</h5>
                                <h3 class="lead light color_white">
                                    Nous fournissons de la bon service depuis plus de 7 ans!
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abBigtitle">
                <h1 class="lead" >Source d'art it Services</h1>
            </div>
            <div class="aboutBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="abcontentB">
                                <h5 class="lead bold color_white">Nous adoptons une approche axée sur les résultats pour chaque projet.</h5>
                                <h3 class="light color_white">
                                    Notre société a comme objectif de faciliter le domaine multimédia et informatique,
                                    nous vous informent que nous existons depuis 2015, nous travaillons dans un environnement plein de dynamisme,
                                    d'amitié, de solidarité et surtout d'amour pour nos projet. Dans notre société vous allez trouver tout ce que vous souhaitez 
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ourServices">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md d-flex align-items-stretch ftco-animate">
                            <div class="singleService">
                                <div class="serImg">
                                    <img src="images/services/1.png" alt="">
                                </div>
                                <h6 class="lead text-uppercase bold">web</h6>
                                <p>Chaque projet est différent et cela signifie que l'approche doit l'être aussi.</p>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md d-flex align-items-stretch ftco-animate">
                            <div class="singleService">
                                <div class="serImg">
                                    <img src="images/services/4.png" alt="">
                                </div>
                                <h6 class="lead text-uppercase bold">Photography</h6>
                                <p> si vous voulez faire un shooting ou bien faire une vidéo nous prenons en charge tout ce qui vous sera nécessaire pour la réalisation de vos désirs</p>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md d-flex align-items-stretch ftco-animate">
                            <div class="singleService">
                                <div class="serImg">
                                    <img src="images/services/2.png" alt="">
                                </div>
                                <h6 class="lead text-uppercase bold">Infographie</h6>
                                <p>Tout ce que vous aurez a faire c'est que nous donner le thème que vous souhaitez et nous nous chargeons du tout.</p>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md d-flex align-items-stretch ftco-animate">
                            <div class="singleService">
                                <div class="serImg">
                                    <img src="images/services/3.png" alt="">
                                </div>
                                <h6 class="lead text-uppercase bold">Events</h6>
                                <p>Nous construisons une équipe autour de vos besoins et fournissons à nos clients un accès direct à tout le monde</p>
                            </div>
                        </div>
                        

                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <a href="{{url('/apropos')}}" class="bes_button">En savoir plus <i class="flaticon-arrows"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--ABOUT END-->

        <!--TEAM START-->
        <section class="team" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sectionTitle epr200">
                            <h5 class="magenta text-uppercase bold">Rencontrer l'équipe</h5>
                            <h3 class="lead">Nos équipes sont toujours ici pour vous soit</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="teamTop">
                        <div class="col-sm-6">
                            <div class="teamBig lead1">
                                <img src="images/team/final.gif" alt="">
                                <!-- <video src="images/team/final.mp4" width="100%" height="100%" autoplay muted loop></video> -->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="testmonial" id="testmonial">
                                <div class="singleTestm">
                                    <p>
                                        Nous fournissons des services Web puissants pour vos besoins numériques modernes
                                    </p>
                                    <div class="teamDeg">
                                        <h4 class="magenta">Source D'art</h4>
                                        <p>it Services</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="row">

                <!-- <div class="col-sm-3 sm_class">
                    <div class="singleTeam">
                            <img src="images/team/3.jpg" alt="">
                            <div class="teamDeg">
                                <h4 class="magenta">Mohammed Kabli</h4>
                                <p>Directeur général</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 sm_class">
                        <div class="singleTeam">
                            <img src="images/team/2.jpg" alt="">
                            <div class="teamDeg">
                                <h4 class="magenta">Mohammed EL Ghazal</h4>
                                <p >Programmeur</p>
                            </div>
                        </div>
                    </div>

                   

                    <div class="col-sm-3 sm_class">
                        <div class="singleTeam">
                            <img src="images/team/1.jpg" alt="">
                            <div class="teamDeg">
                                <h4>Nom-Prenom</h4>
                                <p>Services</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 sm_class">
                        <div class="singleTeam">
                            <img src="images/team/1.jpg" alt="">
                            <div class="teamDeg">
                                <h4>Nom-Prenom</h4>
                                <p>Services</p>
                            </div>
                        </div>
                    </div>

                </div> -->

                   
                </div>
            </div>
        </section>
        <!--TEAM END-->

        <!--WHAT WE DO START-->
        <section class="whatwe" id="whatwe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <div class="wedoContent">
                            <h5 class="text-uppercase color_white bold">CE QUE NOUS FAISONS</h5>
                            <h2 class="lead color_white"> Nous aidons les entreprises à <br> évoluer <span>&</span> croître.</h2>
                            <a href="portfolio.php" class="bes_button">En savoir plus<i class="flaticon-arrows"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--WHAT WE DO END-->

        <!--OUR WORK START-->
        <section class="ourwork" id="ourwork">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sectionTitle bigTitle">
                            <h5 class="magenta text-uppercase bold">Nos Services</h5>
                            <h2 class="lead">Nous Créons des chefs-d'œuvre.</h2>
                            <p>Nous croyons en l'idée de proposer des idées originales et de les transformer en un travail numérique à la fois innovant et mesurable.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <div id="workCarousel">
                            <div class="singleWork">
                                <img src="images/work/1.jpg" alt="">
                                <div class="singleWorkContent">
                                    <h6 class="color_yellow text-uppercase bold">Étude de cas </h6>
                                    <h2 class="lead">Organisation d'événements</h2>
                                    <div class="workTag">
                                        <a >Events</a>
                                    </div>
                                </div>
                            </div>

                           
                            
                            <div class="singleWork">
                                <img src="images/work/4.jpg" alt="">
                                <div class="singleWorkContent">
                                    <h6 class="color_yellow text-uppercase bold">Étude de cas</h6>
                                    <h2 class="lead">Shooting et vidéo</h2>
                                    <div class="workTag">
                                        <a >Compétence</a>/
                                        <a >Précision</a>
                                    </div>
                                </div>
                            </div>

                            <div class="singleWork">
                                <img src="images/work/2.jpg" alt="">
                                <div class="singleWorkContent">
                                    <h6 class="color_yellow text-uppercase bold">Étude de cas</h6>
                                    <h2 class="lead">Création des Plateformes Web et app mobile</h2>
                                    <div class="workTag">
                                        <a >Development</a>
                                    </div>
                                </div>
                            </div>
                            <div class="singleWork">
                                <img src="images/work/3.jpg" alt="">
                                <div class="singleWorkContent">
                                    <h6 class="color_yellow text-uppercase bold">Recent Casestudy</h6>
                                    <h2 class="lead">Infographie Concevoir l'avenir.</h2>
                                    <div class="workTag">
                                        <a >Illustration</a>/
                                        <a >Photoshop</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--OUR WORK END-->

        <!--CHOOSE US START-->
        <section class="chooseus" id="chooseus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sectionTitle bigTitle2">
                            <h5 class="magenta text-uppercase bold">Pourquoi nous choisir?</h5>
                            <h2 class="lead">Notre stratégie</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="chooseUsContent">
                            <h3 class="magenta normal">Notre équipe travaille main dans la main, s'assurant qu'un projet n'est jamais créé de manière isolée.</h3>
                            <p>Chaque projet a ses propres objectifs et vision. Quel que soit votre projet, notre réseau étendu de stratèges, d'innovateurs et de professionnels de la technologie est toujours désireux de s'impliquer. Nous savons qu'il est utile de connaître les bonnes personnes</p>
                            
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="imagesDiv chooseUsImg">
                            <img src="images/choose.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CHOOSE US END-->

      

        <!--CLIENT START-->
        <section class="client" id="client">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sectionTitle bigTitle3">
                            <h5 class="text-uppercase magenta bold">Avec qui travaillons-nous ?</h5>
                            <h2 class="lead">Notre clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row climg">

                    <script>
                        for(i=1;i<14;i++){
                            $('.climg').append(
                                `<div class="col-sm-4">
                                    <div class="singleClient">
                                        <a ><img src="images/client/${i}.png" alt=""></a>
                                    </div>
                                </div> `);
                        }
                    </script>
                   
                    
                </div>
            </div>
        </section>
        <!--CLIENT END-->

        <!--BLOG START-->
        <section class="blogSection" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sectionTitle bigTitle2">
                            <h5 class="text-uppercase bold color_white">Notre Objectifs</h5>
                            <h2 class="lead color_white">Nos pensées</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-4 noPadding">
                        <div class="singleBlog">
                            <div class="blogThumb">
                                <img src="images/blog/2.jpg" alt="">
                            </div>
                            <div class="blogDec">
                                <h2 class="blogTitle"><a >Offrir de la bonne service</a></h2>
                                <div class="blogDate">Rapidité</div>
                                <div class="bperaDiv">
                                    <p>
                                         Nous adoptons une approche axée sur les résultats pour chaque projet,
                                         avec un travail d'équipe nous surmontons tous les obstacles
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 noPadding">
                        <div class="singleBlog">
                            <div class="blogThumb">
                                <img src="images/blog/1.jpg" alt="">
                            </div>
                            <div class="blogDec">
                                <h2 class="blogTitle" ><a >l'esprit d'équipe</a></h2>
                                <div class="blogDate">Puissance</div>
                                <div class="bperaDiv">
                                    <p>
                                        Aucun de nous en agissant seul ne peut atteindre le succès,
                                        Un seul esprit nous unit et notre objectif est votre satisfaction

                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 noPadding">
                        <div class="singleBlog">
                            <div class="blogThumb">
                                <img src="images/blog/3.jpg" alt="">
                            </div>
                            <div class="blogDec">
                                <h2 class="blogTitle"><a >Succès</a></h2>
                                <div class="blogDate">Efficacité</div>
                                <div class="bperaDiv">
                                    <p>
                                       Nous croyons en l'idée de proposer des idées originales et de les transformer en un travail numérique à la fois innovant et mesurable.
                                       Notre devise est de ne pas abandonner

                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--BLOG END-->

        <!--SAY HELLO START-->
        <section class="sayhello" id="sayhello">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="sectionTitle bigTitle2">
                            <h5 class="text-uppercase bold magenta">Découvrez nous plus</h5>
                            <h2 class="lead">Galeries</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="singleSay saypaddingR text-center">
                            <div class="sayThumb">
                                <img src="images/say/1.jpg" alt="">
                                <h3 class="text-uppercase">Photos</h3>
                            </div>
                            <div class="sayDec">
                                <p><a href="galeries/" class="bes_button">voir plus</a></p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="singleSay saypaddingl text-center">
                            <div class="sayThumb">
                                <img src="images/say/2.jpg" alt="">
                                <h3 class="text-uppercase">Videos</h3>
                            </div>
                            <div class="sayDec">
                                <p><a href="#" class="bes_button">voir plus</a></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SAY HELLO END-->

        <!--CONTACT START-->
        <section class="contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="contactInner">
                            <h3 class="magenta light">Avoir une question? ou juste dire bonjour !</h3>
                            <div class="contactForm">
                                <form action="{{route('contact')}}" method="post" id="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="single_form">
                                                <label for="con_name">Nom:</label>
                                                <input type="text" name="name" id="con_name" class="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single_form">
                                                <label for="con_phone">Téléphone:</label>
                                                <input type="text" name="phone" id="con_phone" class="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single_form">
                                                <label for="con_email">Email:</label>
                                                <input type="email" name="email" id="con_email" class="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single_form">
                                                <label for="con_company">Société:</label>
                                                <input type="text" name="company" id="con_company" class="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single_form">
                                                <label for="con_msg">Message:</label>
                                                <textarea id="con_msg" name="message" class="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <input type="submit" value="Envoyer" id="con_submit" class="bes_button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CONTACT END-->

       
         <!--FOOTER-->
         <footer class="footer footer2 bgblack" id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <aside class="widget">
                            <div class="textWidget">
                                <div class="flogow">
                                    <div class="flogo ">
                                        <a ><img src="images/logo.png" alt=""></a>
                                    </div>
                                    <div class="logo logoText  hidden">
                                        <h1><a >Source D'art</a></h1>
                                    </div>
                                </div>
                                <h3 class="widgetTitle">À-propos <b>Source D'art</b></h3>
                                <p>Nous adoptons une approche axée sur les résultats pour chaque projet</p>
                                <div class="socialIcon">
                                    <a class="fb" href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a class="wts" href="https://wa.me/212661625028"><i class="fa fa-whatsapp"></i></a>
                                    <a class="gp" href="mailto:sourcedart.itservices.event@gmail.com"><i class="fa fa-google"></i></a>
                                    <a class="in" href="#"><i class="fa fa-instagram"></i></a>
                                    <a class="ytb" href="https://www.youtube.com/channel/UCX46mnum9jtAzimeuco0CeQ"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-6">
                        <aside class="widget">
                            <div class="newsletterwid">
                                <h3 class="widgetTitle">Inscription à la<b> Newsletter</b></h3>
                                <div class="newsletter">
                                    <form action="#" method="post" id="subscriptForm">
                                        <input type="email" name="sub_email" id="sub_email" placeholder="Entrer vous address email.">
                                        <input type="submit" name="sub_submit" id="sub_submit" value="Abonnée">
                                    </form>
                                </div>
                                <div class="fooInfo">
                                    <p><i class="flaticon-pin"></i><b>SIÈGE SOCIAL:</b> 326 Rue Ibn Derraj Sabti Hay bader ain smen 30000 fes Agdal Maroc</p>
                                    <p><i class="flaticon-technology"></i><b>+212 661-625028</b></p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <section class="copyright copyright2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="copyPera">&COPY; 2022 CREATE BY EL Ghazal SOURCE D'ART IT SERVICE</p>
                    </div>
                </div>
            </div>
        </section>
        <!---------->
        

        <div class="subscriptionSuccess">
            <div class="subsNotice">
                <i class="fa fa-thumbs-o-up closers"></i>
                <div class="clearfix"></div>
                <p class="closers">Subscription Request Successfully placed!</p>
            </div>
        </div>
        <div class="contactSuccess">
            <div class="consNotice">
                <i class="fa fa-thumbs-o-up closers"></i>
                <div class="clearfix"></div>
                <p class="closers">Your Message successfully sent!</p>
            </div>
        </div>

        <a id="backToTop" href="#"><i class="fa fa-angle-double-up"></i></a>

        <!-- ALL JS -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript" src="js/slick.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

    </body>
</html>