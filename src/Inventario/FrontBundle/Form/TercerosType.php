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
            ->add('txtipdoc','choice', array(
                'choices' => array("NIT"=>"NIT", "CC"=>"CC"),
                'label' => 'Tipo doc.'
            ))
            ->add('txdocumento','text',array('label' => 'Documento'))
            ->add('txnomtercero','text',array('label' => 'Razon Social'))
            ->add('intipoter','choice',array('label' => 'Tipo',
                'choices' => array("0"=>"Cliente", "1"=>"Proveedor", "2"=>"Ambos"),
                'multiple' => false,
                'expanded' => true,
                'required' => true,
            ))
            ->add('txdescuento','text',array('label' => '% Descuento'))
            ->add('txdiasdescuento','text',array('label' => 'Dias descuento'))
            ->add('intipodesc','text',array('label' => 'Descuento incluido'))
            ->add('txdireccion','text',array('label' => 'Direccion'))
            ->add('txtelefonos','text',array('label' => 'Telefonos'))
            ->add('inactivo','choice',array('label' => '',
                'choices' => array("1"=>"Activo", "0"=>"Inactivo"),
                'multiple' => false,
                'expanded' => true,
                'required' => true,
                ))
            ->add('txdivipola','entity',array('label' => 'Ciudad',
                'class' => 'InventarioFrontBundle:Deptociudades',
                'property' => 'txnombre'))
            ->add('idlistaprecios','entity',array('label' => 'Lista de precios',
                'class' => 'InventarioFrontBundle:Listaprecios',
                'property' => 'txnomlista'))
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
