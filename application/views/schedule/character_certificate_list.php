

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>Character Certificate List</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3 class="arm0">Certificate List</h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Student Name</th>
                            <th>Father's Name</th>
                            <th>Roll No.</th>
                            <th>School Name</th>
                            <th>During Year</th>
                            <th>Issue Date</th>
                            <th>Character Type</th>
                            <th>Update By</th>
                            <th>Date</th>
                            <th>Print</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $q=0;
                        $myData= $myModel->select_employee($this->getSession('userid'),"Active");
                        foreach($myData as $myuser):
                            $q++;
                    ?>
                        <tr>
                            <td><?php echo $q; ?></td>
                            <td><?php echo $myuser->employee_name; ?></td>
                            <td><?php echo $myuser->sms_contact; ?></td>
                            <td><?php echo $myuser->designation; ?></td>
                            <td><?php echo $myuser->pin; ?></td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <span class="flaticon-more-button-of-three-dots"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-times text-orange-red"></i>Dropped</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Update</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                        endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "components/footer.php"; ?>

