<h1>Gestion de paises</h1>
<hr/>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h2 class="card-title">Crear Pais</h2>
                    </div>
                    <form  action="<?= Utils::base_url(); ?>pais/save" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pais">Nombre pais</label>
                                <input type="text" class="form-control" id="pais" name="pais" placeholder="Nombre Pais">
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