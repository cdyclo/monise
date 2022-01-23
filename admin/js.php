<!-- jQuery -->
<script src="../template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../template/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../template/plugins/raphael/raphael.min.js"></script>
<script src="../template/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../template/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../template/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../template/dist/js/pages/dashboard2.js"></script>

<!-- Ekko Lightbox -->
<script src="../template/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>


<!-- Filterizr-->
<script src="../template/plugins/filterizr/jquery.filterizr.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../template/plugins/jszip/jszip.min.js"></script>
<script src="../template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- SweetAlert2 -->
<script src="../template/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../template/plugins/toastr/toastr.min.js"></script>

<!-- Summernote -->
<script src="../template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="../template/plugins/codemirror/codemirror.js"></script>
<script src="../template/plugins/codemirror/mode/css/css.js"></script>
<script src="../template/plugins/codemirror/mode/xml/xml.js"></script>
<script src="../template/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.min.js"></script>



<!-- AdminLTE for demo purposes -->
<script src="../template/dist/js/demo.js"></script>

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote2').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>