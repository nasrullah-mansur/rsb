<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'include/head.php';
    ?>
</head>
<body>
    
    <?php
        include 'include/header.php';
    ?>

    <!-- Banner start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <h2>Crédito Pessoal inteligente</h2>
                        <p>Crédito para <span>quem precisa</span> 
                        Oportunidade para quem <span>oferta</span></p>
                        <a href="#" class="primary-btn">
                            <img src="assets/images/icon.png" alt="icon">
                            <span>Simule agora</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image text-right">
                        <img src="assets/images/help.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner end -->

    <!-- About start -->
    <section class="about bg-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-form">
                        <form>
                            <input type="text" placeholder="Nome Completo">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Celular">
                            <textarea placeholder="Mensagem"></textarea>
                            <button type="submit"><i class="fas fa-check-circle"></i> Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text">
                        <h2>O que fazemos?</h2>
                        <p>A RBS Credi é formada por especialistas em crédito, público e privado, e tem como missão oferecer as melhores condições de crédito para as pessoas e mais oportunidades para as empresas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- Offer start -->
    <section class="offer">
        
        <div class="container">
            <div class="section-title sm bg-color">
                <h2 class="text-center">
                    <img src="assets/images/title-border.png" alt="title-border">
                    Ofertas de Crédito
                </h2>
            </div>
            <div class="offer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="offer-item">
                            <img src="assets/images/s-1.png" alt="image">
                            <p>Ser maior de 18 anos ou emancipado</p>
                            <a href="#">Saiba mais</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="offer-item">
                            <img src="assets/images/s-2.png" alt="image">
                            <p>Estar com CPF em situação regular na Receita Federal</p>
                            <a href="#">Saiba mais</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 m-auto">
                        <div class="offer-item">
                            <img src="assets/images/s-3.png" alt="image">
                            <p>Possuir conta corrente ou poupança</p>
                            <a href="#">Saiba mais</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <!-- Offer end -->

    

    <?php
        include 'include/help.php';
        include 'include/footer.php';
        include 'include/script.php';
    ?>


    
</body>
</html>