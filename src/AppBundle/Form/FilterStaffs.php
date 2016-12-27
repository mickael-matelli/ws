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
                ->add('birthDate',
						DateType::class,
						array('label' => 'Date de naissance',
						  'required' => false ,
						  'widget' => 'single_text',
						  'format' => 'dd/MM/yyyy',
						  'attr' => array('class' => 'datepicker')
						)
					)
				->add('hiringDate',
						DateType::class,
						array('label' => 'Date d\'embauche',
						  'required' => false ,
						  'widget' => 'single_text',
						  'format' => 'dd/MM/yyyy',
						  'attr' => array('class' => 'datepicker')
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
