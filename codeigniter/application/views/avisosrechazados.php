<div id="content" class="app-content">
    <!-- <h1 class="page-header">Avisos de Cobranza</h1> -->

    <!-- Nav Pills para las pestañas de navegación -->
    <ul class="nav nav-pills mb-3">
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/avisocobranza/gestion" class="nav-link <?php echo (current_url() == base_url() . 'index.php/avisocobranza/gestion') ? 'active' : ''; ?>">Enviados</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/avisocobranza/revision" class="nav-link <?php echo (current_url() == base_url() . 'index.php/avisocobranza/revision') ? 'active' : ''; ?>">En revisión</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/avisocobranza/pagados" class="nav-link <?php echo (current_url() == base_url() . 'index.php/avisocobranza/pagados') ? 'active' : ''; ?>">Pagados</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/avisocobranza/rechazados" class="nav-link <?php echo (current_url() == base_url() . 'index.php/avisocobranza/rechazados') ? 'active' : ''; ?>">Rechazados</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/avisocobranza/vencidos" class="nav-link <?php echo (current_url() == base_url() . 'index.php/avisocobranza/vencidos') ? 'active' : ''; ?>">Vencidos</a>
        </li>
    </ul>


  <!-- <div class="tab-content"> -->
    <!-- Tabla de Pendientes -->
    <!-- <div class="tab-pane fade active show" id="nav-pills-tab-1"> -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading d-flex justify-content-between align-items-center">
                            <h4 class="panel-title">Avisos Rechazados</h4>
                        </div>
                        <div class="panel-body">
                            <table id="pendientes" class="table table-hover table-bordered align-middle">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Codigo Socio</th>
                                        <th>Socio</th>
                                        <th>Consumo (m³)</th>
                                        <th>Lectura Anterior</th>
                                        <th>Fecha Lectura Anterior</th>
                                        <th>Fecha Lectura Actual</th>
                                        <th>Tarifa Aplicada [Bs/m3]</th>
                                        <th>Total [Bs.]</th>
                                        <th>Fecha Vencimiento</th>
                                        <th>Aprobar:</th>
                                        <th>Notificar Saldo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cont = 1;
                                    foreach ($rechazados as $rechazado) {
                                        $consumo = $rechazado['lecturaActual'] - $rechazado['lecturaAnterior'];
                                        $total = $rechazado['tarifaVigente'] * $consumo;
                                        $fechaPago = !empty($rechazado['fechaPago']) ? date('Y-m-d', strtotime($rechazado['fechaPago'])) : 'Sin Fecha';
                                    ?>
                                    <tr class="text-center">
                                        <td><?php echo $cont; ?></td>
                                        <td><?php echo $rechazado['codigoSocio']; ?></td>
                                        <td><?php echo $rechazado['nombreSocio']; ?></td>
                                        <td><?php echo $consumo ?> m³</td>
                                        <td><?php echo $rechazado['lecturaAnterior']; ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($rechazado['fechaLecturaAnterior'])); ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($rechazado['fechaLectura'])); ?></td>
                                        <td><?php echo $rechazado['tarifaVigente']; ?></td>
                                        <td><?php echo number_format($total, 2); ?></td>
                                        <td><?php echo $rechazado['fechaVencimiento']; ?></td>
                                        <td>
                                            <?php echo form_open_multipart("avisocobranza/revisarbd", ['class' => 'auto-submit-form']); ?>
                                            <input type="hidden" name="tab" value="rechazados">
                                            <input type="hidden" name="id" value="<?php echo $rechazado['idAviso']; ?>">
                                            <select name="estado" onchange="this.form.submit()">
                                                <option value="" selected disabled>Seleccionar</option>
                                                <option value="revision">Revision</option>
                                            </select>
                                            <?php echo form_close(); ?>
                                        </td>
                                        <td>
                                        <button 
                                            type="button" 
                                            class="table-booking btn btn-yellow d-block w-100" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#modalPosBooking"
                                            onclick="cargarDatos('<?php echo $rechazado['codigoSocio']; ?>',
                                                '<?php echo $rechazado['nombreSocio']; ?>',
                                                '<?php echo $rechazado['idAviso']; ?>',
                                                '<?php echo number_format($total, 2); ?>',
                                                '<?php echo $rechazado['estado']; ?>',
                                                '<?php echo $fechaPago; ?>',
                                                '<?php echo $rechazado['saldo']; ?>')">
                                            Notificar Saldo
                                        </button>


                                        </td>
                                    </tr>
                                    <?php $cont++; } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Codigo Socio</th>
                                        <th>Socio</th>
                                        <th>Consumo (m³)</th>
                                        <th>Lectura Anterior</th>
                                        <th>Fecha Lectura Anterior</th>
                                        <th>Fecha Lectura Actual</th>
                                        <th>Tarifa Aplicada [Bs/m3]</th>
                                        <th>Total [Bs.]</th>
                                        <th>Fecha Vencimiento</th>
                                        <th>Mover a:</th>
                                        <th>Notificar Saldo</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div>
    </div> -->


