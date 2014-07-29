<?php

namespace Inventario\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipdocType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('txtipdoc')
            ->add('txnomdoc')
            ->add('inafecta')
            ->add('intipter')
            ->add('txobservplantilla')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inventario\FrontBundle\Entity\Tipdoc'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inventario_frontbundle_tipdoc';
    }
}
