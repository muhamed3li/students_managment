<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('/adminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminLTE/dist/js/adminlte.js') }}"></script>



<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('/adminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/adminLTE/plugins/chart.js/Chart.min.js') }}"></script>


<script src="{{ asset('/adminLTE/dist/js/jQuery.print.min.js') }}"></script>

{{-- data table blugins --}}
<script src="{{ asset('/adminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- select 2 -->
<script src="{{ asset('/adminLTE/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('/adminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>


<!-- ChartJS -->
<script src="{{asset('/adminLTE/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

@include('sweetalert::alert')

<script>
    $( document ).ready(function() {
        $('.select2').select2()
    });

    

    $('#example1 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" style="min-width:200px" />' );
    });
    $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        "scrollX": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        initComplete: function () {
            this.api().columns().every( function () {
                var that = this;
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that.search( this.value ).draw();
                    }
                } );
            } );
        }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

</script>

@yield('specificScript')
@stack('js')
</body>

</html>