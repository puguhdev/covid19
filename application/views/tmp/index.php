<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title;?> - Covid-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />
    <meta name="robots" content="follow,all" />
    <meta name="description" content="Informasi Penyebaran Coronavirus Covid-19 Dimulai Data Kabupaten, Provinsi, nasional, dan Dunia">
    
    <link href="<?=base_url('assets/icon.png')?>" rel="shortcut icon">

    <link rel="stylesheet" href="<?=site_url('vendor/style/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=site_url('vendor/style/css/style.css')?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body>
    
    <?php $this->load->view($header); ?>
    <?php $this->load->view($content); ?>

    <footer>
        <div class="container text-center">
            <p>Pantau Coronavirus Covid-19 | Support By <a href="https://rimodigital.com">Rimo Digital.</a> </p>
        </div>
    </footer>

    <script src="<?=site_url('vendor/style/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=site_url('vendor/style/js/bootstrap.bundle.min.js')?>"></script>
    <script src="https://kit.fontawesome.com/2bd9c074de.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
            $('#table2').DataTable();
        } );
    </script>
</body>
</html>