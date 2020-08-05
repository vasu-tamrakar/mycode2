<?php
class App{
    private $first_name;
    private $last_name;
    private $age;
    public function getUser(){
        if($this->age > 18){
            echo 'This is adult';
            echo '<br>first_name: '.$this->first_name;
            echo '<br>last_name: '.$this->last_name;
            echo '<br>age: '.$this->age;
        }else{
            echo 'This is child';
            echo '<br>first_name: '.$this->first_name;
            echo '<br>last_name: '.$this->last_name;
            echo '<br>age: '.$this->age;
        }
        
    }
    public function setUser($first,$last,$age){
        $this->first_name= $first;
        $this->last_name=$last;
        $this->age = $age;
        return true;
    }
    public function ageTest($a){
        if($a >18){
            return 'Adult';
        }else{
            return 'child';
        }
    }
}