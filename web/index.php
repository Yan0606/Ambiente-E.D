<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->  
        <title>Estrutura de Dados</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/logo2.png" >
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">
                
               
                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="index.php"><img src="images/logo1.png" alt="alternative"></a> 

                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#intro">Introdução</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features">Estrutura de Dados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#details">Manual de Instalação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="./quiz/index.php">Quiz</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Assuntos</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="tad.html">TAD</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="lista.html">Listas Simples</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="listaDupla.html">Lista Dupla</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="fila.html">Fila FIFO</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="pilhaEncadeada.html">Pilha Encadeada</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="arvoreBi.html">Árvore Binária de Busca</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="arvoreB.html">Árvore B</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="arvoreTrie.html">Árvore Trie</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="arvoreAvl.html">Árvore AVL</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="arvoreRubro.html">Árvore Rubro-Negra</a>
                                
                            </div>
                        </li>
                    </ul>
                   
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->


        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="text-container">
                            <h1 class="h1-large">Estrutura de Dados</h1>
                            <p>
                                <?php 
                                        if (isset($_SESSION["username"])) {
                                        // Se o usuário estiver logado, exiba a saudação e o link para sair
                                        echo "Olá, " . $_SESSION["username"];
                                        echo "<a class='sair' href='../Formulario/Banco/Conexão/logout.php'>  SAIR</a>";
                                    }
                                ?>
                            </p>
                            <p class="p-large">Venha aprender mais sobre Estrutura de Dados</p>
                            <a class="btn-solid-lg" href="../Formulario/formulario-main/form.html">Cadastre-se</a>
                            <a class="btn-solid-lg" href="ranking.php">Ranking</a>
                            
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-7">
                        <div class="image-container">
                            <img class="img-fluid" src="images/logodiogo.png" alt="alternative" width="400px">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->




        <!-- Introduction -->
        <div id="intro" class="basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <img class="img-fluid" src="images/Capa-programador.png" alt="alternative">
                    </div> <!-- end of col -->
                    <div class="col-lg-5">
                        <div class="text-container">
                            <h2>Programação Web e Estrutura de Dados</h2>
                            <p>Este site foi desenvolvido para a explicação de materiais do curso de Análise e Desenvolvimento de Sistemas.</p>
                            
                            
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of introduction -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Estrutura de Dados</h2>
                        <p class="p-heading">Aqui vamos explicar sobre o que é a Estrutura de dados, sua importância e porque são tão utilizadas. </p>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon-wrapper">
                                <div class="card-icon">
                                    <span class="fas fa-headphones-alt green"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">O que é ?</h4>
                                <p>Estrutura de dados é o estudo da organização eficiente e manipulação de dados. Ela envolve a escolha e implementação de estruturas que permitem acesso, modificação e busca otimizados. O objetivo é melhorar o desempenho e a eficiência dos algoritmos e programas que lidam com grandes volumes de dados.</p>
                                <a class="read-more no-line" href="article.html">Ver mais <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon-wrapper">
                                <div class="card-icon">
                                    <span class="far fa-clipboard blue"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Qual a importância ?</h4>
                                <p> A escolha correta da estrutura de dados melhora o desempenho do programa. Ela facilita o armazenamento, acesso e recuperação dos dados. Uma estrutura bem definida organiza o código e torna-o mais legível. As estruturas de dados são reutilizáveis e ajudam a resolver problemas complexos, manipulando grandes quantidades de dados. </p>
                                <a class="read-more no-line" href="article.html">Ver mais <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon-wrapper">
                                <div class="card-icon">
                                    <span class="far fa-comments purple"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Por que são usadas ?</h4>
                                <p>As estruturas de dados são usadas para melhorar a organização, acesso e manipulação de dados, tornando os programas mais eficientes, escaláveis e capazes de lidar com problemas complexos de forma mais adequada.</p>
                                <a class="read-more no-line" href="article.html">Ver mais <span class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->


        <!-- Details 1 -->
        <div id="details" class="basic-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="intro">
                            <h2>Manual de Instalação</h2>
                            <p>Para começar você deve instalar em seu sistema um editor de código, os exemplos que vamos mostrar, usamos o <a href="https://code.visualstudio.com">Visual Studio Code</a> e nas extensões dele usamos a extensão C#.</p>
                        </div> <!-- end of intro -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="image-container">
                            <img class="img-fluid" src="images/c1.png" alt="alternative">
                        </div>
                        <div class="image-container">
                            <img class="img-fluid" src="images/c2.png" alt="alternative">
                        </div>
                        
                        
                        <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-5">
                        <div class="text-container">
                           
                            <h2>Para começar</h2>
                            <p>Para começar a programar em C#, vamos em terminal e digitamos dotnet new console, afim de, automaticamente criar as pastas e arquivos necessários para iniciarmos.</p>
                          
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-2 -->
        <!-- end of details 1 -->


        
        


        <!-- Details 2 -->
        <div class="basic-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="text-container">
                            
                            <h2>Quais tecnologias foram usadas?</h2>
                            <p>Usamos EasyPHP para implementação do Banco de Dados relacional mysql, VScode como editor de código, e para a codificação foi usado php, css, JavaScript e Bootstrap como Framework. </p>
                          
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/tec.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-3 -->
        <!-- end of details 2 -->


       


        <!-- Testimonials -->
        <div class="slider-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Equipe de Desenvolvimento</h2>
                     
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card Slider -->
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">
                                    
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="testimonial-text">Tenho curso técnico em Desenvolvimento de Sistemas pela Etec e hoje curso Análise e Desenvolvimento de Sistemas pela Fatec Prudente</p>
                                                <div class="details">
                                                    <img class="testimonial-image" src="images/yan.png" alt="alternative">
                                                    <div class="text">
                                                        <div class="testimonial-author">Yan Andrade</div>
                                                        <div class="occupation">Análise e Desenvolvimento de Sistemas-Fatec</div>
                                                    </div> <!-- end of text -->
                                                </div> <!-- end of details -->
                                            </div>
                                        </div> 
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="testimonial-text">Tenho curso técnico em Desenvolvimento de Sistemas pela Etec e hoje curso Análise e Desenvolvimento de Sistemas pela Fatec Prudente</p>
                                                <div class="details">
                                                    <img class="testimonial-image" src="images/adryan.png" alt="alternative">
                                                    <div class="text">
                                                        <div class="testimonial-author">Adryan Freire</div>
                                                        <div class="occupation">Análise e Desenvolvimento de Sistemas-Fatec</div>
                                                    </div> <!-- end of text -->
                                                </div> <!-- end of details -->
                                            </div>
                                        </div> 
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->


                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="testimonial-text">Tenho curso técnico em Desenvolvimento de Sistemas pela Etec e hoje curso Análise e Desenvolvimento de Sistemas pela Fatec Prudente</p>
                                                <div class="details">
                                                    <img class="testimonial-image" src="images/diogo.png" alt="alternative">
                                                    <div class="text">
                                                        <div class="testimonial-author">Diogo Neves</div>
                                                        <div class="occupation">Análise e Desenvolvimento de Sistemas-Fatec</div>
                                                    </div> <!-- end of text -->
                                                </div> <!-- end of details -->
                                            </div>
                                        </div> 
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="testimonial-text">Tenho curso técnico em Desenvolvimento de Sistemas pela Etec e hoje curso Análise e Desenvolvimento de Sistemas pela Fatec Prudente</p>
                                                <div class="details">
                                                    <img class="testimonial-image" src="images/arthas.png" alt="alternative">
                                                    <div class="text">
                                                        <div class="testimonial-author">Arthur</div>
                                                        <div class="occupation">Análise e Desenvolvimento de Sistemas-Fatec</div>
                                                    </div> <!-- end of text -->
                                                </div> <!-- end of details -->
                                            </div>
                                        </div> 
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    

                                   
            
                                </div> <!-- end of swiper-wrapper -->
            
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <!-- end of add arrows -->
            
                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of slider-container -->
                        <!-- end of card slider -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of slider-2 -->
        <!-- end of testimonials -->


        


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>Desenvolvimento</h6>
                            <p class="p-small">Desenvolvido por: <a href="https://github.com/Yan0606" target="_blank">Yan Andrade</a>, <a href="https://github.com/adryanzx" target="_blank">Adryan Freire</a>, Diogo Neves e Arthur Marques, estudantes de Análise e Desenvolvimento de Sistemas da Fatec de Presidente Prudente.</p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Auxilio e Direção </h6>
                            <p class="p-small">Professor: Bruno Santos De Lima</p>
                            
                        
                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/FatecPrudente" target="_blank">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://twitter.com/FatecPrudente" target="_blank">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                           
                            <span class="fa-stack">
                                <a href="https://www.instagram.com/fatecprudente/" target="_blank">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>

                            <span class="fa-stack">
                                <a href="https://github.com/Yan0606/Ambiente-E.D" target="_blank">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x"></i>
                                </a>
                            </span>

                          

                            <a href="www.fatecsp.br"><strong>Fatec</strong></a></p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © FatecPrudente</p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        
            
        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>