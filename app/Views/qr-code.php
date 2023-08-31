<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
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
<?= $this->endSection() ?>