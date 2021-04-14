  <div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Lista de usuarios</h1>
    </div>
    <div class="box">
        <ul class="app-breadcrumb breadcrumb" >
            <button class="btn btn-primary btn-lg" id="nuevo">Crear Usuario</button>
            <li class="breadcrumb-item"><a href="#"></a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div id="editar"></div>
    <div id="listado">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table id="tabla" class="table table-head-fixed table-bordered" id="tableRoles">
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
    <script src="js/usuario.js" type="text/javascript"></script>
    <script>
        $(document).ready(usuario);
    </script>


