<?php
class backup extends framework{
    public function __construct(){
        if(!$this->getSession('userid')){
            $this->redirect("");
        }
        $this->helper("link");
    }
    public function index(){
        $this->view("backup/dashboard");
    }
    public function downloads(){
        $this->view("backup/downloads");
    }
    public function recyclebin(){
        $this->view("backup/recyclebin");
    }
    public function session(){
        $this->view("backup/session");
    }
    

}
?>