<?php

class Administration {

    /* ********* Person ********* */

    public function addPerson($person){
        $tmpRepo = PersonsTable::where('National_ID','=',$person->getNational_ID())->get();
        if(count($tmpRepo)==0){
            $tmpRepo = new PersonsTable;
            $tmpRepo->Title = $person->getTitle();
            $tmpRepo->Name = $person->getName();
            $tmpRepo->Surname = $person->getSurname();
            $tmpRepo->Position_ID = $person->getPosition_ID();
            $tmpRepo->Birthday = $person->getBirthday();
            $tmpRepo->National_ID = $person->getNational_ID();
            $tmpRepo->Type_ID = $person->getType_ID();
            $tmpRepo->Department_ID = $person->getDepartment_ID();
            $tmpRepo->Division_ID = $person->getDivision_ID();
            $tmpRepo->Email = $person->getEmail();
            $tmpRepo->Telphone = $person->getTelphone();
            $tmpRepo->save();
            return 1;
        }else{
            return 0;
        }
    }

    public function editPerson($person){

    }

    public function deletePerson($person){

    }

    /* ********* Parents ********* */

    public function addParents($parents){
     
    }

    public function editParents($parents){

    }

    public function deleteParents($parents){

    }

    /* ********* Spouse ********* */

    public function addSpouse($spouse){
     
    }

    public function editSpouse($spouse){

    }

    public function deleteSpouse($spouse){

    }

    /* ********* Child ********* */

    public function addChild($spouse){
     
    }

    public function editChild($spouse){

    }

    public function deleteChild($spouse){

    }

}