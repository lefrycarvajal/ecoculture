<?php 
include_once("header.php")
?>

<!--CONTENIDO-->

<div class="collection_text">NUEVOS PRODUCTOS</div>

<div class="layout_padding collection_section">
    <div class="container">
        <p class="consectetur_text ttw">Adéntrate en el universo más eco. Que tu hogar se convierta en inspiración y que
            tu impacto sea más positivo que nunca. Tu rutina diaria más eco que nunca. Mima tu piel, a los tuyos ¡y
            al medio ambiente!</p>
        <div class="collection_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="shoes-img"><img src="images/sostenible-1.jpg"></div>
                        <p class="sport_text">SET DE CUBIERTOS BAMBÚ</p>
                        <div class="dolar_text"><strong style="color: #149414;">RD$1,199</strong> </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img2">
                        <div class="shoes-img2"><img src="images/sostenible-2.jpeg"></div>
                        <p class="sport_text">CEPILLO DE DIENTES + DESODORANTE SIN BICARBONATO</p>
                        <div class="dolar_text"><strong style="color: #149414;">RD$2,179</strong> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collection_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="shoes-img"><img src="images/new-1.jpg"></div>
                        <p class="sport_text">MAQUINILLA DE AFEITAR</p>
                        <div class="dolar_text"><strong style="color: #149414;">RD$1,499</strong> </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img2">
                        <div class="shoes-img2"><img src="images/new-2.jpg"></div>
                        <p class="sport_text">COMBO PEINETAS DE BAMBÚ + SET 10 CUCHILLAS</p>
                        <div class="dolar_text"><strong style="color: #149414;">RD$1,599</strong> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collection_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="shoes-img"><img src="images/new-3.jpg"></div>
                        <p class="sport_text">CHAMPÚ DE CALÉNDULA</p>
                        <div class="dolar_text"><strong style="color: #149414;">RD$950</strong> </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img2">
                        <div class="shoes-img2"><img src="images/new-4.jpg"></div>
                        <p class="sport_text">BROCHA DE AFEITADO</p>
                        <div class="dolar_text"><strong style="color: #149414;">RD$550</strong> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ram1">
    <div class="container">
        <h1 class="new_text"><strong>TE DAMOS UNA PRUEBA GRATIS EN UNO DE ESTOS PRODUCTOS.</strong></h1>
        <h1 class="new_text"><strong>TÚ LO ELIGES.</strong></h1>
    </div>
        <div class="email_box2">
            <div class="input_main2">
                <div class="container">
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Correo" name="correo">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Producto Elegido" name="producto">
                        </div>
                        <div class="form-group">
                            <input type="text" class="massage-bt" placeholder="Dirección" name="direccion">
                        </div>
                        <div class="send_btn">
                    <button class="main_bt" type="submit" name="send">ENVIAR</button>
                </div>
                    </form>
                    <?php 
                    include_once("regnewp.php")
                    ?>
                </div>

            </div>
        </div>
</div>


<!--CONTENIDO-->

<?php 
include_once("footer.php")
?>