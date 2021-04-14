<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-archive"></i>  Lista de productos</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <a href="<?= Utils::base_url(); ?>producto/crear" class="btn btn-primary"> Crear Producto</a>
            <li class="breadcrumb-item"><a href="#"></a></li>
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
                            <tbody>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>