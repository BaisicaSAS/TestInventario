<?php

namespace Inventario\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClasifproductosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        
        $builder
            ->add('txdescripcion', 'text', array("label" => "Descripcion de la clasificación"))
            ->add('intipo','choice', array(
                    "label" => "Aplicacion de la clase",
                    'choices' => array(
                        '0' => 'Aplicacion',
                        '1' => 'Marca'
            )))
            ->add('inpadre', 'entity', array(
                    "label" => "Clase principal",
                    'class' => 'InventarioFrontBundle:Clasifproductos',
                    'property' => 'txdescripcion',));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inventario\FrontBundle\Entity\Clasifproductos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inventario_frontbundle_clasifproductos';
    }
}
