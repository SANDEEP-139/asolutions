

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>Enquiry Management</h3>
    </div>
    <?php print_r($this->flash("msg","alert alert-danger"));  ?>
    <?php print_r($this->flash("msgsuc","alert alert-success"));  ?>
    <!-- Breadcubs Area End Here -->

                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Enquiry Form</h3>
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
                        <form class="new-added-form"  action="<?php echo BASEURL; ?>/enquiry/save_new_enquiry" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($viewdata['enquirytype_error'])): echo 'class="text-red"' ;endif; ?>>Enquir Type *</label>
                                    <select class="select2" name="enquirytype">
                                        <option value="0">Enquir Type *</option>
                                        <option value="" >Enquir Type</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($viewdata['date_error'])): echo 'class="text-red"' ;endif; ?>>Date *</label>
                                    <input type="text" name="date" value="<?php if(!empty($viewdata['date'])): echo $viewdata['date'] ;endif; ?>" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label  <?php if(!empty($viewdata['student_name_error'])): echo 'class="text-red"' ;endif; ?>>Student Name *</label>
                                    <input type="text" name="student_name" value="<?php if(!empty($viewdata['student_name'])): echo $viewdata['student_name'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($viewdata['fathers_name_error'])): echo 'class="text-red"' ;endif; ?>>Father's Name *</label>
                                    <input type="text" name="fathers_name" value="<?php if(!empty($viewdata['fathers_name'])): echo $viewdata['fathers_name'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($viewdata['father_contact1_error'])): echo 'class="text-red"' ;endif; ?>>Father's Contact No1. *</label>
                                    <input type="text" name="father_contact1" value="<?php if(!empty($viewdata['father_contact1'])): echo $viewdata['father_contact1'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Father's Contact No2.</label>
                                    <input type="text" name="father_contact2" value="<?php if(!empty($viewdata['father_contact2'])): echo $viewdata['father_contact2'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($viewdata['next_follow_error'])): echo 'class="text-red"' ;endif; ?>>Next Follow Up Date *</label>
                                    <input type="text" name="nextfollow" value="<?php if(!empty($viewdata['nextfollow'])): echo $viewdata['nextfollow'] ;endif; ?>" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Remark 1</label>
                                    <input type="text" name="remark1" value="<?php if(!empty($viewdata['remark1'])): echo $viewdata['remark1'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Remark 2</label>
                                    <input type="text" name="remark2" value="<?php if(!empty($viewdata['remark2'])): echo $viewdata['remark2'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
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

