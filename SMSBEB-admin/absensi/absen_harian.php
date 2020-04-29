<?php 
    include "../layout/theme.php";
    ?>
        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <span class="h3 mb-0 text-gray-800">Absensi Harian</span>

            <!-- button tambah -->

            <button class="btn btn-sm btn-primary btn-icon-split float-right" data-toggle="modal" data-target="#tambah-kamar">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah</span>
            </button>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">   
              Absensi Untuk Kelas : <select name="" id="">
               <option value="1">X . MIPA . 1</option>  
               <option value="2">X . MIPA . 2</option>  
               <option value="3">X . MIPA . 3</option>  
               <option value="4">XI . MIPA . 1</option>  
               <option value="5">XI . MIPA . 2</option>  
               <option value="6">XI . MIPA . 3</option>  
               <option value="7">XII . MIPA . 1</option>  
               <option value="8">XII . MIPA . 2</option>  
               <option value="9">XII . MIPA . 3</option>  
               <option value="10">X . IPS . 1</option>  
               <option value="11">XI . IPS . 1</option>  
               <option value="12">XII . IPS . 1</option>  
              </select>
                </h6>
              
            </div>
            <div class="card-body">

            <h3>Absensi Harian untuk tanggal <?= date("d-M-Y") ?></h3>

            <table class="table table-bordered dataTable" id="dataTable">
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>
                        Status Kehadiran
                        <table class="table table-bordered">
                        <tr>
                            <th>Hadir</th>
                            <th>Hadir("Telat")</th>
                            <th>Tidak Hadir</th>
                        </tr>
                        </table>
                    </th>
                    
                </tr>
                <?php
                    while($data = mysqli_fetch_array($hs)){

                ?>
                <tr>
                    <td><?= $data["nis"] ?></td>
                    <td><?= $data["nama_siswa"] ?></td>
                    <td>
                    <table class="w-100">
                        <tr>
                            <form class="absen">
                            <input type="text" name="kelas" hidden value="<?= $data["id_kelas"] ?>">
                            <input type="text" name="nis" hidden value="<?= $data["nis"] ?>">
                            <td><input type="radio" name="status_hadir" value="hadir" checked></td>
                            <td><input type="radio" name="status_hadir" value="hadir_t"></td>
                            <td><input type="radio" name="status_hadir" value="tidak_h"></td>
                            </form>
                        </tr>
                        </table>
                    </td>
                </tr>
                    <?php } ?>
            </table>
                
            <button id="cobaStatus">Ubah</button>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © INDIEKOST 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar Aplikasi?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Logout" dibawah jika anda ingin mengakhiri sesi.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="assets/actions/process-logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- view modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary font-weight-bold" id="exampleModalCenterTitle">Rincian Data Penghuni
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="detail_pengguna">


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary font-weight-bold" id="exampleModalCenterTitle">Edit Data Penghuni</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="detail_edit">

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- lightbox -->
    <script src="assets/js/lightbox.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- lightbiox css -->
    <link href="assets/css/lightbox.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    

    <script>
        (function($,undefined){
            '$:nomunge'; // Used by YUI compressor.

            $.fn.serializeObject = function(){
                var obj = {};

                $.each( this.serializeArray(), function(i,o){
                var n = o.name,
                    v = o.value;

                    obj[n] = obj[n] === undefined ? v
                    : $.isArray( obj[n] ) ? obj[n].concat( v )
                    : [ obj[n], v ];
                });

                return obj;
            };

            })(jQuery);
    </script>

    <script>
      var array_Holder = [];
        
      $('#cobaStatus').click(function(){
          array_Holder = [];
        $('.absen').each(function(s){
            array_Holder.push($(this).serializeObject());
        });

        $.ajax({
            type: 'POST',
            url: 'absen_harian_aksi.php',
            data: {json: JSON.stringify(array_Holder)},
            dataType: 'json',
            success : function(response){
                window.location = 'absen_index.php';
            }
        });
      });

   

    </script>


</div><div id="lightboxOverlay" tabindex="-1" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" tabindex="-1" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt=""><div class="lb-nav"><a class="lb-prev" aria-label="Previous image" href=""></a><a class="lb-next" aria-label="Next image" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body></html>