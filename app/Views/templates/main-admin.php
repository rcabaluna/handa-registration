<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HANDA Pilipinas 2023 - Registration</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url("assets/images/logo/favicon.png")?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?=base_url("assets/css/app.min.css")?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?=base_url("assets/js/app.min.js")?>"></script>
    <script src="<?=base_url('assets/js/instascan.min.js')?>"></script>
 
    

    

    <style>
        @media all and (max-width:480px) {
   .custom-class { width: 100%; display:block; }
}   
    </style>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
</head>

<?php $uri = service('uri'); ?>
<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container-fluid d-flex h-100">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="text-white">© <?=date('Y')?> <a href="https://region10.dost.gov.ph">DOST 10</a></span>
                </div> -->
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="<?=base_url("assets/js/vendors.min.js")?>"></script>

    <!-- page js -->

    <!-- Core JS -->

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js" ></script>

</body>

</html>

