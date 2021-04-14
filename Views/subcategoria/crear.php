
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Subcategorias</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Create a beautiful dashboard</div>
            </div>
        </div>
    </div>
    <hr/>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Crear Subcategoria</h3>
                        </div>
                        <form  action="<?= Utils::base_url(); ?>subcategoria/save" method="post" style="width: 100%;">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoria_id">Categoria</label>
                                    <?php $resultado = Utils::showCategorias(); ?>
                                    <select name="categoria_id" id="categoria_id" class="form-control" style="width: 100%;">
                                        <?php while ($obj = $resultado->fetch_object()): ?>
                                            <option value="<?= $obj->id ?>">
                                                <?= $obj->nombre ?>
                                            </option>
                                        <?php endwhile; ?>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="nombre">Nombre Subcategoria</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar Subcategoria">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </section>
</main>
