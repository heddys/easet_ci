<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Ijin Pemakaian Tanah</h1>
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
              <h3 class="card-title">List Ijin Pemakaian Tanah</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>No.</center></th>
                  <th><center>Register</center></th>
                  <th><center>Alas Hak</center></th>
                  <th><center>Kelurahan</center></th>
                  <th><center>Kecamatan</center></th>
                  <th><center>Jumlah Pemegang</center></th>
                  <th><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $x=1;
	                foreach ($daftaript->result() as $row) {?>
	                <tr>
	                  <td><center><?php echo $x;?></center></td>
	                  <td><center><?php echo $row->register;?></center></td>
	                  <td><?php echo $row->alas_hak;?></td>
	                  <td><?php echo $row->kelurahan;?></td>
                    <td><?php echo $row->kecamatan;?></td>
                    <td><center><?php echo $row->jumlah_pemegang;?></center></td>
                    <td>
                      <center>
                      <a href="https://sigis.surabaya.go.id/popup/simbada/show-no-reg/<?php echo $row->register;?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-success"><i class="far fa-map"></i></a>
                      <a href="javascript:;" class="btn btn-sm btn-primary list_pemegang" data="<?php echo $row->register?>" ><i class="far fa-eye"></i></a>
                      </center>
                    </td>
                    </tr>
	            	<?php $x++; }?>
                </tbody>
                <tfoot>
                <tr>
                  <th><center>No.</center></th>
                  <th><center>Register</center></th>
                  <th><center>Alas Hak</center></th>
                  <th><center>Kelurahan</center></th>
                  <th><center>Kecamatan</center></th>
                  <th><center>Jumlah Pemegang</center></th>
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

      <div class="modal fade" id="modal-xl2">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Pemegang IPT</h4>
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
                        <th><center>No.</center></th>
                        <th><center>No. SK</center></th>
                        <th><center>Nama Pemegang</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Luas (m2)</center></th>
                        <th><center>Kelurahan</center></th>
                        <th><center>Kecamatan</center></th>
                        <th><center>Status Ijin</center></th>
                      </tr>
                      </thead>
                      <tbody id="tampil_data_ipt">
                      </tbody>
                      <tfoot>
                      <tr>
                        <th><center>No.</center></th>
                        <th><center>No. SK</center></th>
                        <th><center>Nama Pemegang</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Luas (m2)</center></th>
                        <th><center>Kelurahan</center></th>
                        <th><center>Kecamatan</center></th>
                        <th><center>Status Ijin</center></th>
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