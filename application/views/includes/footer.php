<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> <?= ($this->session->userdata('idioma') != NULL)?lang('conteudo_footer'):" Todos direitos reservados "; ?></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="<?= base_url() ?>public/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url() ?>public/js/popper.min.js"></script>
  <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>public/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url() ?>public/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>public/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url() ?>public/js/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>public/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url() ?>public/js/aos.js"></script>
  <script src="<?= base_url() ?>public/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url() ?>public/js/scrollax.min.js"></script>
  <script
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4527.65215632505!2d13.186226524066273!3d-8.921335079397412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f53ba2eeac33%3A0xa9444d7cc98dbf23!2sBelas%20Business%20Park!5e0!3m2!1spt-PT!2sao!4v1597657036483!5m2!1spt-PT!2sao">
  </script>
  <script src=" <?= base_url() ?>public/js/google-map.js"></script>
  <script src="<?= base_url() ?>public/js/main.js"></script>
  <script src="<?= base_url() ?>public/js/datatables.min.js"></script>
  <script src="<?= base_url() ?>public/js/helper.js"></script>
  <script type="text/javascript">var base_url = '<?= base_url() ?>';</script>
<script>
    $(function() {
        $("#atender").click(function(){
            $("#texto").val($(this).data('id'));
            $("#processo-atendimento").modal();
        });
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
</script>
</body>

</html>