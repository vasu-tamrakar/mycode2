<?php
class App{
    private $first_name;
    private $last_name;
    public function getUser(){
        $rtarray = array('first_name'=>$this->first_name, 'last_name'=>$this->last_name);
        return $rtarray;
    }
    public function setUser($first,$last){
        $this->first_name= $first;
        $this->last_name=$last;
        return true;
    }
}