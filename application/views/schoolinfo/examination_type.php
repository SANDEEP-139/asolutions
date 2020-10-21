

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>School Information Management</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    <?php 
    $data= $myModel->select_class($this->getSession('userid'));
    foreach($data as $user):
    ?>
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Exam Type Add for <?php echo $user->name; ?></h3>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn-fill-lmd radius-4 text-light bg-light-sea-green">ADD EXAM</button>
                    </div>
                </div>

                

                <div class="table-responsive">
                    <table class="table display data-table">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Exam Type</th>
                                <th>Exam Type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $q=0;
                            $myData= $myModel->select_exam_type($this->getSession('userid'),$user->id);
                            foreach($myData as $myuser):
                                $q++;
                        ?>
                            <tr>
                                <td><?php echo $q; ?></td>
                                <td><?php echo $myuser->ex_name_eng; ?></td>
                                <td><?php echo $myuser->ex_name_hnd; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="flaticon-more-button-of-three-dots"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
    <?php
    endforeach;    
    ?>

    
    
    
    <!-- Footer Area Start Here -->
    <?php include "components/copyright.php"; ?>
    <!-- Footer Area End Here -->

</div>

<?php include "components/footer.php"; ?>

