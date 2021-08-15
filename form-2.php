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
                        Indique sua Empresa <br>
                        Crédito Consignado Privado
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
                                <input type="email" id="email">
                                <label for="email">Seu email *</label>
                            </div>
                        </div>
                        <div class="msf-view">
                            <div class="form-input">
                                <input type="text" id="phone">
                                <label for="phone">Seu telefone *</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="address">
                                <label for="address">Nome da sua empresa *</label>
                            </div>
                        </div>
                        <div class="msf-view">
                            <div class="form-input">
                                <input type="text" id="rh">
                                <label for="rh">Nome do responsável (RH ou Diretor) *</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="mobile">
                                <label for="mobile">Telefone do responsável *</label>
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
                                <p class="pt-3 mt-2 pl-2">* Campos obrigatórios</p>
                            </div>
                        </div>
                    </div>


                    <div class="msf-navigation">
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


    </body>
</html>
