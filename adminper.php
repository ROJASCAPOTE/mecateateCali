<?php
//lamamos a core 
require_once 'Helpers/Utils.php';
require_once 'Config/parameter.php';
require_once 'Views/template/admin/header_admin.php';
require_once 'Views/template/admin/menu_header_admin.php';
require_once 'Views/template/admin/menu_sidebar_admin.php';
?>

<main class="app-content" id="contenido">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ul>
    </div>

</main>

<?php
require_once 'Views/template/admin/footer_admin.php';   
?>

