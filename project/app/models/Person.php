<?php

class Person {
    private $National_ID;
    private $Username;
    private $Title;
    private $Name;
    private $Surname;
    private $Birthday;
    private $Employee_ID;
    private $Position_ID;
    private $Department_ID;
    private $Division_ID; 
    private $Type_ID;
    private $Email;
    private $Avatar;
    private $Telphone;

    public function __construct(){
        $this->National_ID = NULL;
        $this->Username = NULL;
        $this->Title = NULL;
        $this->Name = NULL;
        $this->Surname = NULL;
        $this->Birthday = NULL;
        $this->Employee_ID = NULL;
        $this->Position_ID = NULL;
        $this->Department_ID = NULL;
        $this->Division_ID = NULL;
        $this->Type_ID = NULL;
        $this->Email = NULL;
        $this->Avatar = NULL;
        $this->Telphone = NULL;
    }

    public function getNational_ID(){
        return $this->National_ID;
    }

    public function setNational_ID($inNational_ID){
        $this->National_ID = $inNational_ID;
    }

    public function getUsername(){
        return $this->Username;
    }

    public function setUsername($inUsername){
        $this->Username = $inUsername;
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

    public function getEmployee_ID(){
        return $this->Employee_ID;
    }

    public function setEmployee_ID($inEmployee_ID){
        $this->Employee_ID = $inEmployee_ID;
    }

    public function getPosition_ID(){
        return $this->Position_ID;
    }

    public function setPosition_ID($inPosition_ID){
        $this->Position_ID = $inPosition_ID;
    }

    public function getDepartment_ID(){
        return $this->Department_ID;
    }

    public function setDepartment_ID($inDepartment_ID){
        $this->Department_ID = $inDepartment_ID;
    }

    public function getDivision_ID(){
        return $this->Division_ID;
    }

    public function setDivision_ID($inDivision_ID){
        $this->Division_ID = $inDivision_ID;
    }

    public function getType_ID(){
        return $this->Type_ID;
    }

    public function setType_ID($inType_ID){
        $this->Type_ID = $inType_ID;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function setEmail($inEmail){
        $this->Email = $inEmail;
    }

    public function getTelphone(){
        return $this->Telphone;
    }

    public function setTelphone($inTelphone){
        $this->Telphone = $inTelphone;
    }

    public function getAvatar(){
        return $this->Avatar;
    }

    public function setAvatar($inAvatar){
        $this->Avatar = $inAvatar;
    }
}