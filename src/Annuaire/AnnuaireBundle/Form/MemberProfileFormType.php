<?php
namespace Annuaire\AnnuaireBundle\Form;


use Annuaire\AnnuaireBundle\Form\MembreType;


class MemberProfileFormType extends MembreType{

	public function getName() {
		return 'member_profile';
	}

}