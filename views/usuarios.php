<?php

require 'nav.php';

require 'header.php';
?>

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Usuarios</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="escritorio.php"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Usuarios</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- [ breadcrumb ] end -->
<div class="main-body">
    <div class="page-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" id="card_tbl_usuarios">
                    <div class="card-header">
                        <h5>Lista de Usuarios</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="submit" class="btn btn-outline-success btn-icon" id="btnAgregar" data-toggle="tooltip" data-placement="top" title="Agregar usuarios" onclick="validarFormulariosUsuarios(false)">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="javascript:"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="javascript:"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="javascript:"><i class="feather icon-refresh-cw"></i> reload</a></li>

                                    <!--                                    <li class="dropdown-item close-card"><a href="javascript:"><i-->
                                    <!--                                                    class="feather icon-trash"></i> remove</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table id="tbl_usuarios" class="table table-bordered table-striped  table-hover align-middle text-center" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Usuario</th>
                                        <th>Cargo</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
                                        <th>Baja</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card" id="card_form_usuarios">
                    <div class="card-header">
                        <h5>Registro de Empleado</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="submit" class="btn btn-outline-success btn-icon" id="btnListar" data-toggle="tooltip" data-placement="top" title="Listar usuarios" onclick="validarFormulariosUsuarios(true)">
                                    <i class="fa fa-list"></i>
                                </button>
                                <button type="button" class="btn dropdown-toggle btn-outline-light btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="javascript:"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="javascript:"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="javascript:"><i class="feather icon-refresh-cw"></i> reload</a></li>

                                    <!--                                    <li class="dropdown-item close-card"><a href="javascript:"><i-->
                                    <!--                                                    class="feather icon-trash"></i> remove</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form id="formUsuarios" name="formUsuarios" method="post" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label class="form-label">Nombre</label>
                                            <input type="hidden" id="inputId" name="inputId">
                                            <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Ingrese los nombres" data-validation-required-message="El nombre del Empleado es requerido" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label class="form-label">Apellido</label>
                                            <input type="text" class="form-control" id="inputApellido" name="inputApellido" placeholder="Ingrese los apellidos " data-validation-required-message="El apellido del Empleado es requerido" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label class="form-label">Usuario</label>
                                            <input type="text" class="form-control" id="inputUsuario" name="inputUsuario" placeholder="Ingrese nombre Usuario " data-validation-required-message="El nombre de Usuario es requerido" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label class="form-label">Cargo</label>
                                            <input type="text" class="form-control" id="inputInssEmpleado" name="inputInssEmpleado" placeholder="Ingrese Cargo " autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label class="form-label">Perfil</label>
                                            <select class="custom-select" aria-label="Default select example">
                                                <option selected value="1">Administrador</option>
                                                <option value="2">Supervisor</option>
                                                <option value="3">Gestor Externo</option>
                                                <option value="4">Gestor Interno</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-outline-success btn-rounded" id="btnGuardar">
                                    <i class="fa fa-save"></i>
                                    Guardar
                                </button>
                                <button type="submit" class="btn btn-outline-primary btn-rounded" id="btnActualizar">
                                    <i class="fa fa-sync-alt"></i>
                                    Actualizar
                                </button>
                                <button type="button" class="btn btn-outline-warning btn-rounded" id="btnLimpiar" onclick="limpiar()">
                                    <i class="fa fa-broom"></i>
                                    Limpiar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>

<script src="script/usuarios.js"></script>