<?php

namespace Braunstetter\ControlPanel\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;

class ImageTypeExtension extends AbstractTypeExtension
{

    /**
     * @inheritDoc
     */
    public static function getExtendedTypes(): iterable
    {
        return [FileType::class];
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // makes it legal for FileType fields to have an image_property option
        $resolver->setDefined(['image_property']);

        $resolver->define('image_delete_route')
            ->allowedTypes('string')
            ->info('The path for deleting an image');
    }

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        if (isset($options['image_property'])) {
            // this will be whatever class/entity is bound to your form (e.g. Media)
            $parentData = $form->getParent()->getData();

            $imageUrl = null;
            if (null !== $parentData) {
                $accessor = PropertyAccess::createPropertyAccessor();
                $imageUrl = $accessor->getValue($parentData, $options['image_property']);
            }

            // sets an "image_url" variable that will be available when rendering this field
            $view->vars['image'] = $imageUrl;
        }

        if (isset($options['image_delete_route'])) {
            $view->vars['image_delete_route'] = $options['image_delete_route'];
        }
    }
}