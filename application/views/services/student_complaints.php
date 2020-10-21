

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3><?php echo $viewdata[0]; ?> Complaint List</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    
    <div class="card height-auto">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-xl-2 col-lg-6 col-12 arhdng">
                   <h3 class="arm0">Complaint List</h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th class="arcapword"><?php echo $viewdata[0]; ?> Name</th>
                            <th>Class</th>
                            <th>Contact</th>
                            <th>Date</th>
                            <th>Complaints</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="studentdata">
                    <?php
                         $this->view2("ajax/allsubjects",$myModel,['wid'=>"17",'type'=>$viewdata[0]]);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

<?php include "components/footer.php"; ?>
