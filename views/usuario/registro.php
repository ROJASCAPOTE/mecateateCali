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
                    <form  action="index.php?controller=usuario&action=save" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="cedula">Numero Documento</label>
                                    <input type="cedula" class="form-control" id="cedula" placeholder="Cedula">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="primernombre">Primer Nombre</label>
                                    <input type="text" class="form-control" id="primernombre" placeholder="Primer Nombre">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="segundonombre">Segundo Nombre</label>
                                    <input type="text" class="form-control" id="segundonombre" placeholder="Segundo Nombre">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="primerapellido">Primer Apellido</label>
                                    <input type="text" class="form-control" id="primerapellido" placeholder="Primer Apellido">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="segundoapellido">Segundo Apellido</label>
                                    <input type="text" class="form-control" id="segundoapellido" placeholder="Segundo Apellido">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="number" class="form-control" id="telefono" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="number" class="form-control" id="celular" placeholder="Celular">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="barrio">Barrio</label>
                                    <input type="text" class="form-control" id="barrio" placeholder="Barrio">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="sexo">Departamento</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Seleccionar...</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="sexo">Municipio</label>
                                    <select id="inputState" class="form-control">
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
                                    <label for="sexo">Sexo</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Seleccionar...</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fechanacimiento">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="fechanacimiento">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="login">Login</label>
                                    <input type="text" class="form-control" id="login" placeholder="Login">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="contrasena">Password</label>
                                    <input type="password" class="form-control" id="contrasena" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="correo">Email</label>
                                    <input type="email" class="form-control" id="correo" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <select id="rol" class="form-control">
                                        <option selected>Seleccionar...</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="sexo">Sede</label>
                                    <select id="sede" class="form-control">
                                        <option selected>Seleccionar...</option>
                                        <option>Maculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fechacreacion">Fecha Ingreso</label>
                                    <input type="date" class="form-control" id="correo" placeholder="Fecha de ingreso">
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