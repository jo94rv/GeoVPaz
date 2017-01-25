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
                        <h1 class="title">Acerca de <img id="titulo" src="imagenes/geovpaz_text3.png"></h1>
                        <br>
                    </div>

                    <div class="col-md-12">
                        <p id="texto">Todos los 24 de Enero se celebra en el Estado Trujillo el día de la Virgen de la Paz. Esta advocación de la Virgen María, representa para la feligresía de todo el Estado Trujillo, el espíritu pacífico que caracteriza al pueblo trujillano. Todos los años, participan más y más feligreses provenientes de los 20 municipios que conforman la entidad trujillana, así como también personas originarias de distintas partes de Venezuela. Las actividades que se realizan durante las festividades de la Virgen de la Paz van desde una procesión por el casco central de Trujillo, visitas de la imagen a distintas instituciones y parroquias de la capital, una misa solemne oficiada por el Obispo hasta ofrendas florales realizadas por parte del Ejecutivo Regional.</p>
                        <p id="texto">Con la utilización de <img id="titulo" src="imagenes/geovpaz_text.png">  los usuarios podrán saber la ubicación exacta y en tiempo real de la imagen de Nuestra Señora de la Paz, donde quieran y cuando quieran.</p>
                        <p id="texto">Con <img id="titulo" src="imagenes/geovpaz_text.png"> se busca contribuir en el crecimiento social y tecnológico del Estado Trujillo.</p>
                        <br><p id="texto"><img id="titulo" src="imagenes/geovpaz_text.png"> es patrocinado por:</p>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <img src="imagenes/delbosque.png"  class="img-responsive">
                    </div>
                     <div class="col-md-6">
                        <img src="imagenes/pastorapp.png"  class="img-responsive">
                    </div>

                </div>
            </paper-material>
        </section>

        <section>
            <?php require 'footer.php' ?>
        </section>

    </body>
</html>