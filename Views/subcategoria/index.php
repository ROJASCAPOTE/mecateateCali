<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Lista roles</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <ul class="app-breadcrumb breadcrumb">
                <a href="<?= Utils::base_url(); ?>subcategoria/crear" class="btn btn-primary" > Crear categoria</a>
                <li class="breadcrumb-item"><a href="#"></a></li>
            </ul>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-head-fixed table-bordered">
                            <thead>                               
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tableRoles">

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





