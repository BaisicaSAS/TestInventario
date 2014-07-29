<?php

namespace Inventario\FrontBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class TipotetrceroType extends AbstractType
{
    private $tipoter;

    public function __construct(array $tipoter)
    {
        $this->tipoter = $tipoter;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'tipos' => $this->tipoter,
        ));
    }
}