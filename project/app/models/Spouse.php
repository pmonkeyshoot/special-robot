<?php

class Spouse {
    private $National_ID;
    private $Title;
    private $Name;
    private $Surname;
    private $Birthday; 
    private $User_ID;

    public function __construct(){
        $this->National_ID = NULL;
        $this->Title = NULL;
        $this->Name = NULL;
        $this->Surname = NULL;
        $this->Birthday = NULL;
        $this->User_ID = NULL;
    }

    public function getNational_ID(){
        return $this->National_ID;
    }

    public function setNational_IDd($inNational_ID){
        $this->National_ID = $inNational_ID;
    }

    public function getTitle(){
        return $this->Title;
    }

    public function setTitle($inTitle){
        $this->Title = $inTitle;
    }

    public function getName(){
        return $this->Name;
    }

    public function setName($inName){
        $this->Name = $inName;
    }

    public function getSurname(){
        return $this->Surname;
    }

    public function setSurname($inSurname){
        $this->Surname = $inSurname;
    }

    public function getBirthday(){
        return $this->Birthday;
    }

    public function setBirthday($inBirthday){
        $this->Birthday = $inBirthday;
    }

    public function getUser_ID(){
        return $this->Type_ID;
    }

    public function setUser_ID($inUser_ID){
        $this->User_ID = $inUser_ID;
    }
}