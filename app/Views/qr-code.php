

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bukidnon DRRM Contingency Planning - Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url("assets/images/logo/favicon.png")?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?=base_url("assets/css/app.min.css")?>" rel="stylesheet">
    <style>
        @media all and (max-width:480px) {
   .custom-class { width: 100%; display:block; }
}   
    </style>
</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('<?=base_url('assets/images/others/bg-red.png')?>'); background-attachment: fixed;">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100" style="margin-left: 0px;">
                        <div class="col-md-12 col-lg-12 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <div class="row">
                                            <div class="col-12">
                                                <img class="img-fluid" src="<?=base_url('assets/images/logo/handa-logo-black.png')?>">
                                            </div>
                                            <div class="mt-3 col-12">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga dolorem unde, nihil odio rerum qui harum molestias numquam odit corrupti ea molestiae eveniet dicta, corporis nemo exercitationem! Excepturi, pariatur cum.</p>
                                                <p class="text-center">Please download the QR code and present it to the registration booth.</p>
                                            </div>
                                            <div class="col-md-12">
                                                <img class="img-fluid mx-auto d-block" src="<?=base_url('uploads/qr/'.$userid)?>.png">
                                                <p class="text-center font-weight-semibold"><?=$userid?></p>
                                            </div>
                                            <div class="col-md-12 mt-3 text-center">
                                                <a download="<?=$userid?>.png" href="<?=base_url('uploads/qr/'.$userid)?>.png" target="_blank">
                                                    <button class="btn btn-danger custom-class">Download</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="<?=base_url("assets/js/app.min.js")?>"></script>

</body>

</html>