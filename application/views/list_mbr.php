<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Aset Diperuntukkan Untuk MBR</h1>
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
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x:auto;">
              <table id="examplembr" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="align-middle"<center>No.</center></th>
                  <th class="align-middle"<center>Kode Aset</center></th>
                  <th class="align-middle"><center>Register</center></th>
                  <th class="align-middle"><center>Alamat Aset</center></th>
                  <th class="align-middle"><center>Kelurahan</center></th>
                  <th class="align-middle"><center>Kecamatan</center></th>
                  <th class="align-middle"><center>Detail</center></th>
                  <th class="align-middle"><center>Jumlah Usaha</center></th>
                  <th width="7%" class="align-middle"><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
                    <?php $x=1;
	                foreach ($data_mbr->result() as $row) {?>
	                <tr>
                        <td class="align-middle"><center><?php echo $x;?></center></td>
                        <td class="align-middle"><center><?php echo $row->kode108_baru;?></center></td>
                        <td class="align-middle"><?php echo $row->register;?></td>
                        <td class="align-middle"><?php echo $row->merk_alamat_baru;?></td>
                        <td class="align-middle"><?php echo $row->kelurahan;?></td>
                        <td class="align-middle"><?php echo $row->kecamatan;?></td>
                        <td>
                            <ul style="list-style-type: circle;">
                                <li>Nama Aset &nbsp;:&nbsp; <?php echo $row->nama_barang_baru?></li>
                                <li>Ket. Sertipikat &nbsp;:&nbsp; <?php echo $row->no_sertifikat?></li>
                            </ul>
                        </td>
                        <td class="align-middle"><center><?php echo $row->total;?></center></td>
                        <td class="align-middle">
                        <center>
                                <a href="https://sigis.surabaya.go.id/popup/simbada/show-no-reg/<?php echo $row->register;?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-success"><i class="far fa-map"></i></a>
                                <!-- https://sigis.surabaya.go.id/popup/simbada/show-reg/ -->
                                <a href="javascript:;" class="btn btn-sm btn-primary list_mbr" data="<?php echo $row->register?>" ><i class="far fa-eye"></i></a>
                        </center>
                        </td>
                    </tr>
	            	<?php $x++; }?>
                </tbody>
                <tfoot>
                <tr>
                    <th class="align-middle"><center>No.</center></th>
                    <th class="align-middle"><center>Kode Aset</center></th>
                    <th class="align-middle"><center>Register</center></th>
                    <th class="align-middle"><center>Alamat Aset</center></th>
                    <th class="align-middle"><center>Kelurahan</center></th>
                    <th class="align-middle"><center>Kecamatan</center></th>
                    <th class="align-middle"><center>Detail</center></th>
                    <th class="align-middle"><center>Jumlah Usaha</center></th>
                    <th class="align-middle"<center>Aksi</center></th>
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
              <h4 class="modal-title">Data Jenis Usaha MBR</h4>
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
                        <th><center>Kategori Usaha</center></th>
                        <th><center>Nama Usaha</center></th>
                        <th><center>Jumlah Kelompok Kerja</center></th>
                        <th><center>Jumlah Pekerja</center></th>
                        <th><center>Jumlah Permintaan</center></th>
                        <th><center>Satuan</center></th>
                        <th><center>Harga Satuan</center></th>
                        <th><center>Harga Total</center></th>
                        <th><center>Keterangan</center></th>
                      </tr>
                      </thead>
                      <tbody id="tampil_data_mbr">
                      </tbody>
                      <tfoot>
                      <tr>
                        <th><center>No.</center></th>
                        <th><center>Kategori Usaha</center></th>
                        <th><center>Nama Usaha</center></th>
                        <th><center>Jumlah Kelompok Kerja</center></th>
                        <th><center>Jumlah Pekerja</center></th>
                        <th><center>Jumlah Permintaan</center></th>
                        <th><center>Satuan</center></th>
                        <th><center>Harga Satuan</center></th>
                        <th><center>Harga Total</center></th>
                        <th><center>Keterangan</center></th>
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