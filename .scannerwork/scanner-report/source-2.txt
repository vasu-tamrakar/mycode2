<?php
class App{
    private $first_name;
    private $last_name;
    public function getUser(){
        return array('first_name'=>$this->first_name, 'last_name'=>$this->last_name);
    }
    public function setUser($first,$last){
        if(isset($first)){
            $this->first_name=$first;
        }else{
            $this->first_name='';
        }
        if(isset($last)){
            $this->last_name=$last;
        }else{
            $this->last_name='';
        }
        return true;
    }
}