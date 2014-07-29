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
            ->add('txtipdoc', 'text', array("label" => "Tipo Doc."))
            ->add('txnomdoc', 'text', array("label" => "Documento"))
            ->add('inafecta', 'choice', array(
                    "label" => "Operación",
                    'choices' => array(
                        '0' => 'Suma',
                        '1' => 'Resta',
                        '2' => 'Proyectado Salida',
                        '3' => 'Proyectado ingreso',
                        '4' => 'Segun signo',
                        '5' => 'Neutro')))
            ->add('intipter', 'choice', array(
                    "label" => "Tercero",
                    'choices' => array(
                        '0' => 'Cliente',
                        '1' => 'Proveedor'),
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
            ))
            ->add('txobservplantilla', 'text', array("label" => "Observaciones"))
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
