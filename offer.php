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

    <!-- Offer start -->
    <section class="offer-page py-120">
        <div class="container">
            <div class="section-title pt-120 text-center">
                <h2 class="text-center">
                    <img src="assets/images/title-border.png" alt="title-border">
                    Simulação Simples <br> Saque Aniversário FGTS
                </h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="handler">
                        <div class="count">
                            <small>Informe seu saldo FGTS</small>
                            <p>
                                <span class="decrement">
                                    <i class="fas fa-minus"></i>
                                </span>
                                <span class="total">R$ 1.000,00</span>
                                <span class="increment active">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </p>
                        </div>

                        <p>Saldo mínimo para contratar: R$ 1.000,00</p>
                        <p class="color"><a class="popup-mobile-show" href="#">Como saber meu saldo FGTS?</a></p>
                    </div>
                </div>
                <div class="col">
                    <div class="table">
                        <img src="assets/images/table.png" alt="table">
                        <ul>
                            <li>
                                <span>Valor Liberado</span>
                                <span class="total">R$ 630,08</span>
                            </li>
                            <li>
                                <span>Taxa </span>
                                <span>0,99% a.m</span>
                            </li>
                            <li>
                                <span>CET</span>
                                <span>26,70%</span>
                            </li>
                            <li>
                                <span>Saldo Informado</span>
                                <span>R$ 1.000,00</span>
                            </li>
                            <li>
                                <span>Valor Bruto*</span>
                                <span>R$ 965,00</span>
                            </li>
                            <li>
                                <div class="text-center w-100">
                                    <a href="#" class="primary-btn">
                                        <img src="assets/images/icon.png" alt="icon">
                                        <span>Simular com meus dados</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="text-center">* Valor bruto é o total do valor utilizado do seu Saldo FGTS</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer end -->

    <!-- Popup start -->
    <section class="popup-mobile">
        <div class="close">
            <i class="fas fa-times"></i>
        </div>
        <div class="container">
            <h2>Como saber meu Saldo do FGTS?</h2>
            <div class="row">
                <div class="col-sm-6 mb-30">
                    <div class="mobile-item">
                        <div class="img">
                            <img src="assets/images/p-mobile-1.png" alt="mobile">
                            <span>1</span>
                        </div>
                        <p>Caso ainda não tenha criado, crie sua senha no site <strong>GOV.BR</strong></p>
                    </div>
                </div>
                <div class="col-sm-6 mb-30">
                    <div class="mobile-item">
                        <div class="img">
                            <img src="assets/images/p-mobile-2.png" alt="mobile">
                            <span>2</span>
                        </div>
                        <p>Entre no <strong>Aplicativo FGTS</strong> da Caixa Econômica com a senha do GOV.BR e clique em <strong>Saldo Total do FGTS</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popup end -->

    <?php
        include 'include/help.php';
        include 'include/footer.php';
        include 'include/script.php';
    ?>


    
</body>
</html>