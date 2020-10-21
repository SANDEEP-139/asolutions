<?php include "components/header.php";?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <div class="col-12-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body arcrdbody">
                    <form class="new-added-form" id="form1">
                        <div class="row">
                        <div class="col-xl-7 col-lg-6 col-12 form-group <?php if($viewdata[0]=="0"){echo "d-none";} ?>">
                           <h3 class="arm0 font-bold"><?php if($viewdata[0]=="1"){echo "Ledger Daily Report";}else if($viewdata[0]=="2"){echo "Ledger Monthly Report";}else{echo "Advance Salary Ledger";} ?></h3>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group <?php if($viewdata[0]!="0"){echo "d-none";} ?>">
                                <div  class="form-control">
                                    <label class="float-left mt-3" for="Student"><input type="radio" id="Student" name="usertype" value="Student" <?php if($viewdata[0]=="0"){echo "checked";}?>> Student</label>
                                    <label class="float-left mt-3 ml-3" for="Staff"><input type="radio" id="Staff" name="usertype" value="Staff"> Staff</label>
                                    <label class="float-left mt-3 ml-3" for="Other"><input type="radio" id="Other" name="usertype" value="Other"> Other</label>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-12 form-group <?php if($viewdata[0]=="2"){echo "d-none";} ?>">
                                <div id="reportrange" class="form-control">
                                    <i class="far fa-calendar-alt arleft"></i>&nbsp;
                                    <span class="selecteddate"></span> 
                                    <i class="fa fa-caret-down  artop"></i>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-6 col-12 form-group <?php if($viewdata[0]!="0"){echo "d-none";} ?>">
                                <select class="select2" name="account">
                                    <option value="0">All Account</option>
                                    <?php 
                                    $clsaa_id="";
                                    $myData= $myModel->select_collage_account([$this->getSession('userid')]);
                                    if(!empty($myData)){
                                        foreach($myData as $myuser):
                                            echo '<option value="'.$myuser->account_number.'">'.$myuser->account_number.'</option>';
                                        endforeach;
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group <?php if($viewdata[0]!="2"){echo "d-none";} ?>">
                                <select class="select2" name="month" id="month">
                                    <option value="0">All Month</option>
                                    <?php 
                                        $monthArray = range(0, 11);
                                        $finyer= explode("-", finacial_year);
                                        foreach ($monthArray as $month) {
                                            if($month<6){$yer=$finyer[0];}else{$yer=$finyer[1];}
                                            $fdate = month_list[$month];
                                            $tdays = cal_days_in_month(CAL_GREGORIAN,date('n',strtotime($fdate)),$yer);
                                            echo '<option value="'.$yer.'-'. date('n',strtotime($fdate)).'-1,'.$yer.'-'. date('n',strtotime($fdate)).'-'.$tdays.'" >'.$fdate.'</option>';
                                            if($fdate==cu_month_name){break;}
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-12 form-group <?php if($viewdata[0]!="2"){echo "d-none";} ?>">
                                <select class="select2" name="month" disabled>
                                    <option value="0">2020 - 2021</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group <?php if($viewdata[0]!="0"){echo "d-none";} ?>" id="classes">
                                <select class="select2" name="class" id="classtype">
                                    <option value="0">All Class</option>
                                    <?php 
                                    $myData= $myModel->select_class($this->getSession('userid'));
                                    foreach($myData as $myuser):
                                        echo '<option value="'.$myuser->id.'">'.$myuser->name.'</option>';
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group <?php if($viewdata[0]!="0"){echo "d-none";} ?>" id="students">
                                <select class="select2" name="student" id="stulist">
                                    <option value="0">All Students</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group d-none" id="staffdada">
                                <select class="select2" name="staff">
                                    <option value="0">All Staff</option>
                                    <?php 
                                    $data= $myModel->select_teacher($this->getSession('userid'));
                                    foreach($data as $user):
                                    ?>
                                    <option value="<?php echo $user->id ?>"><?php echo $user->employee_name; ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group <?php if($viewdata[0]!="0"){echo "d-none";} ?>">
                                <button type="button" onclick="search()" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12-xxxl col-12">  
            <div class="card height-auto">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-xl-7 col-lg-6 col-12 arhdng">
                           <h3 class="arm0">Income Expense Ledger</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table">
                            <thead>
                                <tr>
                                <th>Sr. No.</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th class="text-center">Bill File</th>
                                </tr>
                            </thead>
                            <tbody id="studentdata">
                            <?php
                                if($viewdata[0]=="3"){
                                    $this->view2("ajax/allsubjects",$myModel,['wid'=>"19",'search'=>"Advance",'type'=>"Advance"]);
                                }
                                else{$this->view2("ajax/allsubjects",$myModel,['wid'=>"19"]);}
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
$("#month").change(function(){
    search();
});
$("input[type=radio]").change(function(){
    if ($(this).is(':checked'))
    {
        $data=$(this).val();
        if($data=="Student"){
            $("#classes,#students").show();
            $("#staffdada").hide();
            
        }
        else if($data=="Staff"){
            $("#staffdada").show();
            $("#classes,#students").hide();
        }
        else{
            $("#classes,#students").hide();
            $("#staffdada").hide();
        }
    }
});
$("#classtype").change(function() {
    $.ajax({
        url: "<?php echo BASEURL.'/account/selectstudents/'?>", 
        type: "POST",
        beforeSend:function(){
            $("#loadingProgressG").show();
        },
        data: {clasid:$(this).val()},
        success: function(result){
            $("#stulist").html(result);
            $("#loadingProgressG").hide();
        }
    });
});
function search(){
    $.ajax({
        url: "<?php echo BASEURL.'/account/serchtransaction/'?>", 
        type: "POST",
        beforeSend:function(){
            $("#loadingProgressG").show();
        },
        data: $("#form1").serialize()+"&rengdate="+$(".selecteddate").html()+"&pgid="+<?php echo $viewdata[0]?>,
        success: function(result){
            //alert(result);
            $("#studentdata").html(result);
            $("#loadingProgressG").hide();
        }
    });
}
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript">
$c=0;
$(function() {
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        <?php 
        if($viewdata[0]=="1" || $viewdata[0]=="3"){
            ?>
            if($c==0){$c=1;}else{search();}
            <?php
        }
        ?>
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>