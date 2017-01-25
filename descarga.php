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
                        <h1 class="title">Descarga <b><span>&copy;GeoVPaz</span></b> </h1>
                        <br>
                    </div>
               
                    <div class="col-md-6">
                        <br><br><br>
                        <a href="https://play.google.com/store?hl=es" target="_blank"><img class="img-responsive" id="descarga" src="imagenes/googleplay.png" sizes="476x279"></a>
                    </div>
                     <div class="col-md-6">
                        <a href="https://play.google.com/store?hl=es" target="_blank"><img class="img-responsive" id="descarga" src="imagenes/geovpaz_down.png" size="500x250"></a>
                    </div>

                </div>

            </paper-material>
        </section>
        <section>
            <?php require 'footer.php' ?>
        </section>
    </body>
</html>