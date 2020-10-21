

<?php include "components/header.php"; ?>

<?php 
    $tid=$viewdata[0];
    if($tid!="add"){
        $teacherdata= $myModel->select_teacher_data($viewdata[0]);
        //if(!empty($teacherdata)){ echo $teacherdata->employee_name;}
    }
?>

<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area aeroheader">
                    <h3>Staff Management</h3>
                </div>
    <?php print_r($this->jquery_flash("alert alert-danger"));  ?>
    <?php print_r($this->jquery_flash("alert alert-success"));  ?>
                
                <!-- <?php// print_r($this->flash("msg","alert alert-danger"));  ?>
                <?php// print_r($this->flash("msgsuc","alert alert-success"));  ?> -->
                <!-- Breadcubs Area End Here -->

                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Personal Details:</h3>
                            </div>
                        </div>
                        <form id="form1" class="new-added-form"  method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Employee Name *</label>
                                    <input type="hidden" name="id" value="<?php if(!empty($teacherdata)){echo $teacherdata->id;} ?>" />
                                    <input type="text" name="employee_name" value="<?php if(!empty($teacherdata)){echo $teacherdata->employee_name;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender</label>
                                    <input type="text" name="gender" value="<?php if(!empty($teacherdata)){echo $teacherdata->gender;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" name="date_Of_birth" value="<?php if(!empty($teacherdata)){echo $teacherdata->date_of_birth;} ?>" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Husband/Father's Name</label>
                                    <input type="text" name="father_name" value="<?php if(!empty($teacherdata)){echo $teacherdata->father_name;} ?>" placeholder="" class="form-control">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Email Address</label>
                                    <input type="text" name="email" value="<?php if(!empty($teacherdata)){echo $teacherdata->email;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($data['sms_contact_no_error'])): echo 'class="text-red"' ;endif; ?>>SMS Contact No *</label>
                                    <input type="text" name="sms_contact_no" value="<?php if(!empty($teacherdata)){echo $teacherdata->sms_contact;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($data['contact_no_error'])): echo 'class="text-red"' ;endif; ?>>Contact No *</label>
                                    <input type="text" name="contact_no" value="<?php if(!empty($teacherdata)){echo $teacherdata->contact_no;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" value="<?php if(!empty($teacherdata)){echo $teacherdata->address;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>City</label>
                                    <input type="text" name="city" value="<?php if(!empty($teacherdata)){echo $teacherdata->city;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pin</label>
                                    <input type="text" name="pin" value="<?php if(!empty($teacherdata)){echo $teacherdata->pin;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>State</label>
                                    <input type="text" name="state" value="<?php if(!empty($teacherdata)){echo $teacherdata->state;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" value="<?php if(!empty($teacherdata)){echo $teacherdata->country;} ?>" placeholder="" class="form-control">
                                </div>

                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Employee Qualification</label>
                                    <input type="text" name="employee_qualification" value="<?php if(!empty($teacherdata)){echo $teacherdata->employee_qualification;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Blood Group</label>
                                    <input type="text" name="blood_group" value="<?php if(!empty($teacherdata)){echo $teacherdata->blood_group;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Enter Emp Id Prefix Text</label>
                                    <input type="text" name="emp_id_prefix_text" value="<?php if(!empty($teacherdata)){echo $teacherdata->emp_id_prefix;}?>" placeholder="" class="form-control">
                                </div>

                            </div>
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Personal Details:</h3>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label class="text-dark-medium">Employee Photo</label>
                                    <input type="file" name="employee_photo" class="form-control-file">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label class="text-dark-medium">Experience Letter</label>
                                    <input type="file" name="experience_letter" class="form-control-file">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label class="text-dark-medium">Qualification Proof</label>
                                    <input type="file" name="qualification_proof" class="form-control-file">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label class="text-dark-medium">Id Proof</label>
                                    <input type="file" name="id_proof" class="form-control-file">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label class="text-dark-medium">Other Document 1</label>
                                    <input type="file" name="other_document1" class="form-control-file">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label class="text-dark-medium">Other Document 2</label>
                                    <input type="file" name="other_document2" class="form-control-file">
                                </div>
                        </div>
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Document Details:</h3>
                            </div>
                        </div>
                           <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Joining</label>
                                    <input type="text" name="date_Of_joining" value="" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Rfid No.</label>
                                    <input type="text" name="rfid_no" value="<?php if(!empty($teacherdata)){echo $teacherdata->rfid_no;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Categories</label>
                                    <input type="text" name="categories" value="<?php if(!empty($teacherdata)){echo $teacherdata->categories;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Designation</label>
                                    <input type="text" name="designation" value="<?php if(!empty($teacherdata)){echo $teacherdata->designation;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Teaching Subject Preferred</label>
                                    <div class="form-control arheight">
                                        <div class="row">
                                        <?php
                                        $subjid="";
                                        $myData= $myModel->select_collage_all_subject($this->getSession('userid'));
                                        foreach($myData as $myuser):
                                            $subjid = $subjid.','.$myuser->id;
                                            ?>
                                            <div class="arreds">
                                                <?php 
                                                echo $myuser->subject_name_eng;
                                                if($myuser->category=="Practical") {echo " (P)";}
                                                ?>
                                                <!-- <i class="fas fa-times-circle ardclose" style=""></i> -->
                                            </div>
                                            <?php
                                        endforeach;
                                        $subjid=substr($subjid, 1);
                                        ?>
                                        </div>
                                    </div>
                                    <input type="hidden" name="teaching_subject_preferred" value="<?php echo $subjid ?>"  class="form-control">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Teaching class Preferred</label>
                                    <div class="form-control arheight">
                                        <div class="row">
                                        <?php
                                        $classid="";
                                        $myData= $myModel->select_class($this->getSession('userid'));
                                        foreach($myData as $myuser):
                                            ?>
                                            <div class="arreds">
                                                <?php 
                                                $classid=$classid.','.$myuser->id;
                                                echo $myuser->name;
                                                ?>
                                                <!-- <i class="fas fa-times-circle ardclose" style=""></i> -->
                                            </div>
                                            <?php
                                        endforeach;
                                        $classid=substr($classid, 1);
                                        ?>
                                        </div>
                                    </div>
                                    <input type="hidden" name="teaching_class_preferred" value="<?php echo $classid ?>"  class="form-control">
                                </div>
                                
                            </div>
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Salary Details:</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pan Card No.</label>
                                    <input type="text" name="pan_card" value="<?php if(!empty($teacherdata)){echo $teacherdata->pan_card;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Aadhar No.</label>
                                    <input type="text" name="aadhar_no" value="<?php if(!empty($teacherdata)){echo $teacherdata->aadhar_no;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Bank Name</label>
                                    <input type="text" name="bank_name" value="<?php if(!empty($teacherdata)){echo $teacherdata->bank_name;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Bank Account No.</label>
                                    <input type="text" name="bank_account_no" value="<?php if(!empty($teacherdata)){echo $teacherdata->bank_account_no;} ?>" placeholder="" class="form-control">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Bank IFSC Code</label>
                                    <input type="text" name="bank_ifsc" value="<?php if(!empty($teacherdata)){echo $teacherdata->bank_ifsc;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Salary *</label>
                                    <input type="text" name="salary" value="<?php if(!empty($teacherdata)){echo $teacherdata->salary;}?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Other Wages</label>
                                    <input type="text" name="other_wages" value="<?php if(!empty($teacherdata)){echo $teacherdata->other_wages;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>PF No.</label>
                                    <input type="text" name="pf_no" value="<?php if(!empty($teacherdata)){echo $teacherdata->pf_no;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>PF Amount Monthly</label>
                                    <input type="text" name="pf_amount_monthly" value="<?php if(!empty($teacherdata)){echo $teacherdata->pf_amount_monthly;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>TDS Amount Monthly</label>
                                    <input type="text" name="tds_amount_monthly" value="<?php if(!empty($teacherdata)){echo $teacherdata->tds_amount_monthly;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>ESIC Amount Monthly</label>
                                    <input type="text" name="esic_amount_monthly" value="<?php if(!empty($teacherdata)){echo $teacherdata->esci_amount_monthly;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Professional TAX Amount Monthly</label>
                                    <input type="text" name="tax_amount_monthly" value="<?php if(!empty($teacherdata)){echo $teacherdata->professional_tax_amount_monthly;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>HRA Amount Monthly</label>
                                    <input type="text" name="hra_amount_monthly" value="<?php if(!empty($teacherdata)){echo $teacherdata->hra_amount_monthly;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>DA Amount Monthly</label>
                                    <input type="text" name="da_amount_monthly" value="<?php if(!empty($teacherdata)){echo $teacherdata->da_amount_monthly;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Allowances Monthly</label>
                                    <input type="text" name="allowances_monthly" value="<?php if(!empty($teacherdata)){echo $teacherdata->allowances_monthly;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Remark</label>
                                    <input type="text" name="remark" value="<?php if(!empty($teacherdata)){echo $teacherdata->remark;} ?>" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Leave Details:</h3>
                            </div>
                        </div>
                           <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Casual Leave</label>
                                    <input type="text" name="casual_leave" value="" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Pay/Earn Leave</label>
                                    <input type="text" name="earn_leave" value="<?php if(!empty($teacherdata)){echo $teacherdata->earn_leave;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Sick Leave</label>
                                    <input type="text" name="sick_leave" value="<?php if(!empty($teacherdata)){echo $teacherdata->sick_leave;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Other Leave</label>
                                    <input type="text" name="other_leave" value="<?php if(!empty($teacherdata)){echo $teacherdata->other_leave;} ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="button"  onclick="<?php  if(!empty($teacherdata)){echo "update()";}else{echo "submittchr()";}  ?>" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"><?php  if(!empty($teacherdata)){echo "Update";}else{echo "Register";}  ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->

                
                <!-- Footer Area Start Here -->
                <?php include "components/copyright.php"; ?>
                <!-- Footer Area End Here -->

</div>

<?php include "components/footer.php"; ?>

<script>
function submittchr(){
    $tname= $("input[name='employee_name']");
    $sms= $("input[name='sms_contact_no']");
    if($sms.val()==""){$($sms).css("border","1px solid red").focus();}
    else{$($sms).css("border","none");}

    if($tname.val()==""){$($tname).css("border","1px solid red").focus();}
    else{$($tname).css("border","none");}

    if($tname.val()!="" && $sms.val()!=""){
        $.ajax({
            url: "<?php echo BASEURL.'/staff/save_employee_data' ?>", 
            type: "POST",
            data: $("#form1").serialize(),
            beforeSend:function(){$("#loadingProgressG").show();},
            success: function(result){
               // alert(result);
                if(result=="Sucess"){
                    $(".alert-success").show().html("Sucessfully record employee.");
                }
                else if(result=="fail"){
                    $(".alert-danger").show().html("fail employee record not successfully.");
                }
                else{
                    $(".alert-danger").show().html("Teacher already registerd.");
                }
               
            }
        });
    }
}
function update() {
    $tname= $("input[name='employee_name']");
    $sms= $("input[name='sms_contact_no']");
    if($sms.val()==""){$($sms).css("border","1px solid red").focus();}
    else{$($sms).css("border","none");}

    if($tname.val()==""){$($tname).css("border","1px solid red").focus();}
    else{$($tname).css("border","none");}

    if($tname.val()!="" && $sms.val()!=""){
        $.ajax({
            url: "<?php echo BASEURL.'/staff/update_employee' ?>", 
            type: "POST",
            data: $("#form1").serialize(),
            beforeSend:function(){$("#loadingProgressG").show();},
            success: function(result){
               //alert(result);
                if(result=="Sucess"){
                    $(".alert-success").show().html("Teacher Sucessfully Updated.");
                }
                else if(result=="fail"){
                    $(".alert-danger").show().html("Somthing Worng");
                }
                $(window).scrollTop(0);
            }
        });
    }

}
</script>

