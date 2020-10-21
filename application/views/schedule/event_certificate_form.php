<?php include "components/header.php"; ?>
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area aeroheader2">
                    <h3>Event Certificate Form</h3>
                </div>
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Event Certificate Form</h3>
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
                                    <label>Search Student</label>
                                    <select class="select2">
                                        <option value="1">Select Student</option>
                                        <option value="2">Unregular</option>
                                        <option value="2">Regular + Unregular</option>
                                    </select>
                                </div>
                        </div>
                            <div class="row">
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label  <?php if(!empty($viewdata['student_name_error'])): echo 'class="text-red"' ;endif; ?>>Student Name</label>
                                    <input type="text" name="student_name" value="<?php if(!empty($viewdata['student_name'])): echo $viewdata['student_name'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label  <?php if(!empty($viewdata['student_name_error'])): echo 'class="text-red"' ;endif; ?>>Student Roll No.</label>
                                    <input type="text" name="student_name" value="<?php if(!empty($viewdata['student_name'])): echo $viewdata['student_name'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($viewdata['fathers_name_error'])): echo 'class="text-red"' ;endif; ?>>Class</label>
                                    <input type="text" name="fathers_name" value="<?php if(!empty($viewdata['fathers_name'])): echo $viewdata['fathers_name'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label <?php if(!empty($viewdata['father_contact1_error'])): echo 'class="text-red"' ;endif; ?>>Event Type</label>
                                    <input type="text" name="father_contact1" value="<?php if(!empty($viewdata['father_contact1'])): echo $viewdata['father_contact1'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Rank</label>
                                    <input type="text" name="father_contact2" value="<?php if(!empty($viewdata['father_contact2'])): echo $viewdata['father_contact2'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">Organized Date</label>
                                    <input type="text" name="nextfollow" value="<?php if(!empty($viewdata['nextfollow'])): echo $viewdata['nextfollow'] ;endif; ?>" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>                     
                               <div class="col-12 form-group mg-t-8">
                                   <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
    

</div>
<?php include "components/footer.php"; ?>