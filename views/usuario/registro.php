<section class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-secondary">
                <div class="card-header">
                    <h2 class="card-title">Crear Usuario</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
                        <strong>Registro completado correctamente</strong>
                    <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
                        <strong>Registro fallido</strong>
                    <?php endif; ?>
                    <?php Utils::deleteSession('register'); ?>

                    <form  action="<?= base_url ?>usuario/save" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="cedula">Numero Documento</label>
                                    <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="primernombre">Primer Nombre</label>
                                    <input type="text" class="form-control" id="primernombre" name="primernombre" placeholder="Primer Nombre">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="segundonombre">Segundo Nombre</label>
                                    <input type="text" class="form-control" id="segundonombre" name="segundonombre" placeholder="Segundo Nombre">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="primerapellido">Primer Apellido</label>
                                    <input type="text" class="form-control" id="primerapellido" name="primerapellido" placeholder="Primer Apellido" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="segundoapellido">Segundo Apellido</label>
                                    <input type="text" class="form-control" id="segundoapellido" name="segundoapellido" placeholder="Segundo Apellido" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="number" class="form-control" id="celular" name="celular" placeholder="Celular">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="departamento">Departamento</label>
                                    <select id="inputState" class="form-control" name="departamento" name="departamento" id="departamento" required>
                                        <option selected>Seleccionar...</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="municipio">Municipio</label>
                                    <select id="inputState" class="form-control" name="municipio" id="municipio" required>
                                        <option selected>Seleccionar...</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="barrio">Barrio</label>
                                    <input type="text" class="form-control" id="barrio"  name="barrio" placeholder="Barrio" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="sexo">Sexo</label>
                                    <select id="inputState" class="form-control" name="sexo" id="sexo" required>
                                        <option selected>Seleccionar...</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fechanacimiento">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" placeholder="mm/dd/yyyy" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="login">Login</label>
                                    <input type="text" class="form-control" name="login" id="login" placeholder="Login" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contrasena">Password</label>
                                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="correo">Email</label>
                                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <select id="rol" class="form-control" name="rol" id="rol" required>
                                        <option selected>Seleccionar...</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="Sede">Sede</label>
                                    <select id="sede" class="form-control" name="Sede" id="Sede" required>
                                        <option selected>Seleccionar...</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fechaingreso">Fecha Ingreso</label>
                                    <input type="date" class="form-control" id="fechaingreso" name="fechaingreso" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <br/>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>