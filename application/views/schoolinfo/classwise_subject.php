

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>Class Wise Subject Management</h3>
    </div>
    <!-- Breadcubs Area End Here -->

     
    <div class="row">
        <div class="col-6-xxxl col-xl-6">
            <div class="card account-settings-box height-auto">
                <div class="card-body">
                    <div class="heading-layout1 mg-b-20">
                    <div class="row w-100">
                            <div class="col-xl-6 col-sm-6 col-12">
                                <select id="subjecttype" class="select2">
                                    <option value="Normal">Main Subjects</option>
                                    <option value="Practical">Practical Subjects</option>
                                    <option value="Other">Other Subjects</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-12">
                                <select id="classlist" class="select2">
                                <?php 
                                $data= $myModel->select_active_class($this->getSession('userid'));
                                foreach($data as $user):
                                ?>
                                <option value="<?php echo $user->id.','.$user->name; ?>"><?php echo $user->name; ?></option>
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
                                    <th>Subject Name</th>
                                    <th>Subject Name</th>
                                    <th class="text-center">Add</th>
                                </tr>
                            </thead>
                            <tbody id="subcat">
                            <?php
                            $this->view2("ajax/allsubjects",$myModel,['category'=>"Normal",'wid'=>"1",'classid'=>"1"]);
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6-xxxl col-xl-6">
            <div class="card account-settings-box">
                <div class="card-body">
                    <div class="heading-layout1 mg-b-20">
                        <div class="item-title">
                            <h3 id="classheadind">NURSERY Subjects</h3>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table display data-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Subject Name</th>
                                    <th>Subject Name</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="cldata">
                            <?php
                               $this->view2("ajax/allsubjects",$myModel,['category'=>"1",'wid'=>"2"]);
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    

</div>

<?php include "components/footer.php"; ?>
<script>
    function select1(){
        $.ajax({
            url: "<?php echo BASEURL.'/schoolinfo/category_subject/'?>", 
            type: "POST",
            beforeSend:function(){$("#loadingProgressG").show();},
            data: {category:$("#subjecttype").val(),wid:"1",classid:$("#classlist").val().split(',')[0]},
            success: function(result){
                $("#subcat").html(result);
                $("#loadingProgressG").hide();
            }
        });
    }
    function select2(){
        $.ajax({
            url: "<?php echo BASEURL.'/schoolinfo/category_subject/'?>", 
            type: "POST",
            beforeSend:function(){$("#loadingProgressG").show();},
            data: {category:$("#subjecttype").val(),wid:"1",classid:$("#classlist").val().split(',')[0]},
            success: function(result){
                $("#subcat").html(result);
                $("#loadingProgressG").hide();
            }
        });
    }
    $("#subjecttype").change(function() {
        select1();
    });
    $("#classlist").change(function() {
        $("#classheadind").html($(this).val().split(',')[1]+" Subjects");
        $.ajax({
            url: "<?php echo BASEURL.'/schoolinfo/category_subject/'?>", 
            type: "POST",
            beforeSend:function(){$("#loadingProgressG").show();},
            data: {category:$(this).val().split(',')[0],wid:"2",classid:"0"},
            success: function(result){
                $("#cldata").html(result);
                select2();
            }
        });
    });
    function adddubject($subid,$subengname,$subhndname){
        var $clsid=$("#classlist").val().split(',')[0];
        $.ajax({
            url: "<?php echo BASEURL.'/schoolinfo/add_class_subject/'?>",
            type: "POST",
            beforeSend:function(){$("#loadingProgressG").show();},
            data: {clsid:$clsid,subid:$subid,subengname:$subengname,subhndname:$subhndname,category:$("#subjecttype").val()},
            success: function(result){
                $("#cldata").html(result);
                select1();
            }
        });
    }
    function deletesubject($subid){
        var $clsid=$("#classlist").val().split(',')[0];
        $.ajax({
            url: "<?php echo BASEURL.'/schoolinfo/delete_class_subject/'?>",
            type: "POST",
            beforeSend:function(){$("#loadingProgressG").show();},
            data: {clsid:$clsid,subid:$subid,category:$("#subjecttype").val()},
            success: function(result){
                $("#cldata").html(result);
                select1();
                $("#loadingProgressG").hide();
            }
        });
    }
</script>
