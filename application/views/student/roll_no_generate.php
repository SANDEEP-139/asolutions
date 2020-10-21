

<?php include "components/header.php"; ?>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>Student Managment</h3>
    </div>
    <!-- Breadcubs Area End Here -->

    <?php print_r($this->jquery_flash("alert alert-danger"));  ?>
    <?php print_r($this->jquery_flash("alert alert-success"));  ?>
    
    <div class="card height-auto">
        <div class="card-body">
            
           <div class="row mb-3">
                <div class="col-xl-2 col-lg-6 col-12 arhdng">
                   <h3 class="arm0">Student Profile</h3>
                </div>
                <div class="col-xl-2 col-lg-6 col-12">
                    <select class="select2" name="class" id="classtype">
                        <option value="0">Select Class</option>
                        <?php 
                        $myData= $myModel->select_class($this->getSession('userid'));
                        foreach($myData as $myuser):
                            if(!empty($viewdata['class'])):if($viewdata['class']==$myuser->id){$sl= "selected";}else{$sl="";};endif;
                            echo '<option value="'.$myuser->id.'"  '.$sl.'>'.$myuser->name.'</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <select class="select2" name="class" id="rltype">
                        <option value="0">Automatic Ro. No</option>
                        <option value="1">Manual Ro. No</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12"></div>
                <div class="col-xl-2 col-lg-6 col-12 text-right">
                    <button type="button" onclick="update()" class="btn-fill-lmd radius-4 text-light bg-light-sea-green">UPDATE</button>
                </div>
            </div>
            <div class="table-responsive ">
                <form id="form1">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Student Name</th>
                            <th>Father Name</th>
                            <th>Class</th>
                            <th>Old Roll Number</th>
                            <th>New Rool Number</th>
                            
                        </tr>
                    </thead>
                    <tbody id="studentdata">
                    <?php
                         $this->view2("ajax/allsubjects",$myModel,['wid'=>"31",'status'=>"Active",'all'=>"Select",'clasid'=>"0",'rltype'=>"0"]);
                    ?>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
    
</div>

<?php include "components/footer.php"; ?>


<script>
$("#classtype").change(function() {
    $.ajax({
        url: "<?php echo BASEURL.'/student/rollnumlist/'?>", 
        type: "POST",
        beforeSend:function(){
            $("#loadingProgressG").show();
        },
        data: {clasid:$(this).val(),status:"Active",rltype:$("#rltype").val()},
        success: function(result){
            $("#studentdata").html(result);
            $("#loadingProgressG").hide();
        }
    });
});
$("#rltype").change(function() {
    $.ajax({
        url: "<?php echo BASEURL.'/student/rollnumlist/'?>", 
        type: "POST",
        beforeSend:function(){
            $("#loadingProgressG").show();
        },
        data: {clasid:$("#classtype").val(),status:"Active",rltype:$(this).val()},
        success: function(result){
            $("#studentdata").html(result);
            $("#loadingProgressG").hide();
        }
    });
});  

function update() {


    $.ajax({
        url: "<?php echo BASEURL.'/student/update_rollno/'?>"+$("#classtype").val()+"/"+$("#rltype").val(), 
        type: "POST",
        beforeSend:function(){
            $("#loadingProgressG").show();
        },
        data: $("#form1").serializeArray(),
        success: function(result){
            $("#loadingProgressG").hide();
            if(result=="fail"){
                $(".alert-danger").show().html("Roll numbers not updated.");
            }
            else{
                $("#studentdata").html(result);
                $(".alert-success").show().html("Sucessfully updates roll numbers.");
            }
        }
    });

}
</script>