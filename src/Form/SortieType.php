<?php

namespace App\Form;

use App\Entity\Sortie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',["label"=>"Nom de la sortie"])
            ->add('datedebut',DateTimeType::class
            ->add('duree',["label"=>"Durée"])
            ->add('datecloture',DateTime::class)
            ->add('nbinscriptionsmax')
            ->add('descriptioninfos', ["label"=>"Description de la sortie"])
            ->add('etatsortie')
            ->add('urlPhoto')
            ->add('organisateur')
            ->add('lieux_no_lieu')
            ->add('etats_no_etat')
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
