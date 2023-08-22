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
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">

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
                <div class="container-fluid d-flex h-100">
                    <div class="row align-items-center w-100" style="margin-left: 0px;">
                        <div class="col-md-12 col-lg-12 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="<?=base_url('register')?>"><button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Register"><i class="anticon anticon-user-add"></i></button></a>
                                                <a href="<?=base_url('attendance')?>"><button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Attendance"><i class="anticon anticon-login"></i></button></a>
                                                <a href="<?=base_url('participants')?>"><button class="btn btn-secondary btn-xs" data-toggle="tooltip" data-placement="top" title="Participants List"><i class="anticon anticon-bars"></i></button></a>
                                                <a href="<?=base_url('participants/attendance')?>"><button class="btn btn-secondary btn-xs active" data-toggle="tooltip" data-placement="top" title="Attendance List"><i class="anticon anticon-barcode"></i></button></a>
                                            </div>
                                            <div class="mt-3 mb-2 col-12">
                                                <h3>Attendance List</h3>
                                            </div>
                                            
                                            <div class="mt-3 col-12">
                                                <div id="example-wrapper">
                                                <table class="table table-condensed table-responsive" id="participants-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Registration No.</th>
                                                            <th>Full Name</th>
                                                            <th>Contact No</th>
                                                            <th>Email</th>
                                                            <th>Position</th>
                                                            <th>Agency Name</th>
                                                            <th>Sex</th>
                                                            <th>Privileges</th>
                                                            <th>Attendance Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($participants as $participantsRow) {
                                                            ?>
                                                        <tr>
                                                            <td><?=$participantsRow['regnumber']?></td>
                                                            <td><?=$participantsRow['fullname']?></td>
                                                            <td><?=$participantsRow['contactno']?></td>
                                                            <td><?=$participantsRow['email']?></td>
                                                            <td><?=$participantsRow['position']?></td>
                                                            <td><?=$participantsRow['agency_name']?></td>
                                                            <td><?=$participantsRow['sex']?></td>
                                                            <td><?=$participantsRow['privileges']?></td>
                                                            <td><?=date("M d, Y h:i A",strtotime('+8 hours',strtotime($participantsRow['date_registered'])))?></td>
                                                        </tr> 
                                                            <?php
                                                        }?>
                                                    </tbody>
                                                </table>
                                                </div>
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
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>


    <script>

$('#participants-table').DataTable( {
        order : [[8, 'desc']],
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
    </script>
</body>

</html>