<?php
class attendance extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("credential");
        }
        $this->helper("link");
    }
    public function index(){
        $myModel=$this->model("userModel");
        $this->view2("attendance/dashboard",$myModel);
    }
    
    public function student_attend(){
        $myModel=$this->model("userModel");
        $this->view2("attendance/student_attend",$myModel);
    }
    public function class_attend($class,$type){
        $myModel=$this->model("userModel");
        $this->view2("attendance/class_attend",$myModel,['class'=>$class,'type'=>$type]);
    }
    public function students_attendence($class,$type){
        $myModel=$this->model("userModel");
        $this->view2("attendance/student_attendence",$myModel,['class'=>$class,'type'=>$type]);
    }
    function studentlist(){
        $myModel=$this->model("userModel");
        $this->view2("ajax/allsubjects",$myModel,['wid'=>"16",'clasid'=>$this->input('clasid'),'status'=>$this->input('status'),'month'=>$this->input('month'),'year'=>$this->input('year')]);
    }
    function studentlisttoday(){
        $myModel=$this->model("userModel");
        $this->view2("ajax/allsubjects",$myModel,['wid'=>"26",'clasid'=>$this->input('clasid'),'status'=>$this->input('status'),'month'=>$this->input('month'),'year'=>$this->input('year')]);
    }
    function studentlistdaily(){
        $myModel=$this->model("userModel");
        $this->view2("ajax/allsubjects",$myModel,['wid'=>"33",'clasid'=>$this->input('clasid'),'status'=>$this->input('status'),'month'=>$this->input('month'),'year'=>$this->input('year')]);
    }

    function student_month_atendence(){
        $myModel=$this->model("userModel");
        $this->view2("ajax/allsubjects",$myModel,['wid'=>"16",'clasid'=>$this->input('clasid'),'status'=>$this->input('status'),'month'=>$this->input('month'),'year'=>$this->input('year')]);
    }
    public function view_student_attend($clasid,$studentid){
        $myModel=$this->model("userModel");
        $this->view2("attendance/view_student_attend",$myModel,[$clasid,$studentid]);
    }
    public function classwise(){
        $myModel=$this->model("userModel");
        $this->view2("attendance/classwise",$myModel);
    }
    public function studentwise(){
        $myModel=$this->model("userModel");
        $this->view2("attendance/studentwise",$myModel);
    }


}

?>