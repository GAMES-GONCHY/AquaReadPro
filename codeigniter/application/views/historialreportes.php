<!-- START CONTENT PAGE -->
<div id="content" class="app-content">
  <!-- Fila de botones con widgets -->
  <div class="row mb-4">
    <!-- Button 1: Historial de Pagos -->
    <div class="col-xl-2 col-md-6">
      <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" data-title="Historial de Pagos" class="table-booking">
        <div class="widget widget-stats bg-gradient-red">
          <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
          <div class="stats-content">
            <div class="stats-title">HISTORIAL DE PAGOS <br><br></div>
            <div class="stats-number">7,842,900</div>
            <div class="stats-progress progress">
              <div class="progress-bar" style="width: 70.1%;"></div>
            </div>
            <div class="stats-desc">Better than last week (70.1%)</div>
          </div>
        </div>
      </a>
    </div>

    <!-- Button 2: Historial de Consumos -->
    <div class="col-xl-2 col-md-6">
      <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" data-title="Historial de Comsumos" class="table-booking">
        <div class="widget widget-stats bg-gradient-cyan-blue">
          <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
          <div class="stats-content">
            <div class="stats-title">HISTORIAL DE CONSUMOS</div>
            <div class="stats-number">180,200</div>
            <div class="stats-progress progress">
              <div class="progress-bar" style="width: 40.5%;"></div>
            </div>
            <div class="stats-desc">Better than last week (40.5%)</div>
          </div>
        </div>
      </a>
    </div>

    <!-- Button 3: Historial de Lecturas -->
    <div class="col-xl-2 col-md-6">
      <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" data-title="Historial de Lecturas" class="table-booking">
        <div class="widget widget-stats bg-gradient-orange-red">
          <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
          <div class="stats-content">
            <div class="stats-title">HISTORIAL DE LECTURAS</div>
            <div class="stats-number">38,900</div>
            <div class="stats-progress progress">
              <div class="progress-bar" style="width: 76.3%;"></div>
            </div>
            <div class="stats-desc">Better than last week (76.3%)</div>
          </div>
        </div>
      </a>
    </div>

    <!-- Button 4: Historial de Avisos Pendientes -->
    <div class="col-xl-2 col-md-6">
      <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" data-title="Historial de avisos Pendientes" class="table-booking">
        <div class="widget widget-stats bg-gradient-green">
          <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
          <div class="stats-content">
            <div class="stats-title">HISTORIAL DE AVISOS PENDIENTES</div>
            <div class="stats-number">3,988</div>
            <div class="stats-progress progress">
              <div class="progress-bar" style="width: 54.9%;"></div>
            </div>
            <div class="stats-desc">Better than last week (54.9%)</div>
          </div>
        </div>
      </a>
    </div>

    <!-- Button 5: Top 10 Consumidores -->
    <div class="col-xl-2 col-md-6">
      <a href="#" data-bs-toggle="modal" data-bs-target="#modalPosBooking" data-title="Ranking Consumidores" class="table-booking">
        <div class="widget widget-stats bg-gradient-purple">
          <div class="stats-icon stats-icon-lg"><i class="fa fa-chart-line fa-fw"></i></div>
          <div class="stats-content">
            <div class="stats-title">TOP 10 CONSUMIDORES</div>
            <div class="stats-number">3,988</div>
            <div class="stats-progress progress">
              <div class="progress-bar" style="width: 54.9%;"></div>
            </div>
            <div class="stats-desc">Better than last week (54.9%)</div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- Tabla de Reportes -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-xl-12">
        <div class="panel panel-inverse">
          <div class="panel-heading d-flex justify-content-between align-items-center">
            <h4 class="panel-title">Reportes</h4>
            <div class="panel-heading-btn">
              <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
              <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
              <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
          </div>
          <div class="panel-body">
            <table id="datatable" class="table table-hover table-bordered align-middle">
              <thead>
                <tr>
                  <th width="1%">No.</th>
                  <th>Tarifa vigente</th>
                  <th>Inicio de vigencia</th>
                  <th>Tarifa mínima</th>
                  <th>Fecha Modificacion</th>
                  <th>Restaurar</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí puedes incluir el código PHP para generar las filas -->
              </tbody>
              <tfoot>
                <tr>
                  <th width="1%">No.</th>
                  <th>Tarifa vigente</th>
                  <th>Inicio de vigencia</th>
                  <th>Tarifa mínima</th>
                  <th>Fecha Modificacion</th>
                  <th>Restaurar</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->