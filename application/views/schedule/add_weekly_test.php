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
                                <h3>Add Weekly Test</h3>
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
                                    <label  <?php if(!empty($viewdata['student_name_error'])): echo 'class="text-red"' ;endif; ?>>Test Name</label>
                                    <input type="text" name="student_name" value="<?php if(!empty($viewdata['student_name'])): echo $viewdata['student_name'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>From Date</label>
                                    <input type="text" name="date_of_birth" value="" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>To Date</label>
                                    <input type="text" name="date_of_birth" value="" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class</label>
                                    <select class="select2">
                                        <option value="1">Select Student</option>
                                        <option value="2">Unregular</option>
                                        <option value="2">Regular + Unregular</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Section</label>
                                    <select class="select2">
                                        <option value="1">Select Student</option>
                                        <option value="2">Unregular</option>
                                        <option value="2">Regular + Unregular</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label  <?php if(!empty($viewdata['student_name_error'])): echo 'class="text-red"' ;endif; ?>>Description</label>
                                    <input type="text" name="student_name" value="<?php if(!empty($viewdata['student_name'])): echo $viewdata['student_name'] ;endif; ?>" placeholder="" class="form-control">
                                </div>
                                
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
    

</div>
<?php include "components/footer.php"; ?>