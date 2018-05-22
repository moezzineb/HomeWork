<?php

namespace Web\ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text')
            ->add('description','textarea')
            ->add('duree','integer')
            ->add('budget', 'choice', array(
                'choices' => array(
                    '' => '',
                    '25 - 50' => '25 - 50 $',
                    '50 - 100' => '50 - 100 $',
                    '100 - 250' => '100 - 250 $',
                    '250 - 500' => '250 - 500 $',
                )))
            ->add('statut', 'choice', array(
                'choices' => array(
                    'debut' => 'Recieve offers',
                    'travaille' => 'Work in progress',
                    'fin' => 'Finished',
                )))
            //->add('dateDebut', 'datetime')
            ->add('categorie', 'choice', array(
                'choices' => array(
                    '' => '',
                    'Web Developer' => 'Web Developer',
                    'Web Designer' => 'Web Designer',
                    'Mobile Developer' => 'Mobile Developer',
                    'SEO' => 'SEO',
                )))
            //->add('idAbonne')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Web\ProjectBundle\Entity\Projet'
        ));
    }
}
