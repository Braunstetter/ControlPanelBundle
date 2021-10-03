<?php

namespace Braunstetter\ControlPanel\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BoxType extends AbstractType
{
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $formClass = 'page-side-box';

        $classes = array_key_exists('class', $view->vars['attr'])
            ? $view->vars['attr']['class'] . ' ' . $formClass
            : $formClass;

        $view->vars['attr']['class'] = $classes;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('inherit_data', true);
    }

}