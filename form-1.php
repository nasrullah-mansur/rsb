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

        <?php
        include 'include/help.php';
        include 'include/footer.php';
        include 'include/script.php';
    ?>

        <script type="text/javascript">
            $(".msf:first").multiStepForm({
                activeIndex: 2,
                allowClickNavigation: true,
                allowUnvalidatedStep: false,
                hideBackButton: false,
                // validate: {
                //     rules : {
                //         name : "required",
                //         email : {
                //             required : true,
                //             email : true
                //             }
                //         }
                //     }
            });
        </script>
    </body>
</html>
