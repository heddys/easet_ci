<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="http://adminlte.io">IT BPKAD</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0-beta.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="d<?php echo base_url();?>assets/ist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $("#exampleipr").DataTable();
  });

  $('#example1').on('click','.list_pemegang',function(){
    var id = $(this).attr('data');
    $('#modal-xl2').modal('show');
    $.ajax({
      type: 'ajax',
      method: 'post',
      url: '<?php echo site_url();?>/home/tampil_pemegang',
      data:{id:id},
      async: false,
      dataType: 'json',
      success: function(data){
          var html = '';
          var i=data.length;
          var x=1;
            for (i=0; i < data.length; i++) {
                var status = (data[i].status ==="AKTIF") ? '<span class="float-center badge bg-success">Aktif</span>' : '<span class="float-center badge bg-danger">Non Aktif</span>'
                html += 
                      '<tr>'+
                        '<td><center>'+x+'</center></td>'+
                        '<td><center>'+data[i].no_sk+'</center></td>'+
                        '<td><center>'+data[i].pemegang+'</center></td>'+
                        '<td>'+data[i].alamat+'</td>'+
                        '<td><center>'+data[i].luas_tanah+'</center></td>'+
                        '<td><center>'+data[i].kelurahan+'</center></td>'+
                        '<td><center>'+data[i].kecamatan+'</center></td>'+
                        '<td><center>'+status+
                      '</tr>';
                      x++;
            }
            $('#modal-xl2').find('#tampil_data_ipt').html(html);

        },
        error: function() {
          alert('Koneksi Gagal');
        }
    });
  }); 
  </script>

  <script>

  $('#exampleipr').on('click','.list_ipr',function(){
    var id = $(this).attr('data');
    $('#modal-xl1').modal('show');
    $.ajax({
      type: 'ajax',
      method: 'post',
      url: '<?php echo site_url();?>/home/tampil_per_ipr',
      data:{id:id},
      async: false,
      dataType: 'json',
      success: function(data){
          var html = '';
          var i=data.length;
          var x=1;
            for (i=0; i < data.length; i++) {
                html += 
                      '<tr>'+
                        '<td><center>'+x+'</center></td>'+
                        '<td><center>'+data[i].no_sk+'</center></td>'+
                        '<td>'+data[i].lokasi_ipr+'</td>'+
                        '<td><center>'+data[i].luas_bangunan'</center></td>'+
                        '<td><center>'+data[i].masa_sk+'</center></td>'+
                        '<td><center>'+data[i].id_ipr+'</center></td>'+
                      '</tr>';
                      x++;
            }
            $('#modal-xl1').find('#tampil_data_ipr').html(html);

        },
        error: function() {
          alert('Koneksi Gagal');
        }
    });
  });
  
</script>
</body>
</html>