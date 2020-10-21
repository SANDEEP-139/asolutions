

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area aeroheader">
                    <h3>Add Class Work</h3>
                </div>
                <div class='alert alert-danger ad-none'>Something wrong.</div>
                <div class='alert alert-success ad-none'>Transaction Succesfully Update.</div>
                <!-- Breadcubs Area End Here -->

                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Class Work</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" id="form1">
                                <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label id="classliste">Class *</label>
                                    <input type="hidden" name="type" value="Class Work">
                                    <select class="select2" name="class" id="classlist">
                                        <option value="0">Select Class *</option>
                                        <?php
                                         $myData= $myModel->select_class($this->getSession('userid'));
                                         foreach($myData as $myuser):
                                            echo '<option value="'.$myuser->id.','.$myuser->name.'">'.$myuser->name.'</option>';
                                         endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group d-none">
                                    <label>Section *</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label id="subjectliste">Subject Name *</label>
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
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label id="datee">Date *</label>
                                    <input type="text" id="date" name="date" value="" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Remark</label>
                                    <input type="dropdown" name="remark" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Home Work Image</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label id="discripe"><b>Write home work here *</b></label>
                                    <textarea id="discrip" class="textarea form-control" placeholder="Write class work here..." name="message" id="form-message" cols="10" rows="9"></textarea>
                                </div>
                                
                                <div class="col-12 form-group mg-t-8">
                                    <button onclick="savework()" type="button" class="btn-fill-lg bg-blue-dark btn-hover-yellow">SUBMIT</button>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <div class='alert alert-danger ad-none'>Something wrong.</div>
                                    <div class='alert alert-success ad-none'>Transaction Succesfully Update.</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
</div>

<?php include "components/footer.php"; ?>
<script>
function savework(){
    $classlist = $("#classlist").val();
    $subjectlist = $("#subjectlist").val();
    $date = $("#date").val();
    $discrip = $("#discrip").val();
    if($classlist=="0"){$("#classliste").css("color", "red");}else{$("#classliste").css("color", "black");}
    if($subjectlist=="0"){$("#subjectliste").css("color", "red");}else{$("#subjectliste").css("color", "black");}
    if($date==""){$("#datee").css("color", "red");}else{$("#datee").css("color", "black");}
    if($discrip==""){$("#discripe").css("color", "red");}else{$("#discripe").css("color", "black");}

    if($classlist!="0" && $subjectlist!="0" && $date!="" && $discrip!=""){
        $.ajax({
            url: "<?php echo BASEURL.'/schedule/saveclasswork/'?>", 
            type: "POST",
            beforeSend:function(){
                $("#loadingProgressG").show();
            },
            data: $("#form1").serialize(),
            success: function(result){
                $("#loadingProgressG").hide();
                if(result=="Succesfull"){
                    $(".alert-danger").hide();
                    $(".alert-success").show();
                }
                else{
                    $(".alert-danger").show();
                    $(".alert-success").hide();
                }
            }
        });
    }
}

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
</script>
