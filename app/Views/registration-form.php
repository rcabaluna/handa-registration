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
                                                <img class="img-fluid" src="assets/images/logo/handa-logo-black.png">
                                            </div>
                                            <div class="mt-3 col-12">
                                                <p>To register, fill out the form below:</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="<?=base_url('/reg-process')?>">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-semibold">Full Name (First Name, M.I, Last Name, Suffix) <small class="text-danger">*</small></label>
                                                <input type="text" class="form-control" name="fullname" placeholder="Last Name, First Name, Suffix, M.I" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Contact Number</label>
                                                <input type="number" class="form-control" name="contactno" placeholder="Contact Number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email Address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Position <small class="text-danger">*</small></label>
                                                <input type="text" name="position" class="form-control" placeholder="Designation" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Agency/Unit/LGU <small class="text-danger">*</small></label>
                                                <input type="text" name="agency_name" class="form-control" placeholder="Name of Institution/Agency" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Sex <small class="text-danger">*</small></label>
                                                <select class="form-control" name="sex" required>
                                                    <option value=""></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Privileges</label>
                                                <div class="checkbox">
                                                    <input id="checkbox1" type="checkbox" value="PWD" name="privileges[]">
                                                    <label for="checkbox1">PWD</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input id="checkbox2" type="checkbox" value="Solo Parent" name="privileges[]">
                                                    <label for="checkbox2">Solo Parent</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input id="checkbox3" type="checkbox" value="Senior Citizen" name="privileges[]">
                                                    <label for="checkbox3">Senior Citizen</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input id="checkbox4" type="checkbox" value="IP" name="privileges[]">
                                                    <label for="checkbox4">IP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <button class="btn btn-danger custom-class float-right">Register</button>
                                            </div>
                                        </div>
                                    </form>
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
<?= $this->endSection() ?>
