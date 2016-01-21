<?php

class PersonController extends BaseController {

	//save register by admin.
	public function save_register(){

		$newPerson = new Person;
		$toRepository = new Administration;
		$newPerson->setTitle(Input::get('userTitle'));
		$newPerson->setName(Input::get('txtName'));
		$newPerson->setSurname(Input::get('txtSurName'));
		$newPerson->setPosition_ID(Input::get('userPosition'));
		$newPerson->setBirthday(Input::get('txtBirthday'));
		$newPerson->setNational_ID(Input::get('txtIdent'));
		$newPerson->setType_ID(Input::get('userType'));
		$newPerson->setDepartment_ID(Input::get('userDepart'));
		$newPerson->setDivision_ID(Input::get('userDivision'));
		$newPerson->setEmail(Input::get('txtEmail'));
		$newPerson->setTelphone(Input::get('txtTel'));

		$returnValue = $toRepository->addPerson($newPerson);

		if($returnValue==1){
			return View::make('alert/person/alertRegister');
		}else{
			return View::make('alert/person/alertRegister2');
		}
	}

}