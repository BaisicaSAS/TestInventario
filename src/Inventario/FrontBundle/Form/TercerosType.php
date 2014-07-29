<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Inventario\FrontBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of RegistroPersonaForm
 *
 * @author mramirez
 */
class TercerosType extends AbstractType{
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        try {
            $builder
                ->add('txtipdoc', 'text', array('label' => 'Tipo documento'))
                ->add('txdocumento', 'text', array('label' => 'Documento'))
                ->add('txnomtercero', 'text', array('label' => 'Nombre'))
                ->add('intipoter', 'text', array('label' => 'Tipo tercero'))
                ->add('txdescuento', 'text', array('label' => '% Descuento'))
                ->add('txdiasdescuento', 'text', array('label' => 'Plazo'))
                ->add('intipodesc', 'text', array('label' => 'Tipo descuento'))
                ->add('txdireccion', 'text', array('label' => 'Direccion'))
                ->add('txtelefonos', 'text', array('label' => 'Telefonos'))
                ->add('inactivo', 'text', array('label' => 'Activo'))
                ->add('Guardar', 'submit');

       } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\Inventario\FrontBundle\Entity\Terceros',
        ));
        
    }    

    public function getName()
    {
        return 'registro';
    }
}

