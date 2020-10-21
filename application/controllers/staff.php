<?php
class staff extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("credential");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("staff/dashboard");
    }
    public function add_employee($id){
        $myModel=$this->model("userModel");
        $this->view2("staff/add_employee",$myModel,[$id]);
    }
    public function employee_list(){
        $myModel=$this->model("userModel");
        $this->view2("staff/employee_list",$myModel);
    }
    public function dropped(){
        $myModel=$this->model("userModel");
        $this->view2("staff/dropped",$myModel);
    }
    public function save_employee_data(){
        if(!isset($_POST["employee_name"])){$this->redirect("staff/add_employee");}
        $userData=[
            'employee_name'               =>$this->input('employee_name'),
            'gender'                      =>$this->input('gender'),
            'date_Of_birth'               =>$this->input('date_Of_birth'),
            'father_name'                 =>$this->input('father_name'),
            'email'                       =>$this->input('email'),
            'sms_contact_no'              =>$this->input('sms_contact_no'),
            'contact_no'                  =>$this->input('contact_no'),
            'address'                     =>$this->input('address'),
            'city'                        =>$this->input('city'),
            'pin'                         =>$this->input('pin'),
            'state'                       =>$this->input('state'),
            'country'                     =>$this->input('country'),
            'employee_qualification'      =>$this->input('employee_qualification'),
            'blood_group'                 =>$this->input('blood_group'),
            'emp_id_prefix_text'          =>$this->input('emp_id_prefix_text'),
            // 'employee_photo'              =>$this->input('employee_photo'),
            // 'experience_letter'           =>$this->input('experience_letter'),
            // 'qualification_proof'         =>$this->input('qualification_proof'),
            // 'id_proof'                    =>$this->input('id_proof'),
            // 'other_document1'             =>$this->input('other_document1'),
            // 'other_document2'             =>$this->input('other_document2'),
            'employee_photo'              =>'',
            'experience_letter'           =>'',
            'qualification_proof'         =>'',
            'id_proof'                    =>'',
            'other_document1'             =>'',
            'other_document2'             =>'',
            'date_Of_joining'             =>$this->input('date_Of_joining'),
            'rfid_no'                     =>$this->input('rfid_no'),
            'categories'                  =>$this->input('categories'),
            'teaching_class_preferred'    =>$this->input('teaching_class_preferred'),
            'teaching_subject_preferred'  =>$this->input('teaching_subject_preferred'),
            'designation'                 =>$this->input('designation'),
            'pan_card'                    =>$this->input('pan_card'),
            'aadhar_no'                   =>$this->input('aadhar_no'),
            'bank_name'                   =>$this->input('bank_name'),
            'bank_account_no'             =>$this->input('bank_account_no'),
            'bank_ifsc'                   =>$this->input('bank_ifsc'),
            'salary'                      =>$this->input('salary'),
            'other_wages'                 =>$this->input('other_wages'),
            'pf_no'                       =>$this->input('pf_no'),
            'pf_amount_monthly'           =>$this->input('pf_amount_monthly'),
            'tds_amount_monthly'          =>$this->input('tds_amount_monthly'),
            'esic_amount_monthly'         =>$this->input('esic_amount_monthly'),
            'tax_amount_monthly'          =>$this->input('tax_amount_monthly'),
            'hra_amount_monthly'          =>$this->input('hra_amount_monthly'),
            'da_amount_monthly'           =>$this->input('da_amount_monthly'),
            'allowances_monthly'          =>$this->input('allowances_monthly'),
            'remark'                      =>$this->input('remark'),
            'casual_leave'                =>$this->input('casual_leave'),
            'earn_leave'                  =>$this->input('earn_leave'),
            'sick_leave'                  =>$this->input('sick_leave'),
            'other_leave'                 =>$this->input('other_leave'),
            'employee_name_error'         =>'',
            'sms_contact_no_error'        =>'',
            'contact_no_error'            =>''
        ];
      //  var_dump($userData); die;
        if(empty($userData['employee_name'])){
            $userData['employee_name_error']="Employee Name is required";
        }
        if(empty($userData['sms_contact_no'])){
            $userData['sms_contact_no_error']="SMS Contact no. is required";
        }
        if(empty($userData['contact_no'])){
            $userData['contact_no_error']="Contact no. is required";
        }
        
        $myModel=$this->model("userModel");

        if(!$myModel->check_employee($userData['sms_contact_no'])){
            echo "allready registerd";
        }
        else{
            $password=password_hash("54321",PASSWORD_DEFAULT);
            $data=[$this->getSession('userid'),$userData['employee_name'],$userData['gender'],$userData['date_Of_birth'],$userData['father_name'],$userData['email'],$userData['sms_contact_no'],$userData['contact_no'],$userData['address'],$userData['city'],$userData['pin'],$userData['state'],$userData['country'],$userData['employee_qualification'],$userData['blood_group'],$userData['emp_id_prefix_text'],$userData['employee_photo'],$userData['experience_letter'],$userData['qualification_proof'],$userData['id_proof'],$userData['other_document1'],$userData['other_document2'],$userData['date_Of_joining'],$userData['rfid_no'],$userData['categories'],$userData['teaching_class_preferred'],$userData['teaching_subject_preferred'],$userData['designation'],$userData['pan_card'],$userData['aadhar_no'],$userData['bank_name'],$userData['bank_account_no'],$userData['bank_ifsc'],$userData['salary'],$userData['other_wages'],$userData['pf_no'],$userData['pf_amount_monthly'],$userData['tds_amount_monthly'],$userData['esic_amount_monthly'],$userData['tax_amount_monthly'],$userData['hra_amount_monthly'],$userData['da_amount_monthly'],$userData['allowances_monthly'],$userData['remark'],$userData['casual_leave'],$userData['earn_leave'],$userData['sick_leave'],$userData['other_leave'],"Active"];
            
            $myData= $myModel->save_employee_data($data);
            if($myData){
                echo "Sucess";
            }
            else{
                echo "fail";
            }
        }
    }
    public function delete_employee(){
        $myModel=$this->model("userModel");
        $myData=$myModel->delete_employee_record([$this->input('id')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['wid'=>"32"]);
        }
        else{echo "Error";}
    }
    public function update_employee(){
        $userData=[
            'id'                          =>$this->input('id'),
            'employee_name'               =>$this->input('employee_name'),
            'gender'                      =>$this->input('gender'),
            'date_Of_birth'               =>$this->input('date_Of_birth'),
            'father_name'                 =>$this->input('father_name'),
            'email'                       =>$this->input('email'),
            'sms_contact_no'              =>$this->input('sms_contact_no'),
            'contact_no'                  =>$this->input('contact_no'),
            'address'                     =>$this->input('address'),
            'city'                        =>$this->input('city'),
            'pin'                         =>$this->input('pin'),
            'state'                       =>$this->input('state'),
            'country'                     =>$this->input('country'),
            'employee_qualification'      =>$this->input('employee_qualification'),
            'blood_group'                 =>$this->input('blood_group'),
            'emp_id_prefix_text'          =>$this->input('emp_id_prefix_text'),
            'employee_photo'              =>'',
            'experience_letter'           =>'',
            'qualification_proof'         =>'',
            'id_proof'                    =>'',
            'other_document1'             =>'',
            'other_document2'             =>'',
            'date_Of_joining'             =>$this->input('date_Of_joining'),
            'rfid_no'                     =>$this->input('rfid_no'),
            'categories'                  =>$this->input('categories'),
            'teaching_class_preferred'    =>$this->input('teaching_class_preferred'),
            'teaching_subject_preferred'  =>$this->input('teaching_subject_preferred'),
            'designation'                 =>$this->input('designation'),
            'pan_card'                    =>$this->input('pan_card'),
            'aadhar_no'                   =>$this->input('aadhar_no'),
            'bank_name'                   =>$this->input('bank_name'),
            'bank_account_no'             =>$this->input('bank_account_no'),
            'bank_ifsc'                   =>$this->input('bank_ifsc'),
            'salary'                      =>$this->input('salary'),
            'other_wages'                 =>$this->input('other_wages'),
            'pf_no'                       =>$this->input('pf_no'),
            'pf_amount_monthly'           =>$this->input('pf_amount_monthly'),
            'tds_amount_monthly'          =>$this->input('tds_amount_monthly'),
            'esic_amount_monthly'         =>$this->input('esic_amount_monthly'),
            'tax_amount_monthly'          =>$this->input('tax_amount_monthly'),
            'hra_amount_monthly'          =>$this->input('hra_amount_monthly'),
            'da_amount_monthly'           =>$this->input('da_amount_monthly'),
            'allowances_monthly'          =>$this->input('allowances_monthly'),
            'remark'                      =>$this->input('remark'),
            'casual_leave'                =>$this->input('casual_leave'),
            'earn_leave'                  =>$this->input('earn_leave'),
            'sick_leave'                  =>$this->input('sick_leave'),
            'other_leave'                 =>$this->input('other_leave')
        ];

        //echo $userData['id'];
        //echo $userData['employee_name'];

        $myModel=$this->model("userModel");
        $myData = $myModel->employee_updates([$userData['employee_name'],$userData['father_name'],$userData['id']]);
        if($myData){
            echo "Sucess";
        }
        else{
            echo "fail";
        }



        // $myModel=$this->model("userModel");
        // $id=$_POST['id'];
        // $employe=$_POST['employee_name'];
        // $smscontact=$_POST['sms_contact_no'];
        // $designat=$_POST['designation'];
        // $pinno=$_POST['pin'];
        // for($i=0;$i<sizeof($id);$i++){
        //     $myModel->employee_updates([$$employe[$i],$smscontact[$i],$designat[$i],$pinno[$i],$id[$i]]);
        // }
    }
}
?>