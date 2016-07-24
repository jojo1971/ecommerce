<?php
namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class testType extends AbstractType
{
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //ici nous allons faire notre formulaire en php
        // le html, c'est fini
        $builder
            ->add('email', 'email')
            ->add('nom', null, array('required' => false))
            ->add('prenom')
            ->add('sexe', 'choice', array('choices' => array('0' => 'Homme',
                                                             '1'=> 'Femme',
                                                             '2' => 'Autre'),'preferred_choices' => array('1'),'expanded' => false))
            ->add('contenu', 'textarea')
            ->add('date', 'datetime')
            ->add('utilisateurs', 'entity', array('class' => 'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
            ->add('pays', 'country')
            ->add('Envoyer', 'submit');
    }

    public function getName(){
        return 'ecommerce_ecommercebundle_test';
    }
}