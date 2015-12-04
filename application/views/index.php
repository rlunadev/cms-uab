<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Alcaldia Entre Rios</title>
    <!-- tags -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Alcaldia, Entre Rios, Cochabamba, UAB">
    <meta name="description" content="Ronald Luna Ramos Web Alcaldia">


 <link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/owl.transitions.css" type="text/css">    
    <link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/lightbox.css" type="text/css">    
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/colors/light-red.css">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/colors/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/colors/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/colors/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/colors/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/colors/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/colors/black.css" title="black">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="./public/bower_components/bootstrap/dist/css/animate.css">
    
    <!-- Construction JS File -->
    <script src="./public/bower_components/bootstrap/dist/js/jquery-2.1.1.min.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/modernizr.custom.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/owl.carousel.min.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/lightbox.min.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/jquery.appear.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/jquery.fitvids.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/jquery.nicescroll.min.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/superfish.min.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/supersubs.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/styleswitcher.js"></script>
    <script src="./public/bower_components/bootstrap/dist/js/script.js"></script>



    <script src="./public/bower_components/bower-angular-sanitize-master/angular-sanitize.js"></script>
    <script src="./public/bower_components/bower-angular-sanitize-master/angular-sanitize.min.js"></script>
    <script src="./public/bower_components/bower-angular-sanitize-master/angular-sanitize.min.js.map"></script> 

    <script src="./public/bower_components/ng-file-upload/ng-file-upload.js"></script>
    <script src="./public/bower_components/angular/angular.js"></script>
    

    <script src="./public/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script src="./public/bower_components/angular-resource/angular-resource.js"></script>
    <script src="./public/bower_components/angular-route/angular-route.js"></script>
    <script src="./public/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="./public/app.js"></script>
    <script src="./public/routes/home.js"></script>
    
    <script src="./public/controllers/eventoController.js"></script>
    <script src="./public/controllers/noticia.js"></script>

    <script src="./public/routes/listDemo.js"></script>
    <script src="./public/controllers/detalleListControler.js"></script>
    <script src="./public/controllers/demoListController.js"></script>
    <script src="./public/controllers/demoController.js"></script>
    <script src="./public/services/evento.js"></script>
    <script src="./public/services/usuario.js"></script>
    <script src="./public/services/banner.js"></script>
    <script src="./public/controllers/admin.js"></script>
    <script src="./public/controllers/main.js"></script>
    <script src="./public/services/galeria.js"></script>
    <script src="./public/services/convocatoria.js"></script>
    <script src="./public/services/comunicado.js"></script>
    <script src="./public/services/noticia.js"></script>

    <!-- CKEDITOR -->
    <script src="./ck/ckeditor/ckeditor.js" type="text/javascript" ></script>
    <script src="./ck/ckfinder/ckfinder.js" type="text/javascript" ></script>

    <!-- LOGIN -->
    
    <!-- LOGIN -->

    </head>
    <body class="homepage">
        <div id="fb-root"></div>
            <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "http://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>

            <script type="text/javascript">
              $(function() {
                $('#datetimepicker1').datetimepicker({
                pickTime:false
                });
              });
            </script>
            
        <div ng-app="seedApp">
             <div ui-view>

             </div>
        </div>
    </body>
</html>
