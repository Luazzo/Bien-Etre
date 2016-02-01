<?php
/**
 * Created by PhpStorm.
 * User: gberger
 * Date: 27/01/16
 * Time: 11:29
 */

namespace Annuaire\AnnuaireBundle\Form;


use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Type;

/**
 * Class PrestataireRegistrationFormType
 * @package Annuaire\AnnuaireBundle\Form
 * le form type Prestataire, dont le nom est utilisé par la form factory (ainsi que dans l'alias du service)
 * si des champs supplémentaires sont à ajouter, il faudra surcharger la méthode buildForm
 */
class PrestataireRegistrationFormType extends RegistrationFormType{

	public function getName() {
		return 'prestataire_registration';
	}


}