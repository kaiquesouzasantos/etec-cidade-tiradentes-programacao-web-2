 <?php require("assets/php/contoller.php");?>

 <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Dev.Watch</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo"><i class='bx bxs-watch nav__logo-icon'></i> Dev.Watch</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Inicio</a></li>
                        <li class="nav__item"><a href="#recomendados" class="nav__link">Recomendados</a></li>
                        <li class="nav__item"><a href="#produtos" class="nav__link">Produtos</a></li>
                        <li class="nav__item"><a href="#lancamentos" class="nav__link">Lançamentos</a></li>
                    </ul>

                    <div class="nav__close" id="nav-close"><i class='bx bx-x' ></i></div>
                </div>

                <div class="nav__btns">
                    <i class='bx bx-moon change-theme' id="theme-button"></i>
                    
                    <a class="nav__shop" href="login.html"><i class='bx bx-user'></i></a>
                    <div class="nav__shop" id="cart-shop"><i class='bx bx-shopping-bag' ></i></div>
                    <div class="nav__toggle" id="nav-toggle"><i class='bx bx-grid-alt' ></i></div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="assets/img/home.png" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">Facebook</a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">Twitter</a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">Instagram</a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">NOVO RELOGIO <br> C - PERPETUO</h1>
                        <p class="home__description">
                            Movimento do relógio mecânico, corda automática Pellaton, calibre manufaturado 52610, reserva de marcha de 7 dias, indicação da reserva de marcha, calendário perpétuo...                        </p>
                        <span class="home__price">R$246.100</span>

                        <div class="home__btns">
                            <a href="#produtos" class="button button--gray button--small">Descobrir</a>

                            <button class="button home__button">+ Carrinho</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== RECOMENDADOS ====================-->
            <section class="featured section container" id="recomendados">
                <h2 class="section__title">Recomendados</h2>

                <div class="featured__container grid">
                    <?php gerenciaRecomendados();?>
                </div>
            </section>

            <!--==================== SOBRE ====================-->
            <section class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">SOBRE NOS</h2>
                        <h1 class="story__title">Relogios Inspiradores</h1>
                        <p class="story__description">Os relógios mais recentes e modernos deste ano, estão disponíveis em várias apresentações nesta loja, descubra-os já.</p>
    
                        <a href="#products" class="button button--small">Descobrir</a>
                    </div>

                    <div class="story__images">
                        <img src="assets/img/story.png" alt="" class="story__img">
                        <div class="story__square"></div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUTOS ====================-->
            <section class="products section container" id="produtos">
                <h2 class="section__title">Produtos</h2>

                <div class="products__container grid">
                    <?php gerenciaProdutos();?>
                </div>
            </section>

            <!--==================== AVALIACAO ====================-->
            <section class="testimonial section container">
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <?php 
                                escreveAvaliacao("Augusto Maia", "Maio 27. 2022", "São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.");
                                escreveAvaliacao("Silverio Oliveira", "Fevereiro 13. 2022", "São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.");
                                escreveAvaliacao("Otávio Augusto Tiberio", "Dezembro 18. 2021", "São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.");                            
                            ?>
                        </div>
                        
                        <div class="swiper-button-next"><i class='bx bx-right-arrow-alt' ></i></div>
                        <div class="swiper-button-prev"><i class='bx bx-left-arrow-alt' ></i></div>
                    </div>

                    <div class="testimonial__images">
                        <div class="testimonial__square"></div>
                        <img src="assets/img/img_avaliacao.png" alt="" class="testimonial__img">
                    </div>
                </div>
            </section>

            <!--==================== NEW ====================-->
            <section class="new section container" id="lancamentos">
                <h2 class="section__title">Lancamentos</h2>
                
                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <?php gerenciaLancamentos();?>          
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== NEWSLETTER ====================-->
            <section class="newsletter section container">
                <div class="newsletter__bg grid">
                    <div>
                        <h2 class="newsletter__title">Assine o nosso<br> Newsletter</h2>
                        <p class="newsletter__description">
                            Não perca seus descontos. Assine nossa newsletter por e-mail para obter as melhores ofertas, descontos, cupons, presentes e muito mais.
                        </p>
                    </div>

                    <form action="https://api.staticforms.xyz/submit" class="newsletter__subscribe" method="post">
                        <input type="hidden" name="accessKey" value="f02ab4ca-351e-4ae3-9e1e-c35ee22e36c9"> <!-- Requerimento -->
                        <input type="hidden" name="redirectTo" value="http://etec199-2021-kaiquesouzasantos.epizy.com/1_projetos/2505/index.php"> <!-- Constancia -->
                        <input type="text" name="honeypot" style="display: none;"> <!-- Proteção de Spam -->
                        <input type="email" name="$E-mail" placeholder="Digite seu e-mail" class="newsletter__input">
                        <button class="button" type="submit">INSCREVER</button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Endereço</h3>

                    <ul class="footer__list">
                        <li>São Paulo - Brasil</li>
                        <li>Av. Don Corleone, 344</li>
                        <li>123-456-789</li>
                        <li>devwatch@gmail.com</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Informações</h3>

                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">Razão Social</a></li>
                        <li><a href="#" class="footer__link">Suporte Personalizado</a></li>
                        <li><a href="#" class="footer__link">Trabalhe Conosco</a></li>
                        <li><a href="#" class="footer__link">Politica de Privacdade</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Loja</h3>

                    <ul class="footer__links">
                        <li><a href="#home" class="footer__link">Inicio</a></li>
                        <li><a href="#recomendados" class="footer__link">Recomendados</a></li>
                        <li><a href="#produtos" class="footer__link">Produtos</a></li>
                        <li><a href="#lancamentos" class="footer__link">Lançamentos</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class='bx bxl-facebook'></i></a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social-link"><i class='bx bxl-twitter' ></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link"><i class='bx bxl-instagram' ></i></a>
                    </ul>
                </div>
            </div>

            <span class="footer__copy">&#169; Kaique Souza Santos. Todos os direitos reservados.</span>
        </footer>

        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i></a>

        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
