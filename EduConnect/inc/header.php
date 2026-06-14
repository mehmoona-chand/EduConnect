<?php
  // require_once('sess_auth.php');
  // Ensure $_settings and base_url are defined before use
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    <?= $_settings->info('title') ? $_settings->info('title') . ' | ' : '' ?>
    <?= $_settings->info('name') ?>
  </title>
  
  <link rel="icon" href="<?= validate_image($_settings->info('logo')) ?>" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/fontawesome-free/css/all.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/jqvmap/jqvmap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url ?>dist/css/adminlte.css">
  <link rel="stylesheet" href="<?= base_url ?>dist/css/custom.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/summernote/summernote-bs4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Chart.js Fix -->
  <style>
    @keyframes chartjs-render-animation {
      from { opacity: 0.99; }
      to { opacity: 1; }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms;
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1;
    }

    .chartjs-size-monitor-expand > div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0;
    }

    .chartjs-size-monitor-shrink > div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0;
    }
  </style>

  <!-- jQuery -->
  <script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>

  <!-- jQuery UI -->
  <script src="<?= base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>

  <!-- SweetAlert2 -->
  <script src="<?= base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

  <!-- Toastr -->
  <script src="<?= base_url ?>plugins/toastr/toastr.min.js"></script>

  <!-- Global JS Variables -->
  <script>
    var _base_url_ = '<?= base_url ?>';
  </script>

  <!-- Custom Scripts -->
  <script src="<?= base_url ?>dist/js/script.js"></script>
  <script src="<?= base_url ?>assets/js/scripts.js"></script>

  <!-- Optional Settings Load -->
  <?php // echo html_entity_decode($_settings->load_data()); ?>

  <!-- Custom Header Background Style -->
  <style>
    #main-header {
      position: relative;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.485) 22%, rgba(0, 0, 0, 0.395) 49%, rgba(0, 212, 255, 0) 100%) !important;
    }

    #main-header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('<?= base_url . $_settings->info('cover') ?>');
      background-repeat: no-repeat;
      background-size: cover;
      filter: drop-shadow(0px 7px 6px black);
      z-index: -1;
    }
  </style>
</head>
