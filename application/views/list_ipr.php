<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Ijin Pemakaian Rumah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Ijin Pemakaian Rumah</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x:auto;">
              <table id="exampleipr" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>No.</center></th>
                  <th><center>Register</center></th>
                  <th><center>Kelurahan</center></th>
                  <th><center>Kecamatan</center></th>
                  <th><center>Total Luas</center></th>
                  <th><center>Jumlah IPR</center></th>
                  <th><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $x=1;
	                foreach ($daftaripr->result() as $row) {?>
	                <tr>
	                  <td><center><?php echo $x;?></center></td>
	                  <td><center><?php echo $row->register_ipr;?></center></td>
	                  <td><?php echo $row->kelurahan;?></td>
                    <td><?php echo $row->kecamatan;?></td>
                    <td><center><?php echo round($row->tot_luas,3);?></center></td>
                    <td><center><?php echo $row->jumlah_ipr;?></center></td>
                    <td>
                      <center>
                      <a href="https://sigis.surabaya.go.id/popup/simbada/show-no-reg/<?php echo $row->register_ipr;?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-success"><i class="far fa-map"></i></a>
                      <a href="javascript:;" class="btn btn-sm btn-primary list_ipr" data="<?php echo $row->kecamatan?>" ><i class="far fa-eye"></i></a>
                      </center>
                    </td>
                    </tr>
	            	<?php $x++; }?>
                </tbody>
                <tfoot>
                <tr>
                  <<th><center>No.</center></th>
                  <th><center>Register</center></th>
                  <th><center>Kelurahan</center></th>
                  <th><center>Kecamatan</center></th>
                  <th><center>Total Luas</center></th>
                  <th><center>Jumlah IPR</center></th>
                  <th><center>Aksi</center></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

      <div class="modal fade" id="modal-xl1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Pemegang IPR</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-12">
                <!-- /.card -->
      
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body" style="overflow-x:auto;">
                    <table id="tabel_modal" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th><center>ID IPR</center></th>
                        <th><center>No. SK</center></th>
                        <th><center>Pemegang</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Luas Bangunan(m2)</center></th>
                        <th><center>Luas Tanah(m2)</center></th>
                        <th><center>Masa SK</center></th>
                      </tr>
                      </thead>
                      <tbody id="tampil_data_ipr">
                      </tbody>
                      <tfoot>
                      <tr>
                        <th><center>ID IPR</center></th>
                        <th><center>No. SK</center></th>
                        <th><center>Pemegang</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Luas Bangunan(m2)</center></th>
                        <th><center>Luas Tanah(m2)</center></th>
                        <th><center>Masa SK</center></th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>