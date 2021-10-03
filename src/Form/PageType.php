<?php

namespace Braunstetter\ControlPanel\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('topLeft', FormType::class, ['inherit_data' => true, 'block_prefix' => 'topLeft']);
        $builder->add('topRight', FormType::class, ['inherit_data' => true, 'block_prefix' => 'topRight']);
        $builder->add('body', FormType::class, ['inherit_data' => true, 'block_prefix' => 'body']);
        $builder->add('side', FormType::class, ['inherit_data' => true, 'block_prefix' => 'side']);

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($options) {

            $form = $event->getForm();

            $this->buildToplineLeftForm($form->get('topLeft'), $options);
            $this->buildToplineRightForm($form->get('topRight'), $options);
            $this->buildBodyForm($form->get('body'), $options);
            $this->buildSidebarForm($form->get('side'), $options);

        });
    }

    public function buildToplineRightForm(FormInterface $builder, array $options)
    {
    }

    public function buildToplineLeftForm(FormInterface $builder, array $options)
    {
    }

    public function buildBodyForm(FormInterface $builder, array $options)
    {
    }

    public function buildSidebarForm(FormInterface $builder, array $options)
    {
    }

    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        if (array_key_exists('title', $options) && $options['title']) {
            $view->vars['title'] = $options['title'];
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->define('title')
            ->allowedTypes('string', 'null')
            ->info('The title of this page form');
    }
}