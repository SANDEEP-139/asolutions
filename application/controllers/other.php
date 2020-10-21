<?php
class other extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("other/dashboard");
    }
    public function reminder(){
        $this->view("other/reminder");
    }
    public function typing(){
        $this->view("other/typing");
    }    
}
?>