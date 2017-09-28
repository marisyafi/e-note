<?php
/**
 * Created by PhpStorm.
 * User: NinjaRasel
 * Date: 27-Aug-17
 * Time: 11:00 AM
 */
?>

<!-- jQuery 3 -->
<script src="{{ URL::asset('ap/plugins/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('ap/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap Timepicker -->
<script src="{{ URL::asset('ap/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
<!-- Bootstrap Datepicker -->
<script src="{{ URL::asset('ap/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap Colorpicker -->
<script src="{{ URL::asset('ap/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ URL::asset('ap/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('ap/plugins/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('ap/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('ap/plugins/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ URL::asset('ap/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('ap/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('ap/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('ap/plugins/Chart.js/Chart.js') }}"></script>
<!-- select2 -->
<script src="{{ URL::asset('ap/plugins/select2/dist/js/select2.full.min.js') }}"></script>
{{--<!-- InputMask -->--}}
<script src="{{ URL::asset('ap/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ URL::asset('ap/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ URL::asset('ap/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::asset('ap/plugins/iCheck/iCheck.min.js') }}"></script>
{{--<!-- DataTables -->--}}
<script src="{{ URL::asset('ap/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('ap/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
{{--<!-- Moment -->--}}
<script src="{{ URL::asset('ap/plugins/moment/moment.js') }}"></script>
<!-- Highlight -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/highlight.min.js"></script>
<!-- BootstrapToggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{ URL::asset('ap/dist/js/pages/dashboard2.js') }}"></script>--}}
<!-- AdminLTE for demo purposes -->
{{--<script src="{{ URL::asset('ap/dist/js/demo.js') }}"></script>--}}



<!-- Page script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();
        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();
        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
        //DataTable
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>

@yield('body_script')
