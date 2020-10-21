<?php
class enquiry extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("credential");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("enquiry/dashboard");
    }
    public function new_enquiry(){
        $myModel=$this->model("userModel");
        $this->view2("enquiry/new_enquiry",$myModel);
    }
    public function enquiry_list(){
        $myModel=$this->model("userModel");
        $this->view2("enquiry/enquiry_list",$myModel);
    }
    public function enquiry_sms(){
        $myModel=$this->model("userModel");
        $this->view2("enquiry/enquiry_sms",$myModel);
    }
    public function save_new_enquiry(){
        if(!isset($_POST["student_name"])){$this->redirect("enquiry/new_enquiry");}
        $userData=[
            'enquirytype'             =>$this->input('enquirytype'),
            'date'                    =>$this->input('date'),
            'student_name'            =>$this->input('student_name'),
            'fathers_name'            =>$this->input('fathers_name'),
            'father_contact1'         =>$this->input('father_contact1'),
            'father_contact2'         =>$this->input('father_contact2'),
            'nextfollow'              =>$this->input('nextfollow'),
            'remark1'                 =>$this->input('remark1'),
            'remark2'                 =>$this->input('remark2'),
            'enquirytype_error'       =>'',
            'date_error'              =>'',
            'student_name_error'      =>'',
            'fathers_name_error'      =>'',
            'father_contact1_error'   =>'',
            'next_follow_error'       =>''
        ];
        if($userData['enquirytype']=="0"){
            $userData['enquirytype_error']="Enquiry_Type is required";
        }
        if(empty($userData['date'])){
            $userData['date_error']="Date is required";
        }
        if(empty($userData['student_name'])){
            $userData['student_name_error']="Date is required";
        }
        if(empty($userData['fathers_name'])){
            $userData['fathers_name_error']="Fathers's is required";
        }
        if(empty($userData['father_contact1'])){
            $userData['father_contact1_error']="Contact no. is required";
        }
        if(empty($userData['nextfollow'])){
            $userData['next_follow_error']="Follow is required";
        }
        $myModel=$this->model("userModel");
        if(empty($userData['enquirytype_error']) && empty($userData['date_error']) && empty($userData['student_name_error']) && empty($userData['fathers_name_error']) && empty($userData['father_contact1_error']) && empty($userData['next_follow_error']))
        {
            if(!$myModel->check_enquiry($this->getSession('userid'),$userData['student_name'],$userData['fathers_name'])){
                $this->setFlash("msg","Sorry this enquiry is allready exist!");
                $this->view2("enquiry/new_enquiry",$myModel,$userData);
            }
            else{
                $myData=[$this->getSession('userid'),$userData['enquirytype'],$userData['date'],$userData['student_name'],$userData['fathers_name'],$userData['father_contact1'],$userData['father_contact2'],$userData['nextfollow'],$userData['remark1'],$userData['remark2'],"Active"];
                $myData= $myModel->save_enquiry_data($myData);
                if($myData){
                    $this->setFlash("msgsuc","You have succesfully registerd!");
                    $this->redirect("enquiry/new_enquiry");
                }
                else{
                    $this->setFlash("msg","Somthing worng!".$myData);
                    $this->redirect("enquiry/new_enquiry");
                }
            }
        }
        else{
            $this->setFlash("msg","Please fill all requerd field!");
            $this->view2("enquiry/new_enquiry",$myModel,$userData);
        }
    }
}