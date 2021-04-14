<?php 
include_once("header.php")
?>

<!--CONTENIDO-->

<div class="collection_text">Contáctanos</div>
    <div class="layout_padding contact_section">
        <div class="container">
            <h1 class="new_text ttw"><strong>ESPERAMOS TU MENSAJE</strong></h1>
        </div>
        <div class="container-fluid ram">
            <div class="row">
                <div class="col-md-7">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Apellido" name="apellido">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Correo" name="correo">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="massage-bt" placeholder="Mensaje" rows="5" id="comment"
                                            name="mensaje"></textarea>
                                    </div>

                                    <div class="send_btn">
                                <input type="submit" type="button" class="main_bt"  name="enviar" value="ENVIAR">
                            </div>
                                </form>
                            </div>
                         
                            <?php 
                            include_once("regcontacto.php")
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="shop_banner">
                        <div class="our_shop"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--CONTENIDO-->

<?php 
include_once("footer.php")
?>