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

        <!-- From start -->
        <section class="form py-120">
            <div class="container">
                <div class="section-title text-center pt-60">
                    <h2 class="text-center">
                        <img src="assets/images/title-border.png" alt="title-border" />
                        Simulação Saque <br />
                        Aniversário FGTS
                    </h2>
                </div>

                <form class="msf step-form">
                    

                    <div class="msf-content">
                        <div class="msf-view">
                            <div class="form-input">
                                <input type="text" id="full-name">
                                <label for="full-name">Nome completo *</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="birthday">
                                <label for="birthday">Nascimento *</label>
                            </div>
                        </div>
                        <div class="msf-view">
                            <div class="form-input">
                                <input type="text" id="username">
                                <label for="username">Nascimento *</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="cpe">
                                <label for="cpe">CPE *</label>
                            </div>
                        </div>
                        <div class="msf-view">
                            <div class="form-input">
                                <input type="text" id="watsapp">
                                <label for="watsapp">Celular (WhatsApp) *</label>
                            </div>
                            <div class="form-input form-label">
                                <label>
                                    Autorizo o envio da simulação por email ou whatsapp
                                    <input type="checkbox">
                                    <span></span>
                                </label>
                                <label>
                                    Aceito receber notícias e informações da RBS
                                    <input type="checkbox">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="msf-header">
                        <ul>
                            <li class="msf-step"></li>
                            <li class="msf-step"></li>
                            <li class="msf-step"></li>
                        </ul>
                    </div>

                    <div class="msf-navigation">
                        
                        <button type="button" data-type="back" class="msf-nav-button"><i class="fa fa-chevron-left"></i> Anterior</button>
                        <button type="button" data-type="next" class="msf-nav-button">Próximo <i class="fa fa-chevron-right"></i></button>
                        <button type="submit" data-type="submit" class="msf-nav-button"><i class="fa fa-check-circle"></i> Enviar</button>
                            
                    </div>
                </form>
            </div>
        </section>
        <!-- From end -->

        <!-- Form popup start -->
        <div class="form-popup">
            <div class="close">
                <i class="fas fa-times"></i>
            </div>
            <p>Para receber a <strong>simulação</strong> com o seu <strong>saldo FGTS correto</strong>, é preciso aderir ao Saque Aniversário no APP do FGTS e autorizar o Banco SAFRA a consultar seu saldo FGTS.</p>
            <div class="btn-area">
                <a class="popup-mobile-show" href="#">Ver passo a passo</a>
                <a class="dismiss" href="#">Continuar</a>
            </div>
        </div>
        <!-- Form popup end -->

        <!-- Popup start -->
        <section class="popup-mobile style-two">
            <div class="close">
                <i class="fas fa-times"></i>
            </div>
            <div class="container">
                <h2>Como saber meu Saldo do FGTS?</h2>
                <div class="row">
                    <div class="col-sm-4 mb-30">
                        <div class="mobile-item">
                            <div class="img">
                                <img src="assets/images/p-mobile-1.png" alt="mobile">
                                <span>1</span>
                            </div>
                            <p>Caso ainda não tenha criado, crie sua senha no site <strong>GOV.BR</strong></p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-30">
                        <div class="mobile-item">
                            <div class="img">
                                <img src="assets/images/p-mobile-2.png" alt="mobile">
                                <span>2</span>
                            </div>
                            <p>Entre no <strong>Aplicativo FGTS</strong> da Caixa Econômica com a senha do GOV.BR e clique em <strong>Saldo Total do FGTS</strong></p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-30">
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

        <script type="text/javascript">
            $(".msf:first").multiStepForm({
                activeIndex: 0,
                allowClickNavigation: true,
                allowUnvalidatedStep: false,
                hideBackButton: false,
            });
        </script>
    </body>
</html>
