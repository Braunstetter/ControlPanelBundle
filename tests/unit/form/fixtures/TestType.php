<?php

namespace Braunstetter\ControlPanel\Test\unit\form\fixtures;

use Braunstetter\ControlPanel\Form\BoxType;
use Braunstetter\ControlPanel\Form\PageType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestType extends PageType
{
    public function buildBodyForm(FormInterface $builder, array $options)
    {
        $formOptions = [];
        if (array_key_exists('custom_css_class', $options)) {
            $formOptions['attr'] = ['class' => $options['custom_css_class']];
        }

        $builder->add('info', BoxType::class, $formOptions);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->define('custom_css_class')
            ->allowedTypes('string', 'null')
            ->info('The css passed to the BoxType for testing.');
    }


}