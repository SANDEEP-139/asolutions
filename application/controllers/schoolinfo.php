<?php
class schoolinfo extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("credential");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("schoolinfo/dashboard");
    }
    
    public function general_info(){
        $this->view("schoolinfo/general_info");
    }
    public function class_section(){
        $myModel=$this->model("userModel");
        $myData= $myModel->select_class($this->getSession('userid'));
        $this->view("schoolinfo/class_section",$myData);
    }
    public function examination_type(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/examination_type",$myModel);
    }
    public function add_section(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/add_section",$myModel);
    }
    public function add_stream(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/add_stream",$myModel);
    }
    public function add_group(){
        $myModel=$this->model("userModel");
        $myData= $myModel->select_stream($this->getSession('userid'));
        $this->view("schoolinfo/add_group",$myData);
    }
    public function add_subject(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/add_subject",$myModel);
    }
    public function classwise_subject(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/classwise_subject",$myModel);
    }
    public function add_fee_type(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/add_fee_type",$myModel);
    }
    public function add_discount_type(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/add_discount_type",$myModel);
    }
    public function school_data(){
        $this->view("schoolinfo/school_data");
    }
    public function student_password(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/student_password",$myModel);
    }
    public function add_fee_category(){
        $myModel=$this->model("userModel");
        $this->view2("schoolinfo/add_fee_category",$myModel);
    }
    public function add_bus_fee_category(){
        $this->view("schoolinfo/add_bus_fee_category");
    }
    public function std_identity_category(){
        $this->view("schoolinfo/std_identity_category");
    }
    public function syllabus_details(){
        $this->view("schoolinfo/syllabus_details");
    }
    public function academic_calender(){
        $this->view("schoolinfo/academic_calender");
    }

    public function category_subject(){
        $myModel=$this->model("userModel");
        $this->view2("ajax/allsubjects",$myModel,['category'=>$this->input('category'),'wid'=>$this->input('wid'),'classid'=>$this->input('classid')]);
    }
    public function add_class_subject(){
        $myModel=$this->model("userModel");
        $myData= $myModel->asign_subjects([$this->getSession('userid'),$this->input('clsid'),$this->input('subid'),$this->input('subengname'),$this->input('subhndname'),$this->input('category')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['category'=>$this->input('clsid'),'wid'=>"2"]);
        }
        else{echo "Error";}
    }
    public function delete_class_subject(){
        $myModel=$this->model("userModel");
        $myData= $myModel->delete_subjects([$this->input('subid')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['category'=>$this->input('clsid'),'wid'=>"2"]);
        }
        else{echo "Error d";}
    }
    public function update_section($ifm){
        $myModel=$this->model("userModel");
        for($i=1;$i<=$ifm;$i++){
            if(!empty($this->input('statu'.$i))){$sts="Active";}else{$sts="Inactive";}
            $myData= $myModel->update_section([$this->input('section'.$i),$sts,$this->input('classid'.$i)]);
        }
        if($myData){
            echo "Succesfully Updated!";
        }
        else{echo "Error";}
    }
    public function insert_section(){
        $nwscnm="";
        $myModel=$this->model("userModel");
        $section=['1'=>"A",'2'=>"B",'3'=>"C",'4'=>"D",'5'=>"E",'6'=>"F",'7'=>"G",'8'=>"H",'9'=>"I",'10'=>"J"];
        $section2=['1'=>"A1",'2'=>"A2",'3'=>"A3",'4'=>"A4",'5'=>"A5",'6'=>"A6",'7'=>"A7",'8'=>"A8",'9'=>"A9",'10'=>"A10"];
        $section3=['1'=>"A1",'2'=>"B1",'3'=>"C1",'4'=>"D1",'5'=>"E1",'6'=>"F1",'7'=>"G1",'8'=>"H1",'9'=>"I1",'10'=>"J1"];
        if($this->input('sectiontype')=="1"){
            $nwscnm=$section[$this->input('datacnt')];
        }
        else if($this->input('sectiontype')=="1"){
            $nwscnm=$section2[$this->input('datacnt')];
        }
        else{
            $nwscnm=$section3[$this->input('datacnt')];
        }
        $myData=$myModel->add_section([$this->getSession('userid'),$nwscnm,$this->input('classid')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['classid'=>$this->input('classid'),'wid'=>"3",'pos'=>$this->input('pos')]);
        }
        else{echo "Error";}
    }
    public function delete_section(){
        $myModel=$this->model("userModel");
        $myData=$myModel->delete_section([$this->getSession('userid'),$this->input('classid')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['classid'=>$this->input('classid'),'wid'=>"3",'pos'=>$this->input('pos')]);
        }
        else{echo "Error";}
    }
    public function add_subjects(){
        $myModel=$this->model("userModel");
        $myData=$myModel->add_subjects([$this->getSession('userid'),$this->input('engname'),$this->input('hndname'),$this->input('categ')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['wid'=>"4",'category'=>$this->input('categ')]);
        }
        else{echo "Error";}
    }
    public function update_subjects(){
        $myModel=$this->model("userModel");
        $myData=$myModel->update_subjects([$this->input('engname'),$this->input('hndname'),$this->input('subid')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['wid'=>"4",'category'=>$this->input('categ')]);
        }
        else{echo "Error";}
    }
    public function delete_subjects(){
        $myModel=$this->model("userModel");
        $myData=$myModel->delete_collage_subjects([$this->input('subid')]);
        if($myData){
            $this->view2("ajax/allsubjects",$myModel,['wid'=>"4",'category'=>$this->input('categ')]);
        }
        else{echo "Error";}
    }
}

?>