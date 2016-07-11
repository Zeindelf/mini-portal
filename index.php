<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Inicial</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/base.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>


        <!-- HEADER -->
        <div class="main-header">

            <div class="nav-header">
                <div class="container">
                    <ul class="margin-left">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div><!-- /nav-header -->

            <div class="container">
                <div class="row">
                    <div class="col six logo-header">
                        <h1><a href="#">Zeinstrich</a></h1>
                        <h2 class="font-light">Magazine Template</h2>
                    </div><!-- /logo-header -->

                    <div class="col six banner-header">
                        <img src="img/publicidade-banner.jpg" alt="">
                    </div><!-- /banner-header -->
                </div>
            </div>

            <!-- Responsive menu -->
            <div class="menu-bar">
                <div class="btn-menu">
                    <span class="icon-bars"></span><p>Categoria</p>
                </div>
            </div><!-- /menu-bar -->

            <div class="nav-category">
                <div class="container">
                    <ul class="margin-left">
                        <li class="home-icon"><a href="http://127.0.0.1/projects/04-blog-inicial-responsivo-proprio"><span class="icon-home"></span></a></li>
                        <li><a href="#">Negócios</a></li>
                        <li><a href="#">Tecnologia</a></li>
                        <li><a href="#">Entretenimento</a></li>
                        <li><a href="#">Esportes</a></li>
                        <li><a href="#">Saúde</a></li>
                        <li><a href="#">Games</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div><!-- /nav-category -->

        </div><!-- /main-header -->



        <!-- CONTENT -->
        <div class="container">
            <div class="row">

                <div class="col eight">
                    <div class="main-content">

                        <!-- SLIDE -->
                        <div class="main-slide">
                            <ul id="slide" class="slide">
                                <li>
                                    <img src="img/entretenimento-1.jpg" title="" alt="">
                                    <a href="link" class="caption">
                                        <p>George Lucas critica clima "retrô" de novo filme  Star Wars</p>
                                        <p class="caption-info"><span class="icon-clock margin-icon"></span>31/12/2015 &nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-comment-o margin-icon"></span>16 Comentários</p>
                                    </a>
                                </li>

                                <li>
                                    <img src="img/esportes-1.jpg" title="" alt="">
                                    <a href="link" class="caption">
                                        <p>Barcelona manda cinco bolas na trave, mas goleia Betis no Camp Nou</p>
                                        <p class="caption-info"><span class="icon-clock margin-icon"></span>31/12/2015 &nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-comment-o margin-icon"></span>16 Comentários</p>
                                    </a>
                                </li>

                                <li>
                                    <img src="img/games-1.jpg" title="" alt="">
                                    <a href="link" class="caption">
                                        <p>Veja datas de lançamento de 50 games confirmados para 2016</p>
                                        <p class="caption-info"><span class="icon-clock margin-icon"></span> 29/12/2015 &nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-comment-o margin-icon"></span>15 Comentários</p>
                                    </a>
                                </li>

                                <li>
                                    <img src="img/negocios-1.jpg" title="" alt="">
                                    <a href="link" class="caption">
                                        <p>Veja sete setores de franquia que vão se destacar em 2016</p>
                                        <p class="caption-info"><span class="icon-clock margin-icon"></span>31/12/2015 &nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-comment-o margin-icon"></span>3 Comentários</p>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- /main-slide -->
                        <div class="clear"></div>


                        <?php for ($i = 1; $i <= 3; $i++): ?>
                        <!-- CONTENT -->
                            <div class="container-article">

                                <div class="main-article">
                                    <div class="main-picture">
                                        <img src="img/tecnologia-1.jpg" alt="" title="">
                                        <div class="main-category">
                                            <a href="#" class="btn">Tecnologia</a>
                                        </div>
                                    </div><!-- /main-picture -->

                                    <h1 class="main-title"><a href="#">Aplicativo do Facebook pode ganhar feeds divididos por assuntos</a></h1>
                                    <ul class="main-info">
                                        <li><a href="#"><span class="icon-clock margin-icon"></span>31/12/2015</a></li>
                                        <li><a href="#"><span class="icon-comment-o margin-icon"></span>9 Comentários</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <p class="main-desc">
                                        Para os usuários iOS, o aplicativo do Facebook mostrou uma novidade nesta semana. Ao que tudo indica, entrou em fase de testes um recurso no app que permite navegar por diferentes feeds de notícias, podendo dividi-los por assuntos específicos.
                                    </p>

                                    <a href="#" class="btn btn-leia radius"><span class="icon-caret-right margin-icon"></span> Leia Mais</a>
                                </div><!-- /main-article -->


                                <div class="main-article">
                                    <div class="main-picture">
                                        <img src="img/esportes-1.jpg" alt="" title="">
                                        <div class="main-category">
                                            <a href="#" class="btn">Esportes</a>
                                        </div>
                                    </div><!-- /main-picture -->

                                    <h1 class="main-title"><a href="#">Barcelona manda cinco bolas na trave, mas goleia Betis no Camp Nou</a></h1>
                                    <ul class="main-info">
                                        <li><a href="#"><span class="icon-clock margin-icon"></span>31/12/2015</a></li>
                                        <li><a href="#"><span class="icon-comment-o margin-icon"></span>16 Comentários</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <p class="main-desc">
                                        O Barcelona bateu o recorde de gols de um clube espanhol num mesmo ano ao golear o Betis por 4 a 0, nesta quarta-feira, no seu último jogo de 2015. Chegou a 180 gols, mas poderia ter feito bem mais. Foram cinco bolas na trave, sendo quatro no travessão.</p>

                                    <a href="#" class="btn btn-leia radius"><span class="icon-caret-right margin-icon"></span> Leia Mais</a>
                                </div><!-- /main-article -->
                                <div class="clear"></div>

                            </div><!-- /container-article -->
                        <?php endfor; ?>


                    <!-- PAGINATOR -->
                    <div class="main-paginator">
                        <ul>
                            <li><a href="#">Anterior</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">Próxima</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    </div><!-- /main-content -->
                </div>


                <!-- SIDEBAR -->
                <div class="col four">
                    <div class="main-sidebar">

                        <div class="main-search">
                            <form action="" method="post">
                                <input type="text" placeholder="Pesquisar" class="btn-search-input" name="">
                                <button class="btn-search-confirm"><span class="icon-search"></span></button>
                            </form>
                            <div class="clear"></div>
                        </div><!-- /main-search -->

                        <div class="main-social">
                            <h2 class="title-sidebar">Redes Sociais</h2>
                            <ul class="social">
                                <li><a href="#"><span class="icon-facebook-square"></span></a></li>
                                <li><a href="#"><span class="icon-google-plus-square"></span></a></li>
                                <li><a href="#"><span class="icon-twitter-square"></span></a></li>
                                <li><a href="#"><span class="icon-youtube-square"></span></a></li>
                                <li><a href="#"><span class="icon-pinterest-square"></span></a></li>
                            </ul>
                            <div class="clear"></div>
                        </div><!-- /main-social -->

                        <div class="main-popular">
                            <h2 class="title-sidebar">Posts Populares</h2>
                            <ul class="popular">
                                <li>
                                    <span class="popular-num">1</span>
                                    <a href="#">George Lucas critica clima "retrô" de novo filme  Star Wars</a>
                                </li>

                                <li>
                                    <span class="popular-num">2</span>
                                    <a href="#">Barcelona manda cinco bolas na trave, mas goleia Betis no Camp Nou</a>
                                </li>

                                <li>
                                    <span class="popular-num">3</span>
                                    <a href="#">Veja datas de lançamento de 50 games confirmados para 2016</a>
                                </li>

                                <li>
                                    <span class="popular-num">4</span>
                                    <a href="#">Zootopia: Assista ao novo trailer da animação da Disney</a>
                                </li>

                                <li>
                                    <span class="popular-num">5</span>
                                    <a href="#">Grávida dá à luz dentro de carro com ajuda de policiais em Belo Horizonte</a>
                                </li>
                            </ul>
                        </div><!-- /popular -->

                        <div class="main-tags">
                            <h2 class="title-sidebar">Tags</h2>
                            <ul class="tags">
                                <li>
                                    <a href="#">Futebol</a>
                                </li>

                                <li>
                                    <a href="#">Video Game</a>
                                </li>

                                <li>
                                    <a href="#">Filme</a>
                                </li>

                                <li>
                                    <a href="#">Economia</a>
                                </li>

                                <li>
                                    <a href="#">Filme</a>
                                </li>

                                <li>
                                    <a href="#">Futebol</a>
                                </li>

                                <li>
                                    <a href="#">Video Game</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div><!-- /tags -->

                        <div class="main-publicidade">
                            <h2 class="title-sidebar">Publicidade</h2>
                            <div class="publicidade">
                                <a href="#"><img src="img/publicidade-sidebar.jpg" alt=""></a>
                            </div>
                        </div><!-- /main-publicidade -->

                        <div class="main-follow">
                            <h2 class="title-sidebar">Siga-nos</h2>
                        </div><!-- /main-follow -->

                    </div><!-- /main-sidebar -->
                </div>

            </div>
            <div class="clear"></div>
        </div>



        <!-- FOOTER -->
        <div class="main-footer">

            <div class="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col four footer-about">
                            <h2>Sobre</h2>
                            <p>Aliquam et enim sed eros accumsan accumsan. Etiam a est lacus. Etiam gravida erat id massa dapibus faucibus. Donec id condimentum ipsum. Cras congue urna sed nisi tempus cursus non a ipsum. Etiam nisi tellus, elementum in sapien in, pulvinar pretium dolor. Donec nulla urna, iaculis non orci non, viverra pharetra quam. Maecenas quis iaculis risus. In tincidunt consectetur efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed at blandit est. Sed venenatis sollicitudin lectus, vel faucibus neque mollis vel. Duis eleifend turpis at mollis euismod. Maecenas facilisis ligula a rhoncus ultricies. Praesent at faucibus dolor. </p>
                        </div>

                        <div class="col four">
                            <h2>Categoria</h2>
                            <ul>
                                <li><a href="#">Negócios</a></li>
                                <li><a href="#">Tecnologia</a></li>
                                <li><a href="#">Entretenimento</a></li>
                                <li><a href="#">Esportes</a></li>
                                <li><a href="#">Saúde</a></li>
                                <li><a href="#">Games</a></li>
                            </ul>
                        </div>

                        <div class="col four footer-news">
                            <h2>Posts Recentes</h2>
                            <ul>
                                <li><a href="#">George Lucas critica clima "retrô" de novo filme  Star Wars</a></li>
                                <li><a href="#">Aplicativo do Facebook pode ganhar feeds divididos por assuntos</a></li>
                                <li><a href="#">Barcelona manda cinco bolas na trave, mas goleia Betis no Camp Nou</a></li>
                                <li><a href="#">Veja sete setores de franquia que vão se destacar em 2016</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div><!-- /footer-info -->


            <div class="footer-copy">
                <div class="container">
                    <p class="copy-left">2015 - <?= date('Y'); ?> &copy; Todos os direitos reservados</p>
                    <p class="copy-right">Desenvolvido por <a class="font-bold" href="http://zeindelf.com" target="_blank">Zeindelf</a></p>
                    <div class="clear"></div>
                </div>
            </div><!-- /footer-copy -->

        </div><!-- /main-footer -->



        <!-- SCRIPTS -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/responsive-slides.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
    </body>
</html>