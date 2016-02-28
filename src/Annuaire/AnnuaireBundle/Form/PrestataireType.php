<?php

namespace Annuaire\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PrestataireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rue')
            ->add('numero')
            ->add('site')
            ->add('tel')
            ->add('tva')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('localite_id', 'entity', array('class' => 'AnnuaireAnnuaireBundle:Localite', 'property' => 'localite', 'required' => false))
            ->add('codepost_id','entity', array('class' => 'AnnuaireAnnuaireBundle:Codepost', 'choice_label' => 'code', 'property' => 'code', 'required' => false))
            ->add('commune_id', 'entity', array('class' => 'AnnuaireAnnuaireBundle:Commune', 'choice_label' => 'commune', 'property' => 'commune', 'required' => false))
            
            /*->add('avatar','collection', array(
                'type' => new ImagesType(),
                'allow_add' => true
                ))*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Annuaire\AnnuaireBundle\Entity\Prestataire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_annuairebundle_prestataire';
    }
}
