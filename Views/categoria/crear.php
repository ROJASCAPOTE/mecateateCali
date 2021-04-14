<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Gestion de categorias</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h2 class="card-title">Crear Categoria</h2>
                        </div>
                        <form  action="<?= Utils::base_url() ?>categoria/crearCategoria" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nombre">Nombre Categoria</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar Categoria" required>
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



