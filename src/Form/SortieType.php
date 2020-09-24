<?php

namespace App\Form;

use App\Entity\Sortie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, ['label' => 'Nom de la sortie'])
            ->add('datedebut', DateTimeType::class, ['label' => 'Date et heure de la sortie :',
                'date_widget' => 'single_text',
                'time_widget' => 'single_text'])
            ->add('datecloture', DateType::class, ['label' => 'Date limite dinscription : '])
            ->add('nbinscriptionsmax', IntegerType::class, ['label' => 'Nombre de places : '])
            //   'number_widget' =>'integer',
            //'max-widget' => 'integer'])
            //  ->add('duree',
            //    IntegerType::class,
            //    ['attr' => [' placeholder'=> '90'], 'minutes'])
            //  ->add('descriptioninfos',TextareaType::class,['Label'=>'Descrition et infos : '])
            // ->add('etatsortie')
            // ->add('urlPhoto')
            // ->add('organisateur')
            //   ->add('lieux_no_lieu', ChoiceType::class,['label'=>'Ville ' ,])
            //   ->add('etats_no_etat')
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
