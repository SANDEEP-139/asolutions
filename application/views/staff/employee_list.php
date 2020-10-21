

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>Employee Managment</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    <?php print_r($this->jquery_flash("alert alert-danger")); ?>
    <?php print_r($this->jquery_flash("alert alert-success"));?>
    
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3 class="arm0">Employee List</h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Employee Name</th>
                            <th>Contact No.</th>
                            <th>Designation</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="bankdata">
                    
                    <?php
                    $this->view2("ajax/allsubjects",$myModel,['wid'=>"32"]);
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
<script>
function deleted($id) {
    $.ajax({
        url: "<?php echo BASEURL.'/staff/delete_employee' ?>", 
        type: "POST",
        data: {id:$id},
        beforeSend:function(){$("#loadingProgressG").show();},
        success: function(result){
            $("#bankdata").html(result);
            $("#loadingProgressG").hide();
        }
    });
}
function updatebtn($id) {
    window.location.replace('<?php echo BASEURL ?>/staff/add_employee/'+$id);
}
</script>

