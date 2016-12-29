<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class PurchaseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class,
                        array(
                            'label' => 'Nom d\'article ',
                            'label_attr' => array(
                                'class' => 'text-normal',
                            ),
                            'attr' => array(
                                'placeholder' => 'Saisir votre article'
                            ),
                            'required' => true
                        )
                )
                ->add('purchaseDateStar',
                    DateType::class,
                    array('label' => 'Date d\'achat',
                        'widget' => 'single_text',
                        'format' => 'dd/MM/yyyy',
                        'attr' => array('class' => 'datepicker')
                    )
                )
                ->add('purchasePaidAt',
                    DateType::class,
                    array('label' => 'Payé le',
                        'widget' => 'single_text',
                        'format' => 'dd/MM/yyyy',
                        'attr' => array('class' => 'datepicker')
                    )
                )
                ->add('quantity', IntegerType::class,array('label'=>'Quantité'))
                ->add('unitPrice', MoneyType::class,
                    array(
                        'label' => 'Prix unitaire',
                        'label_attr' => array(
                            'class' => 'text-normal',
                        ),
                        'required' => true,
                        'currency' => 'MGA',
                    ))
                ->add('totalPrice', MoneyType::class,
                    array(
                        'label' => 'Prix Total',
                        'label_attr' => array(
                            'class' => 'text-normal',
                        ),
                        'required' => true,
                        'currency' => 'MGA',
                    ))
                ->add('save', SubmitType::class, array(
                    'attr' => array('class' => 'btn-primary save'),
                    'label'=> 'Enregistrer'
                    )
                )
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Purchase'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_purchase';
    }


}
