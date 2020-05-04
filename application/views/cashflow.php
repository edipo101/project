  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profesión: <b><?= $profesion->profesion ?></b>
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">      
      <h2 class="page-header">Declaración de ingresos</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Descripción</th>
                    <th>Barra</th>
                    <th style="width: 40px">Cantidad</th>
                  </tr>  
                </thead>
              </table>
            </div>
            <!-- /.box-body -->            
          </div>
          <!-- /.box -->        
        </div>
        <!-- col -->

        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Gastos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Descripción</th>
                    <th>Barra</th>
                    <th style="width: 40px">Cantidad</th>
                  </tr>  
                </thead>
                <tbody>
                <?php  
                  $i = 1;
                  $subtotal = 10000;
                  foreach ($gastos as $key => $gasto):
                    $color = (is_null($gasto->color_etiqueta)) ? 'default': $gasto->color_etiqueta;
                    $porcentaje = ($gasto->monto / $subtotal) * 100;
                ?>                
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $gasto->descripcion ?></td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: <?= $porcentaje ?>%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-<?= $color ?>"><?= $gasto->monto ?>%</span></td>
                  </tr>      
                <?php
                  endforeach;
                ?>         
                </tbody>
              </table>  
            </div>
            <!-- /.box-body -->            
          </div>
          <!-- /.box -->        
        </div>
        <!-- col -->
      </div>
      <!-- row -->

      <h2 class="page-header">Balance general</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Activos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Descripción</th>
                    <th>Barra</th>
                    <th style="width: 40px">Cantidad</th>
                  </tr>  
                </thead>
                <tbody>
                <?php  
                  $i = 1;
                  $subtotal = 10000;
                  foreach ($gastos as $key => $gasto):
                    $color = (is_null($gasto->color_etiqueta)) ? 'default': $gasto->color_etiqueta;
                    $porcentaje = ($gasto->monto / $subtotal) * 100;
                ?>                
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $gasto->descripcion ?></td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: <?= $porcentaje ?>%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-<?= $color ?>"><?= $gasto->monto ?>%</span></td>
                  </tr>      
                <?php
                  endforeach;
                ?>         
                </tbody>
              </table>  
            </div>
            <!-- /.box-body -->            
          </div>
          <!-- /.box -->        
        </div>
        <!-- col -->

        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pasivos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Descripción</th>
                    <th>Barra</th>
                    <th style="width: 40px">Cantidad</th>
                  </tr>  
                </thead>
                <tbody>
                <?php  
                  $i = 1;
                  $subtotal = 10000;
                  foreach ($pasivos as $key => $pasivo):
                    $color = (is_null($pasivo->color_etiqueta)) ? 'default': $pasivo->color_etiqueta;
                    $porcentaje = ($pasivo->monto / $subtotal) * 100;
                ?>                
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $pasivo->descripcion ?></td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: <?= $porcentaje ?>%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-<?= $color ?>"><?= $pasivo->monto ?>%</span></td>
                  </tr>      
                <?php
                  endforeach;
                ?>         
                </tbody>
              </table>  
            </div>
            <!-- /.box-body -->            
          </div>
          <!-- /.box -->        
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->