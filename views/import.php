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
                    <h5 class="m-b-10">Carga Masiva</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="escritorio.php"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:">Llamadas y Visitas</a></li>
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
                <div class="card animated fadeInUp" id="card_tbl_perfiles">
                    <div class="card-header">
                        <h5>Archivos CSV</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="submit" class="btn btn-outline-success btn-icon" id="btnAgregar" data-toggle="tooltip" data-placement="top" title="Agregar usuarios" onclick="validarFormularioPerfiles(false)">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="javascript:"><span><i class="feather icon-maximize"></i> Maximizar</span><span style="display:none"><i class="feather icon-minimize"></i> Restaurar</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="javascript:"><span><i class="feather icon-minus"></i> Minimizar</span><span style="display:none"><i class="feather icon-plus"></i> Expandir</span></a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="javascript:"><i class="feather icon-refresh-cw"></i> Refrescar</a></li>

                                    <!--                                    <li class="dropdown-item close-card"><a href="javascript:"><i-->
                                    <!--                                                    class="feather icon-trash"></i> remove</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-block">
                        <div class="col-md-3 offset-md-3">
                            <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-llamadas-tab" data-toggle="pill" href="#pills-llamadas" role="tab" aria-controls="pills-llamadas" aria-selected="true">Llamadas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-visitas-tab" data-toggle="pill" href="#pills-visitas" role="tab" aria-controls="pills-visitas" aria-selected="false">Visitas</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-llamadas" role="tabpanel" aria-labelledby="pills-llamadas-tab">
                                <form action="import.php" method="post" enctype="multipart/form-data" name="filesllamadas" id="filesllamadas">
                                    <div class="form-group col-md-5 offset-md-4">
                                        <input class="form-control" type="file" name="fileLlamada" id="fileLlamada" accept=".csv">
                                    </div>
                                    <div class="form-actions col-md-5 offset-md-4">
                                        <button type="button" onclick="Procesarllamadas()" class="btn btn-primary" name="btnProcesarllamadas" id="btnProcesarllamadas">Procesar Archivo</button>
                                        <button type="button" onclick="uploadllamadas()" class="btn btn-success" name="btnCargarllamadas" id="btnCargarllamadas">Cargar Llamadas</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-visitas" role="tabpanel" aria-labelledby="pills-visitas-tab">
                                <form action="import.php" method="post" enctype="multipart/form-data" name="filesVisitas" id="filesVisitas">
                                    <div class="form-group col-md-5 offset-md-4">
                                        <input class="form-control" type="file" name="fileVisitas" id="fileVisitas" accept=".csv">
                                    </div>
                                    <div class="form-actions col-md-5 offset-md-4">
                                        <button type="button" onclick="ProcesarVisitas()" class="btn btn-primary" name="btnProcesarVisitas" id="btnProcesarVisitas">Procesar Archivo</button>
                                        <button type="button" onclick="uploadVisitas()" class="btn btn-success" name="btnCargarVisitas" id="btnCargarVisitas">Cargar Visitas</button>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

//Fin de las validaciones de acceso

require 'footer.php';

?>
<!-- JavaScript Bundle with Popper -->

<script src="script/import.js"></script>


<?php

?>