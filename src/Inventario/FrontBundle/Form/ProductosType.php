<?php

namespace Inventario\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('txrefinterna')
            ->add('txrefexterna')
            ->add('txnomproducto')
            ->add('txdescripcion')
            ->add('inactivo', 'choice', array(
                    'choices' => array(
                        '1' => 'Activo',
                        '0' => 'Inactivo')))
            ->add('idclasifproductos','entity',array(
                'class' => 'InventarioFrontBundle:Clasifproductos',
                'property' => 'id',
                'data' => '1'))
            ->add('idmarcaproductos','entity',array(
                'class' => 'InventarioFrontBundle:Clasifproductos',
                'property' => 'id',
                'data' => '2'))
            //->add('')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inventario\FrontBundle\Entity\Productos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inventario_frontbundle_productos';
    }
}
