<?php
class App{
    private $first_name;
    private $last_name;
    public function getUser(){
        if(isset($this->first_name) && isset($this->last_name)){
            return array('first_name'=>$this->first_name, 'last_name'=>$this->last_name);
        }else{
            return array();
        }
    }
    public function setUser($first,$last){
        $this->first_name= $first;
        $this->last_name=$last;
        return true;
    }
    public function getage($age){
        if($age >18){
            echo 'Adult';
        }else{
            echo 'Children';
        }
        if($age >18){
            echo 'Adult';
        }else{
            echo 'Children';
        }
        if($age >18){
            echo 'Adult';
        }else{
            echo 'Children';
        }
    }
    public function getlast_name(){
        return $this->last_name;
    }
}