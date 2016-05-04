<?php
/**
 * Created by PhpStorm.
 * User: gberger
 * Date: 27/01/16
 * Time: 11:30
 */

namespace Annuaire\AnnuaireBundle\Form;


use FOS\UserBundle\Form\Type\RegistrationFormType;

class MemberRegistrationFormType extends RegistrationFormType{

	public function getName() {
		return 'member_registration';
	}

}