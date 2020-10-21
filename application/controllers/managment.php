<?php
class managment extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("managment/dashboard");
    }
    public function holiday(){
        $this->view("managment/holiday");
    }
    public function leave(){
        $this->view("managment/leave");
    }
    public function sports(){
        $this->view("managment/sports");
    }

}
?>