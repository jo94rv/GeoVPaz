<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">        
        <title>GeoVPaz</title>
        <link rel="icon" type="image/png" href="imagenes/favicon.png" />
        <meta name="viewport" content="width=device-width, user-scalable=no">     
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="lightbox/css/lightbox.css">
        <script src="lightbox/js/lightbox.js"></script>
        <script src="bower_components/webcomponentsjs/webcomponents.js"></script>
        <link rel="import" href="bower_components/polymer/polymer.html">
        <link rel="import" href="bower_components/paper-material/paper-material.html">
    </head>

    <body>    
        <?php require 'header.php' ?>
        <section>

            <paper-material elevation="2">                                    

                <div class="container">
                    
                    <div class="col-md-12">
                        <h1 class="title">Imágenes</h1>
                        <br>
                        <br>
                    </div>
                    
                    <div class="col-md-4">
                        
                        <a class="example-image-link" href="lightbox/images/1.jpg" data-lightbox="example-set" data-title="Monumento de la Virgen de la Paz, Trujillo, Venezuela."><img id="imagen" class="example-image img-responsive" src="lightbox/images/1-min.jpg" alt="Monumento de la Virgen de la Paz, Trujillo-Venezuela."/></a>                  

                    </div>
                    <div class="col-md-4">
                        
                        <a class="example-image-link" href="lightbox/images/2.jpg" data-lightbox="example-set" data-title="Monumento de la Virgen de la Paz, Trujillo-Venezuela."><img id="imagen" class="example-image img-responsive " src="lightbox/images/2-min.jpg" alt="Monumento de la Virgen de la Paz, Trujillo-Venezuela."/></a>                  

                    </div>
                    <div class="col-md-4">
                        
                        <a class="example-image-link" href="lightbox/images/3.png" data-lightbox="example-set" data-title="Procesión de la Virgen de la Paz, Trujillo-Venezuela."><img id="imagen" class="example-image img-responsive" src="lightbox/images/3-min.jpg" alt="Procesión de la Virgen de la Paz, Trujillo-Venezuela." /></a>                  

                    </div>
                    <div class="col-md-4">
                        
                        <a class="example-image-link" href="lightbox/images/4.jpg" data-lightbox="example-set" data-title="Procesión de la Virgen de la Paz, Trujillo-Venezuela."><img id="imagen" class="example-image img-responsive" src="lightbox/images/4-min.jpg" alt="Procesión de la Virgen de la Paz, Trujillo-Venezuela." /></a>                  

                    </div>

                    <div class="col-md-4">
                        
                        <a class="example-image-link" href="lightbox/images/5.jpg" data-lightbox="example-set" data-title="Procesión de la Virgen de la Paz, Trujillo-Venezuela."><img id="imagen" class="example-image img-responsive" src="lightbox/images/5-min.jpg" alt="Procesión de la Virgen de la Paz, Trujillo-Venezuela." /></a>                  

                    </div>

                    <div class="col-md-4">
                        
                        <a class="example-image-link" href="lightbox/images/6.jpg" data-lightbox="example-set" data-title="Imagen Colonial de Nuestra Señora de la Paz, Trujillo-Venezuela."><img id="imagen" class="example-image img-responsive" src="lightbox/images/6-min.jpg" alt="Imagen Colonial de Nuestra Señora de la Paz, Trujillo-Venezuela."/></a>                  

                    </div>

                    <div class="col-md-4">
                        
                        <a class="example-image-link" href="lightbox/images/7.jpg" data-lightbox="example-set" data-title="Imagen Colonial de Nuestra Señora de la Paz, Trujillo-Venezuela."><img id="imagen" class="example-image img-responsive" src="lightbox/images/7-min.jpg" alt="Imagen Colonial de Nuestra Señora de la Paz, Trujillo-Venezuela." class="img-responsive"/></a>                  

                    </div>

                </div>
            </paper-material>
        </section>
        

        

        <section>
            <?php require 'footer.php' ?>
        </section>
        <script src="lightbox/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>