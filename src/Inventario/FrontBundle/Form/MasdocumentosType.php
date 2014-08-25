<?php

namespace Inventario\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MasdocumentosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('txnumdoc')
            ->add('fefecha')
            ->add('fevencimiento')
            ->add('txobservaciones')
            ->add('txcondpago')
            ->add('dbvalneto')
            ->add('dbvaliva')
            ->add('dbtotal')
            ->add('inidtipdoc')
            ->add('inidtercero')
            ->add('vendedoresvendedor')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inventario\FrontBundle\Entity\Masdocumentos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inventario_frontbundle_masdocumentos';
    }
}
