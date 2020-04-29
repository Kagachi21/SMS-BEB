
      <!-- modal akhir -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SMS BEB 2019</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../process-logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/js/jquery.magnific-popup.js"></script>
  <script>
  $(document).ready(function() {
    $('.image-link').magnificPopup({type:'image'});
    $('#semua').click(function () {
        // var value = $('select[id^=status_absen]').map(function(i, el) {
        //   return $(el).val();
        // }).get();
        var jam = $("#status_absen").attr("jam");
        var value = $("#status_absen4").val();
        console.log(value);
        $(".status_absen"+jam+" option").filter(function() {
          //may want to use $.trim in here
          // console.log($("#status_absen").attr("jam"));
          return $(this).text() == "Hadir" && $("#status_absen").attr("jam") == jam;
        }).prop('selected', true);
    });
    $('#pilih-semua').click(function () {
      console.log("berhasil");
        $("#status_absen option").filter(function() {
          return $(this).text() == "Pulang" || $(this).text() == "Hadir";
        }).prop('selected', true);
    });
  });
  </script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assets/js/demo/datatables-demo.js"></script>


</body>

</html>
