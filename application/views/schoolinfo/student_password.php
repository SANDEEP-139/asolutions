

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>Update Student Password</h3>
    </div>
    <!-- Breadcubs Area End Here -->

    
    
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="row w-50">
                    <div class="col-xl-6 col-sm-6 col-12">
                        <select class="select2">
                            <option value="Normal">Main Subjects</option>
                            <option value="Practical">Practical Subjects</option>
                            <option value="Other">Other Subjects</option>
                        </select>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12">
                        <select class="select2">
                        <?php 
                        $data= $myModel->select_active_class($this->getSession('userid'));
                        foreach($data as $user):
                        ?>
                            <option value="<?php echo $user->name; ?>"><?php echo $user->name; ?></option>
                        <?php
                        endforeach;
                        ?>
                        </select>
                    </div>
                </div>
            </div>

            

            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Student Name</th>
                            <th>Userid</th>
                            <th>Password</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // $q=0;
                        // $myData= $myModel->select_college_fee_discount_type($this->getSession('userid'));
                        // foreach($myData as $myuser):
                        //     $q++;
                    ?>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Rahul Kumar</td>
                            <td class="form-group"><input type="text" placeholder="" value="675657" class="form-control"></td>
                            <td class="form-group"><input type="text" placeholder="" value="GC5432" class="form-control"></td>
                            <td>
                                
                            </td>
                        </tr>
                    <?php
                        //endforeach;
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

