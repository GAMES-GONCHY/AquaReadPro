<!-- START CONTENT PAGE -->
<div id="content" class="app-content">

  <div class="container mt-4">
    <!-- Contenedor para centrar las tarjetas -->
    <div class="d-flex justify-content-left mb-4 w-100">
      <div class="d-inline-flex" style="gap: 0;">
        <!-- Botón "Registrar" -->
        <div class="card text-center shadow-sm" style="width: 7rem; margin: 0;"> <!-- Reduce el ancho aquí -->
          <div class="card-body" style="padding: 5px;"> <!-- Reduce el padding aquí -->
            <!-- Cambia este enlace para que abra el modal -->
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalNuevaTarifa" class="text-success text-decoration-none hover-registrar" style="display: block; padding: 5px; border-radius: 8px; transition: 0.3s;">
              <i class="fas fa-plus-circle fa-lg mb-1"></i><br> <!-- Cambia el tamaño del icono a fa-lg -->
            </a>
          </div>
        </div>

        <!-- Botón "Lecturas Eliminadas" -->
        <div class="card text-center shadow-sm" style="width: 7rem; margin: 0;">
          <div class="card-body" style="padding: 5px;"> <!-- Reduce el padding aquí -->
            <a href="<?php echo base_url(); ?>index.php/tarifa/deshabilitados" class="text-danger text-decoration-none hover-eliminados" style="display: block; padding: 5px; border-radius: 8px; transition: 0.3s;">
              <i class="fas fa-trash-restore fa-lg mb-1"></i><br> <!-- Cambia el tamaño del icono a fa-lg -->
              
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12">
        <div class="panel panel-inverse">
          <div class="panel-heading d-flex justify-content-between align-items-center">
            <h4 class="panel-title">Gestionar tarifas</h4>
            <div class="panel-heading-btn">
              <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
              <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
              <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
              <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a> -->
            </div>
          </div>
          <div class="panel-body">
              <table id="datatable" class="table table-hover table-bordered align-middle">
                <thead>
                    <tr>
                        <th width="1%">No.</th>
                        <th>Tarifa vigente</th>
                        <th>Tarifa mínima</th>
                        <th>Inicio de vigencia</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cont = 1;
                    foreach ($tarifas->result() as $row) {
                    ?>
                        <tr id="row_<?php echo $row->idTarifa; ?>"> <!-- Agregar ID único a la fila -->
                            <td><?php echo $cont ?></td>
                            <td><?php echo $row->tarifaVigente ?></td>
                            <td><?php echo $row->tarifaMinima ?></td>
                            <td><?php echo date('Y-m-d', strtotime($row->fechaInicioVigencia)); ?></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm btnModificar"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalModificarTarifa"
                                    onclick="cargarDatos(<?php echo $row->idTarifa; ?>)">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <?php echo form_open_multipart("tarifa/deshabilitar"); ?>
                                    <input type="hidden" name="id" value="<?php echo $row->idTarifa; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <?php echo form_close(); ?>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $cont++;
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th width="1%">No.</th>
                        <th>Tarifa vigente</th>
                        <th>Inicio de vigencia</th>
                        <th>Tarifa mínima</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </tfoot>
            </table>

          </div>
        </div>
      </div>
    </div>
  
  
    <div class="modal fade" id="modalModificarTarifa" tabindex="-1" role="dialog" aria-labelledby="modalModificarTarifaLabel" aria-hidden="true" data-parsley-validate="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModificarTarifaLabel">Modificar Tarifa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="formModificarTarifa" action="<?php echo base_url('index.php/tarifa/modificar'); ?>" method="POST">
                    <input type="hidden" name="idTarifa" id="idTarifa"> <!-- Campo oculto para enviar el ID de la tarifa -->

                    <!-- Campo para tarifa vigente -->
                    <div class="form-group">
                        <label for="tarifaVigente">Tarifa Vigente</label>
                        <input type="text" name="tarifaVigente" id="tarifaVigente" class="form-control" required 
                                  data-parsley-decimal41 
                                  data-parsley-trigger="input"
                                  placeholder="999.9" 
                                  maxlength="5">
                    </div>

                    <!-- Campo para tarifa mínima -->
                    <div class="form-group">
                        <label for="tarifaMinima">Tarifa Mínima</label>
                        <input type="text" name="tarifaMinima" id="tarifaMinima" class="form-control" required 
                                  data-parsley-decimal41 
                                  data-parsley-trigger="input"
                                  placeholder="999.9" 
                                  maxlength="5">
                    </div>

                    <!-- Campo para fecha de inicio de vigencia -->
                    <div class="form-group">
                        <label for="fechaInicioVigencia">Fecha de Inicio de Vigencia</label>
                        <input type="date" name="fechaInicioVigencia" id="fechaInicioVigencia" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



       <!-- Modal para insertar nueva tarifa -->
      <div class="modal fade" id="modalNuevaTarifa" tabindex="-1" role="dialog" aria-labelledby="modalNuevaTarifaLabel" aria-hidden="true" data-parsley-validate="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevaTarifaLabel">Nueva Tarifa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url('index.php/tarifa/agregar'); ?>" method="POST">
                      <div class="form-group">
                          <label for="tarifaMinima">Tarifa Mínima</label>
                          <input type="text" name="tarifaMinima1" id="tarifaMinima1" class="form-control" required 
                                  data-parsley-decimal41 
                                  data-parsley-trigger="input"
                                  placeholder="999.9" 
                                  maxlength="5">
                      </div>
                      <div class="form-group">
                          <label for="tarifaVigente">Tarifa Vigente</label>
                          <input type="text" name="tarifaVigente1" id="tarifaVigente1" class="form-control" required 
                                  data-parsley-decimal41 
                                  data-parsley-trigger="input"
                                  placeholder="999.9" 
                                  maxlength="5">
                      </div>
                      <div class="form-group">
                          <label for="fechaInicioVigencia1">Fecha de Inicio de Vigencia</label>
                          <input type="date" name="fechaInicioVigencia1" class="form-control" id="fechaInicioVigencia" required>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-success">Registrar</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
      </div>
      


  </div> <!-- FIN del contenedor #content -->