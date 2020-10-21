<?php
class schedule extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("schedule/dashboard");
    }
    public function exam(){
        $this->view("schedule/exam");
    }
    public function homework(){
        $this->view("schedule/homework");
    }
    public function setpaper(){
        $this->view("schedule/setpaper");
    }
    public function character_certificate(){
        $this->view("schedule/character_certificate");
    }
    public function add_homework(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/add_homework",$myModel);
    }
    public function add_classwork(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/add_classwork",$myModel);
    }
    public function homework_list(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/homework_list",$myModel);
    }
    public function classwork_list(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/classwork_list",$myModel);
    }
    public function add_question(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/add_question",$myModel);
    }
    public function instant_paper(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/instant_paper",$myModel);
    }
    public function paper_list(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/paper_list",$myModel);
    }
    public function event_certificate_form(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/event_certificate_form",$myModel);
    }
    public function character_certificate_list(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/character_certificate_list",$myModel);
    }
    public function event_list(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/event_list",$myModel);
    }
    public function sport_certificate_form(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/sport_certificate_form",$myModel);
    }
    public function sport_certificate_list(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/sport_certificate_list",$myModel);
    }
    public function subjectlist(){
        $myModel=$this->model("userModel");
        $this->view2("ajax/allsubjects",$myModel,['wid'=>"24",'classid'=>$this->input('classid')]);
    }
    public function saveclasswork(){
        $myModel=$this->model("userModel");
        $data=[$this->getSession('userid'),explode(',', $this->input('class'))[0],explode(',', $this->input('subject'))[0],explode(',', $this->input('class'))[1],explode(',', $this->input('subject'))[1],$this->input('date'),$this->input('remark'),"",$this->input('message'),$this->input('type'),"Admin"];
        $myData=$myModel->save_class_work($data);
        if($myData){
            echo "Succesfull";
        }
        else{
            echo "Failed ".$usrid;
        }
    }
    public function worklist(){
        $myModel=$this->model("userModel");
        $this->view2("ajax/allsubjects",$myModel,['wid'=>"25",'type'=>"Home Work",'select'=>$this->input('select'),'classid'=>$this->input('classid'),'subjectid'=>$this->input('subjectid')]);
    }
    public function admit_card_cbsc(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/admit_card_cbsc",$myModel);
    }
    public function admit_card_cbsc_syllabus(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/admit_card_cbsc_syllabus",$myModel);
    }
    public function admit_card_print_cbsc(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/admit_card_print_cbsc",$myModel);
    }
    public function marksheet_fill_cbsc(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/marksheet_fill_cbsc",$myModel);
    }
    public function marksheet_fill_cbsc_examwise(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/marksheet_fill_cbsc_examwise",$myModel);
    }
    public function marksheet_view_cbsc(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/marksheet_view_cbsc",$myModel);
    }
    public function marksheet_feel_monthly_examwise(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/marksheet_fill_monthly_examwise",$myModel);
    }
    public function marksheet_fill_monthly(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/marksheet_fill_monthly",$myModel);
    }
    public function marksheet_view_monthly(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/marksheet_view_monthly",$myModel);
    }
    public function add_weekly_test(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/add_weekly_test",$myModel);
    }
    public function add_weekly_test_marks(){
        $myModel=$this->model("userModel");
        $this->view2("schedule/add_weekly_test_marks",$myModel);
    }
}
?>