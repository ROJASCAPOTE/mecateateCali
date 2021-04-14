<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"> </i> Gestionar categorias
            </h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <a href="<?= Utils::base_url(); ?>categoria/crear" class="btn btn-primary" > Crear categoria</a>
            <li class="breadcrumb-item"><a href="#"></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-head-fixed table-bordered " style="width: 100%; border: 1px solid #555; text-align: center;" id="tableRoles">
                            <thead >
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Update</th>
                                    <th>Aciones</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($listado as $categoria) { ?>
                                    <tr>
                                        <td ><?php echo $categoria['id'] ?></td>
                                        <td><?php echo utf8_encode($categoria['nombre']) ?> </td>
                                        <td><?php echo utf8_encode($categoria['last_update']) ?> </td>
                                        <td>
                                            <div class="text-center">
                                                <button class="btn btn-primary btn-sm btnEditar fa fa-pencil" type="button" title="Editar"></button>
                                                <button class="btn btn-danger btn-sm btnDelRol fa fa-trash-o" type="button" title="Eliminar"></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>