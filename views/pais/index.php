<div class="container">
    <h3>Lista de Paises</h3>
    <br />

    <a href="<<?= Utils::base_url(); ?>pais/crear" class="btn btn-success">
        Crear pais
    </a>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <hr>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>
                                    <tr>
                                        <th class="text-center"><span>Id</span></th>
                                        <th class="text-center"><span>Nombre</span></th>
                                        <th>&nbsp;</th>
                                    </tr>

                                </thead>

                                <tbody>
                                    <?php while ($pais = $paises->fetch_object()) : ?>
                                        <tr class="text-center">

                                            <td><?= $pais->ID; ?></td>
                                            <td><?= $pais->NOMBRE; ?></td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link  text-warning">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link  text-info">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php endwhile; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>