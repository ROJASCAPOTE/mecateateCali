
<?php
require_once 'autoload.php';
require_once './config/parameter.php';
require_once './views/template/header.php';
require_once './views/template/menu.php';

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {
    $error=new errorController();
    $error->index();
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        $error = new errorController();
        $error->index();
    }
} else {
    $error = new errorController();
    $error->index();
}
?>

<?php
require_once './views/template/footer.php';
?>






<!--<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
         Tell the browser to be responsive to screen width 
        <meta name="viewport" content="width=device-width, initial-scale=1">
         Font Awesome 
        <link rel="stylesheet" href="recursos/plugins/fontawesome-free/css/all.min.css">
         Ionicons 
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
         Tempusdominus Bbootstrap 4 
        <link rel="stylesheet" href="recursos/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
         iCheck 
        <link rel="stylesheet" href="recursos/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
         JQVMap 
        <link rel="stylesheet" href="recursos/plugins/jqvmap/jqvmap.min.css">
         Theme style 
        <link rel="stylesheet" href="recursos/dist/css/adminlte.min.css">
         overlayScrollbars 
        <link rel="stylesheet" href="recursos/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
         Daterange picker 
        <link rel="stylesheet" href="recursos/plugins/daterangepicker/daterangepicker.css">
         summernote 
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
         Google Font: Source Sans Pro 
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            //<?php
//            //include_once("./funciones/sessiones.php");
//            include_once('./template/header.php');
//            include_once('./template/inicio.php');
//            include_once('./template/barra.php');
//            include_once('./template/navegacion.php');
//            include_once ('./template/footer.php');
//            
?>
            
            <aside class="control-sidebar control-sidebar-dark">
                 Control sidebar content goes here 
            </aside>
             /.control-sidebar 
        </div>
         ./wrapper 

         jQuery 
        <script src="recursos/plugins/jquery/jquery.min.js"></script>
         jQuery UI 1.11.4 
        <script src="recursos/plugins/jquery-ui/jquery-ui.min.js"></script>
         Resolve conflict in jQuery UI tooltip with Bootstrap tooltip 
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
         Bootstrap 4 
        <script src="recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
         ChartJS 
        <script src="recursos/plugins/chart.js/Chart.min.js"></script>
         Sparkline 
        <script src="recursos/plugins/sparklines/sparkline.js"></script>
         JQVMap 
        <script src="recursos/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="recursos/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
         jQuery Knob Chart 
        <script src="recursos/plugins/jquery-knob/jquery.knob.min.js"></script>
         daterangepicker 
        <script src="recursos/plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
         Tempusdominus Bootstrap 4 
        <script src="recursos/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
         Summernote 
        <script src="recursos/plugins/summernote/summernote-bs4.min.js"></script>
         overlayScrollbars 
        <script src="recursos/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
         AdminLTE App 
        <script src="recursos/dist/js/adminlte.js"></script>
         AdminLTE dashboard demo (This is only for demo purposes) 
        <script src="recursos/dist/js/pages/dashboard.js"></script>
         AdminLTE for demo purposes 
        <script src="recursos/dist/js/demo.js"></script>
    </body>
</html>-->