<?php
namespace Annuaire\AnnuaireBundle\Form;

use Annuaire\AnnuaireBundle\Form\PrestataireType;

/**
 * Class PrestataireRrofileFormType
 * @package Annuaire\AnnuaireBundle\Form
 * le form type Prestataire, dont le nom est utilisé par la form factory (ainsi que dans l'alias du service)
 * si des champs supplémentaires sont à ajouter, il faudra surcharger la méthode buildForm
 */
class PrestataireProfileFormType extends PrestataireType{
    

	public function getName() {
		return 'prestataire_profile';
	}

}