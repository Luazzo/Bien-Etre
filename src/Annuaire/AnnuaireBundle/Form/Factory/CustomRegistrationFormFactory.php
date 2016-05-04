<?php


namespace Annuaire\AnnuaireBundle\Form\Factory;


use Symfony\Component\Form\FormFactoryInterface;


/**
 * Class CustomRegistrationFormFactory
 * @package Annuaire\AnnuaireBundle\Form\Factory
 *
 * La classe qui se chargera de créer le formulaire d'enregistrement d'un utilisateur
 */
class CustomRegistrationFormFactory {

	/**
	 * @var $formFactory FormFactoryInterface
	 *
	 */
	private $formFactory;

	private $validationGroups;

	public function __construct(FormFactoryInterface $formFactory, $validationGroups=null) {
		$this->formFactory = $formFactory;
		$this->validationGroups = $validationGroups;
	}

	/**
	 * @param array $options
	 * @param $user_type
	 *
	 * @return \Symfony\Component\Form\FormInterface
	 *
	 * est une version adaptée de la méthode Factory du FOS user bundle qui prend en paramètre un type d'utilisateur
	 * et renvoit un FORM adéquat
	 */
	public function createForm( array $options = array(), $user_type) {
		$options = array_merge( array( 'validation_groups' => $this->validationGroups ), $options );

		$name = 'member_registration';
		$type = 'member_registration';

		if($user_type == 'prestataire'){
			$name = 'prestataire_registration';
			$type = 'prestataire_registration';
		}
		return $this->formFactory->createNamed($name, $type, null, $options);
	}

}