  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('home')?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-info">
              <div class="inner">
                <h3>1350</h3>
                <p>Bidang BTKD</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div> -->
          <!-- </div> -->
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>527</h3>
                <p>Ijin Pemakaian Tanah</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url('home/ipt')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>19</h3>

                <p>Ijin Pemakaian Rumah</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3>350</h3>
                <p>Prasarana dan Saranan Umum</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div> -->
          <!-- </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-md-6">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-danger">
                <h3 class="widget-user-username">Info Ijin Pemakaian Tanah</h3>
                <h5 class="widget-user-desc">Jumlah IPT Jatuh Tempo</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                <?php foreach ($get_kecamatan->result() as $row) {?>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <?php echo $row->kecamatan;?> <span class="float-right badge bg-primary"><?php echo $row->jml_pemegang?></span>
                    </a>
                  </li>
                  <?php }?>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

          <div class="col-md-6">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">Info Ijin Pemakaian Rumah</h3>
                <h5 class="widget-user-desc">Jumlah IPR Jatuh Tempo</h5>
              </div>
              <div class="card-footer p-0">
              <ul class="nav flex-column">
                <?php foreach ($get_kecamatan_ipr->result() as $row) {?>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <?php echo $row->kecamatan;?> <span class="float-right badge bg-primary"><?php echo $row->jml_pemegang?></span>
                    </a>
                  </li>
                  <?php }?>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

