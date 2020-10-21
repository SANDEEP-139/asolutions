
<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>Classwork List</h3>
    </div>
    <!-- Breadcubs Area End Here -->
    
    <div class="card height-auto">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-xl-2 col-lg-6 col-12 arhdng">
                   <h3 class="arm0">Classwork List</h3>
                </div>
                <div class="col-xl-2 col-lg-6 col-12">
                <select class="select2" name="class" id="classlist">
                    <option value="0">Select Class</option>
                    <?php
                        $myData= $myModel->select_class($this->getSession('userid'));
                        foreach($myData as $myuser):
                        echo '<option value="'.$myuser->id.','.$myuser->name.'">'.$myuser->name.'</option>';
                        endforeach;
                    ?>
                </select>
                </div>
                <div class="col-xl-2 col-lg-6 col-12">
                <select class="select2" name="subject" id="subjectlist">
                    <option value="0">Select Subjects</option>
                    <?php
                        $myData= $myModel->select_course_subject($this->getSession('userid'),"1");
                        foreach($myData as $myuser):
                        echo '<option value="'.$myuser->id.','.$myuser->subject_name_eng.'">'.$myuser->subject_name_eng.'</option>';
                        endforeach;
                    ?>
                </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Class Name</th>
                            <th>Class Name</th>
                            <th>Date</th>
                            <th>Remark</th>
                            <th>Updated_by</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="worklist">
                    <?php
                         $this->view2("ajax/allsubjects",$myModel,['wid'=>"25",'type'=>"Class Work",'select'=>"All"]);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

<?php include "components/footer.php"; ?>

<script>
$("#classlist").change(function() {
    $.ajax({
        url: "<?php echo BASEURL.'/schedule/subjectlist/'?>", 
        type: "POST",
        beforeSend:function(){
            $("#loadingProgressG").show();
        },
        data: {classid:$(this).val().split(',')[0]},
        success: function(result){
            $("#subjectlist").html(result);
            $("#loadingProgressG").hide();
        }
    });
});

$("#subjectlist").change(function() {
    if($(this).val().split(',')[0]=="0"){$stype="All"}else{$stype="No"}
    $.ajax({
        url: "<?php echo BASEURL.'/schedule/worklist/'?>", 
        type: "POST",
        beforeSend:function(){
            $("#loadingProgressG").show();
        },
        data: {classid:$("#classlist").val().split(',')[0],subjectid:$(this).val().split(',')[0],type:"Class Work",'select':$stype},
        success: function(result){
            $("#worklist").html(result);
            $("#loadingProgressG").hide();
        }
    });
});
</script>