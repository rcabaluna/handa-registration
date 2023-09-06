<?= $this->extend('templates/main-admin') ?>
<?= $this->section('content') ?>
    <div class="container-fluid d-flex h-100">
        <div class="row w-100" style="margin-left: 0px;">
            <div class="col-md-12 col-lg-12 m-h-auto">
                <div class="mt-3 mb-2 col-12">
                    <h3>Participants List</h3>
                </div>
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between m-b-30">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <a href="<?=base_url('register')?>">
                                        <button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Register"><i class="anticon anticon-user-add"></i></button>
                                    </a>
                                    <a href="<?=base_url('handa/participants?event=all')?>">
                                        <button class="btn btn-secondary btn-xs active" data-toggle="tooltip" data-placement="top" title="Participants List"><i class="anticon anticon-bars"></i></button>
                                    </a>
                                </div>
                                <?php if(isset($_SESSION['delete'])){
                                                    ?>
                                <div class="col-md-12">
                                    <div class="alert alert-info">
                                        The participant has been deleted successfully!
                                    </div>
                                </div>
                                <?php
                                                }?>
                                <div class="col-md-3">
                                    <select class="form-control" id="selevents" onchange="get_participants_by_event()">
                                        <option value="all">All</option>
                                        <?php foreach ($events as $eventsRow) { ?>
                                        <option value="<?=$eventsRow['shorthand']?>"><?=$eventsRow['name']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mt-3 col-12">
                                    
                                </div>
                            </div>
                        </div>
                        <table class="table table-condensed table-responsive" id="participants-table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Registration No.</th>
                                                <th>Title</th>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Sex</th>
                                                <th>Address</th>
                                                <th>Agency Name</th>
                                                <th>Sector/Affiliation</th>
                                                <th>Event</th>
                                                <th>Privileges</th>
                                                <th>QR Code</th>
                                                <th>Date Registered</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count=0; foreach ($participants as $participantsRow) {
                                                                ?>
                                            <tr>
                                                <td><?=$count+=1?></td>
                                                <td><?=$participantsRow['regnumber']?></td>
                                                <td><?=$participantsRow['title']?></td>
                                                <td><?php
                                                    echo $participantsRow['lastname'].', '.$participantsRow['firstname'];
                                                    echo ($participantsRow['suffix'] ? ", ".$participantsRow['suffix'] : '');
                                                    echo ($participantsRow['middle_initial'] ? " ".$participantsRow['middle_initial'] : '');
                                                    ?>
                                                </td>
                                                <td><?=$participantsRow['contactno']?></td>
                                                <td><?=$participantsRow['email']?></td>
                                                <td><?=$participantsRow['sex']?></td>
                                                <td><small><?=$participantsRow['regDesc']." - <br>".$participantsRow['provDesc']?></small></td>
                                                <td><?=$participantsRow['agency_name']?></td>
                                                <td><?=$participantsRow['sectorname']?></td>
                                                <td><small><?=$participantsRow['name']?></small></td>
                                                <td><?=($participantsRow['privileges']) ? $participantsRow['privileges'] : '-' ?></td>
                                                <td>
                                                    <div class="avatar avatar-image avatar-square">
                                                        <img src="<?=base_url('uploads/qr/').$participantsRow['regnumber']?>.png" />
                                                    </div>
                                                </td>
                                                <td><?=date("M d, Y h:i A",strtotime('+8 hours',strtotime($participantsRow['date_registered'])))?></td>
                                                <td>
                                                    <button class="btn btn-primary btn-xs"><i class="anticon anticon-edit"></i></button>
                                                    <a href="<?=base_url('handa/participants/delete?participantid='.$participantsRow['participantid'])?>">
                                                        <button class="btn btn-danger btn-xs"><i class="anticon anticon-delete"></i></button>
                                                    </a>
                                                </td>
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

    <!-- Core Vendors JS -->
    <script src="<?=base_url("assets/js/vendors.min.js")?>"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?=base_url("assets/js/app.min.js")?>"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>

    <script>
        new DataTable('#participants-table',
            {
                order : [[1, 'desc']],
                responsive: true,
                columnDefs: [
                                { responsivePriority: 1, targets: 0 },
                                { responsivePriority: 2, targets: -1 }
                            ]
            }
        );

        $(document).ready(function () {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const event = urlParams.get('event');

            $("#selevents").val(event);

        });

        function get_participants_by_event() {
            var event = $("#selevents").val();
            window.location.replace("<?=base_url('/handa/participants?event=')?>"+event);
        }
    </script>
<?= $this->endSection() ?>
