<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StaffsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class,
                array(
                    'label' => 'Nom',
                    'label_attr' => array(
                        'class' => 'text-normal',
                    ),
                    'attr' => array(
                        'placeholder' => 'Saisir le Nom du Personnel'
                    ),
                    'required' => true
                    )
                )
                ->add('lastName', TextType::class,
                array(
                    'label' => 'Prénom',
                    'label_attr' => array(
                        'class' => 'text-normal',
                    ),
                    'attr' => array(
                        'placeholder' => 'Saisir le Prenom du Personnel'
                    ),
                    'required' => true
                    )
                )
				->add('birthDate',
						DateType::class,
						array('label' => 'Date de naissance',
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
                ->add('matricule')
                ->add('netSalary', TextType::class,array('label'=>'Salaire Net'))
                ->add('save', SubmitType::class, array(
                    'attr' => array('class' => 'btn-primary save'),
                    'label'=> 'Enregistrer'
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Staffs'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_staffs';
    }


}
