<?php
class account extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("account/dashboard");
    }
    public function dues(){
        $myModel=$this->model("userModel");
        $this->view2("account/dues",$myModel);
    }
    public function class_wise_dues($class_id){
        $myModel=$this->model("userModel");
        $this->view2("account/class_wise_dues",$myModel,[$class_id]);
    }
    public function fees(){
        $this->view("account/fees");
    }
    public function penalty(){
        $this->view("account/penalty");
    }
    public function add_bank(){
        $this->view("account/add_bank");
    }
    public function account_list(){
        $myModel=$this->model("userModel");
        $this->view2("account/account_list",$myModel);
    }
    public function add_income(){
        $myModel=$this->model("userModel");
        $this->view2("account/add_income",$myModel);
    }
    public function add_expense(){
        $myModel=$this->model("userModel");
        $this->view2("account/add_expense",$myModel);
    }
    public function income_expense_list(){
        $myModel=$this->model("userModel");
        $this->view2("account/income_expense_list",$myModel);
    }
    public function ledger_info(){
        $myModel=$this->model("userModel");
        $this->view2("account/ledger_info",$myModel);
    }
    public function ledger_report_daily($select){
        if($select>3){$this->redirect("");}
        $myModel=$this->model("userModel");
        $this->view2("account/ledger_report_daily",$myModel,[$select]);
    }
    public function ledger_report_monthly(){
        $myModel=$this->model("userModel");
        $this->view2("account/ledger_report_monthly",$myModel);
    }
    public function income_expense_report(){
        $myModel=$this->model("userModel");
        $this->view2("account/income_expense_report",$myModel);
    }
    public function advance_salary(){
        $myModel=$this->model("userModel");
        $this->view2("account/advance_salary",$myModel);
    }
    public function reset_month(){
        $myModel=$this->model("userModel");
        $this->view2("account/reset_month",$myModel);
    }
    public function dues_details(){
        $myModel=$this->model("userModel");
        $this->view2("account/dues_details",$myModel);
    }
    public function fees_structure(){
        $myModel=$this->model("userModel");
        $this->view2("account/fees_structure",$myModel);
    }
    public function set_fee(){
        $myModel=$this->model("userModel");
        $this->view2("account/set_fee",$myModel);
    }
    public function classwise_fee(){
        $myModel=$this->model("userModel");
        $this->view2("account/classwise_fee",$myModel);
    }
    public function transport_fee(){
        $myModel=$this->model("userModel");
        $this->view2("account/transport_fee",$myModel);
    }
    public function previous_dues(){
        $myModel=$this->model("userModel");
        $this->view2("account/previous_dues",$myModel);
    }
    public function pay_fee(){
        $myModel=$this->model("userModel");
        $this->view2("account/pay_fee",$myModel);
    }
    public function fee_details(){
        $myModel=$this->model("userModel");
        $this->view2("account/fee_details",$myModel);
    }
    public function fee_details_rfid(){
        $myModel=$this->model("userModel");
        $this->view2("account/fee_details_rfid",$myModel);
    }
    public function dues_list_sms(){
        $myModel=$this->model("userModel");
        $this->view2("account/dues_list_sms",$myModel);
    }
    public function demand_bill(){
        $myModel=$this->model("userModel");
        $this->view2("account/demand_bill",$myModel);
    }
    public function balance_details(){
        $myModel=$this->model("userModel");
        $this->view2("account/balance_details",$myModel);
    }
    public function balance_details_from_to(){
        $myModel=$this->model("userModel");
        $this->view2("account/balance_details_from_to",$myModel);
    }
    public function only_balance_report(){
        $myModel=$this->model("userModel");
        $this->view2("account/only_balance_report",$myModel);
    }
    public function penalty_form(){
        $myModel=$this->model("userModel");
        $this->view2("account/penalty_form",$myModel);
    }
    public function penalty_list(){
        $myModel=$this->model("userModel");
        $this->view2("account/penalty_list",$myModel);
    }
    public function save_bank(){
        if(!isset($_POST["opning_balance"])){$this->redirect("account/add_bank");}
        if($this->input('opning_balance')==""){$balce="0.00";}else{$balce=$this->input('opning_balance');}
        $userData=[
            'holder_name'                 =>$this->input('holder_name'),
            'account_number'              =>$this->input('account_number'),
            'bank_name'                   =>$this->input('bank_name'),
            'opning_balance'              =>$balce,
            'branch_name'                 =>$this->input('branch_name'),
            'ifsc_code'                   =>$this->input('ifsc_code'),
            'holder_name_error'           =>'',
            'account_number_error'        =>'',
            'bank_name_error'             =>''
        ];
        if(empty($userData['holder_name'])){
            $userData['holder_name_error']="Student Name is required";
        }
        if(empty($userData['account_number'])){
            $userData['account_number_error']="Student Name is required";
        }
        if(empty($userData['bank_name'])){
            $userData['bank_name_error']="Student Name is required";
        }
        $myModel=$this->model("userModel");
        if(empty($userData['holder_name_error']) && empty($userData['account_number_error']) && empty($userData['bank_name_error'])){
            $data=[$this->getSession('userid'),$userData['holder_name'],$userData['account_number'],$userData['bank_name'],$userData['opning_balance'],$userData['opning_balance'],$userData['branch_name'],$userData['ifsc_code']];
            $myData= $myModel->save_collage_account($data);
            if($myData){
                $this->setFlash("msgsuc","You have succesfully registerd!");
                $this->redirect("account/add_bank");
            }
            else{
                $this->setFlash("msg","Somthing worng!".$myData);
                $this->redirect("account/add_bank");
            }
        }
        else{
            $this->setFlash("msg","Please fill all requerd field!");
            $this->view2("account/add_bank",$myModel,$userData);
        }
    }
    public function delete_bank(){
        $myModel=$this->model("userModel");
        $myData=$myModel->delete_collage_bank([$this->input('id')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['wid'=>"18"]);
        }
        else{echo "Error";}
    }
    public function save_transaction(){
        if(!isset($_POST["party"])){$this->redirect("account/add_income");}
        $pertion_type = $this->input('party');
        if($pertion_type=="Student"){
            $payfor=$this->input('reasen');
            $prn_nme=explode(',', $this->input('studntnme'))[7];
            $prtn_id=explode(',', $this->input('studntnme'))[0];
        }
        else if($pertion_type=="Staff"){
            $payfor=$this->input('pay_for');
            $prn_nme=$this->input('tecrname');
            $prtn_id=explode(',', $this->input('tecrname'))[0];
        }
        else{$payfor="";$prtn_id="";$prn_nme=$this->input('pertn_name');}
        
        $userData=[
            'pertion_id'                 =>$prtn_id,
            'pertion_type'               =>$pertion_type,
            'pertion_name'               =>$prn_nme,
            'office_account'             =>$this->input('office_account'),
            'payment_for'                =>$payfor,
            'address'                    =>$this->input('address'),
            'contact'                    =>$this->input('contact'),
            'amount'                     =>$this->input('amount'),
            'pay_date'                   =>explode('/', $this->input('pay_date'))[2]."-".explode('/', $this->input('pay_date'))[1]."-".explode('/', $this->input('pay_date'))[0],
            'payment_mode'               =>$this->input('payment_mode'),
            'bank_name'                  =>$this->input('bank_name'),
            'account_number'             =>$this->input('account_number'),
            'check_number'               =>$this->input('check_number'),
            'remark'                     =>$this->input('remark'),
            'bill_imge'                  =>"",
            'payment_type'               =>$this->input('payment_type')
        ];
        $myModel=$this->model("userModel");
        $data=[$this->getSession('userid'),$userData['pertion_id'],$userData['pertion_type'],$userData['pertion_name'],$userData['office_account'],$userData['payment_for'],$userData['address'],$userData['contact'],$userData['amount'],$userData['pay_date'],$userData['payment_mode'],$userData['bank_name'],$userData['account_number'],$userData['check_number'],$userData['remark'],$userData['bill_imge'],$userData['payment_type']];
        $myData= $myModel->save_transaction($data);
        if($myData){
            echo "Succesfull";
        }
        else{
            echo "Failed";
        }

        //echo $this->input('studntnme');
    }
    public function save_penality(){
        $myModel=$this->model("userModel");
        $prtn_id=explode(',', $this->input('studntnme'))[0];
        $prtn_name=explode(',', $this->input('studntnme'))[2];
        $address=explode(',', $this->input('studntnme'))[4];
        $contact=explode(',', $this->input('studntnme'))[5];
        $usrid=explode(',', $this->input('studntnme'))[6];
        $amnt=$this->input('amnt');

        $data=[$this->getSession('userid'),$prtn_id,"Student",$prtn_name,"","Penality",$address,$contact,$amnt,"12/07/2020","Penality","","","",$this->input('reasen'),"","Initiate"];
        $myData=$myModel->save_transaction($data);
        $myModel->update_balence("student_fee","other_fee",$amnt,$usrid);
        if($myData){
            echo "Succesfull";
        }
        else{
            echo "Failed ".$usrid;
        }
    }
    
    public function selectstudents(){
        $myModel=$this->model("userModel");
        echo $this->view2("ajax/allsubjects",$myModel,['wid'=>"27",'clasid'=>$this->input("clasid")]);
    }
    public function serchtransaction(){
        $cond="";
        $class=$this->input("class");
        if($this->input("pgid")!="2"){
            if($this->input("pgid")!="0"){$usertype="";}
            else{$usertype=$this->input("usertype");}
            $rengdate=$this->input("rengdate");
            $str_explode=explode("-",$rengdate);

            $fromdate = explode(",",$str_explode[0]);
            $daymnth=explode(" ",$fromdate[0]);

            $fromday= $daymnth[1];
            $frommonth= date("m", strtotime($daymnth[0]));
            $fromyear=trim($fromdate[1]," ");
            $finalfromdate=$fromyear."-".$frommonth."-".$fromday;


            $todate= explode(",",$str_explode[1]);
            $tomnth=explode(" ",trim($todate[0]," "));
            $today= $tomnth[1];
            $tomonth= date("m", strtotime($tomnth[0]));
            $toyear=trim($todate[1]," ");
            $finaltodate= $toyear."-".$tomonth."-".$today;

            $account=$this->input("account");
            //$students=$this->input("student");
            $students="0";
            $staff=$this->input("staff");
        
            if(!empty($usertype)){
                $cond = " and pertion_type='".$usertype."'";
            }
            if(!empty($finalfromdate) && !empty($finaltodate)){
                if($this->input("pgid")=="3"){
                    $cond = $cond ." and payment_type='Advance' and pay_date BETWEEN '".$finalfromdate."' AND '".$finaltodate."'";
                }
                else{
                    $cond = $cond ." and pay_date BETWEEN '".$finalfromdate."' AND '".$finaltodate."'";
                }
            }
            if($account!="0"){
                $cond = $cond ." and office_account='".$account."'";
            }
            if($class!="0"){
                $cond = $cond ." and (collage_class.id)='".$class."'";
            }
            if($students!="0"){
                $cond = $cond ." and pertion_id='".$students."'";
            }
            if($staff!="0"){
                $cond = $cond ." and pertion_id='".$staff."'";
            }
        }
        else{
            $month=$this->input("month");
            if($month!="0"){
                $str_explode=explode(",",$month);
                $cond = $cond ." and pay_date BETWEEN '".$str_explode[0]."' AND '".$str_explode[1]."'";
            }
        }
        if($class=="0"){
            $query="SELECT * FROM transaction where collage_id='".$this->getSession('userid')."' and payment_type!='Initiate' ".$cond;
        }
        else{
            $query="SELECT * FROM transaction INNER JOIN collage_class ON transaction.collage_id=collage_class.collage_id WHERE  transaction.collage_id='".$this->getSession('userid')."' and payment_type!='Initiate' ".$cond;
        }
        //echo $query;
        $myModel=$this->model("userModel");
        echo $this->view2("ajax/allsubjects",$myModel,['wid'=>"19",'search'=>"Select",'query'=>$query]);
    }
    
}
?>