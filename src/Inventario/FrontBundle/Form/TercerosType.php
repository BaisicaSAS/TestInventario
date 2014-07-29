<?php

namespace Inventario\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TercerosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('txtipdoc')
            ->add('txdocumento')
            ->add('txnomtercero')
            ->add('intipoter')
            ->add('txdescuento')
            ->add('txdiasdescuento')
            ->add('txdireccion')
            ->add('txtelefonos')
            ->add('inactivo')
            ->add('intipodesc')
            ->add('txdivipola')
            ->add('idlistaprecios')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inventario\FrontBundle\Entity\Terceros'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inventario_frontbundle_terceros';
    }
}
