

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>School Information Management</h3>
    </div>
    <!-- Breadcubs Area End Here -->

    
    
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add Discount type</h3>
                </div>
                <div class="dropdown">
                    <button type="button" class="btn-fill-lmd radius-4 text-light bg-light-sea-green">ADD DISCOUNT TYPE</button>
                </div>
            </div>

            

            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Discount Type</th>
                            <th>Discount Type Hindi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $q=0;
                        $myData= $myModel->select_college_fee_discount_type($this->getSession('userid'));
                        foreach($myData as $myuser):
                            $q++;
                    ?>
                        <tr>
                            <td><?php echo $q; ?></td>
                            <td><?php echo $myuser->discount_type_eng; ?></td>
                            <td><?php echo $myuser->discount_type_hnd; ?></td>
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
    
    
    
    <!-- Footer Area Start Here -->
    <?php include "components/copyright.php"; ?>
    <!-- Footer Area End Here -->

</div>

<?php include "components/footer.php"; ?>

