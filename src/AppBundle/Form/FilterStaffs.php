<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FilterStaffs extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setMethod($options['method']);
        $builder->add('firstName', TextType::class,
                array(
                    'label' => 'Nom',
                    'label_attr' => array(
                        'class' => 'text-normal',
                    ),
                    'required' => false
                    )
                )
                ->add('lastName', TextType::class,
                array(
                    'label' => 'Prénom',
                    'label_attr' => array(
                        'class' => 'text-normal',
                    ),
                    'required' => false
                    )
                )
                ->add('birthDate', 'mablae_datetime', array( 
                        'pickerOptions' =>
                            array('format' => 'dd/mm/yyyy',
                            'viewMode' => 'days', // days, month, years, decades
                            'language'   => 'fr'
                            ),
                        'label'=>'Date de naissance',
                        'required' => false    
                    )
                )
                ->add('hiringDate', 'mablae_datetime', array( 
                        'pickerOptions' =>
                            array('format' => 'dd/mm/yyyy',
                            'viewMode' => 'days', // days, month, years, decades
                            'language'   => 'fr'
                            ),
                        'label'=>'Date d\'embauche',
                        'required' => false
                    )
                )
                ->add('matricule',TextType::class,array('label'=>'N° Matricule','required' => false))
                ->add('netSalary', TextType::class,array('label'=>'Salaire Net','required' => false))
                ->add('save', SubmitType::class, array(
                    'attr' => array('class' => 'btn-primary save'),
                    'label'=> 'Rechercher'
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'method'     => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_staffs_filter';
    }


}
