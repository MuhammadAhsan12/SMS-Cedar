<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School Management System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

    <!-- fileinput css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fileinput/css/fileinput.min.css') ?>">
    <!-- fullcalendar css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fullcalendar/fullcalendar.min.css') ?>">
    <!-- keith calendar css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/keith-calendar/jquery.calendars.picker.css') ?>">

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Swet Alert -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('custom/css/custom.css') ?>">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- fileinput js -->
    <script type="text/javascript" src="<?php echo base_url('assets/fileinput/js/fileinput.min.js') ?>"></script>

    <!-- full calendar -->
    <script type="text/javascript" src="<?php echo base_url('assets/fullcalendar/moment.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/fullcalendar/fullcalendar.min.js') ?>"></script>

    <!-- keith calendar -->
    <script type="text/javascript" src="<?php echo base_url('assets/keith-calendar/jquery.calendars.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/keith-calendar/jquery.calendars.plus.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/keith-calendar/jquery.plugin.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/keith-calendar/jquery.calendars.picker.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/keith-calendar/jquery.calendars.picker.js') ?>"></script>


    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Date Picker -->
    <script>
        $('#datepicker').datepicker({
            autoclose: true
        })
    </script>

    <!-- Datatable -->
    <!-- <script>
        $(function() {
            $('#example1').DataTable()

            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script> -->
</head>