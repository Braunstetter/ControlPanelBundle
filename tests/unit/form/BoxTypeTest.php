<?php

namespace Braunstetter\ControlPanel\Test\unit\form;

use Braunstetter\ControlPanel\Test\unit\form\fixtures\TestType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Test\TypeTestCase;

class BoxTypeTest extends TypeTestCase
{
    public function testView()
    {
        $view = $this->factory->create(TestType::class)
            ->createView();

        $this->assertArrayHasKey('body', $view);
        $this->assertArrayHasKey('topLeft', $view);
        $this->assertArrayHasKey('topRight', $view);
        $this->assertArrayHasKey('side', $view);

        $this->assertArrayHasKey('info', $view['body']);

        /** @var FormView $boxView */
        $boxView = $view['body']['info'];
        $this->assertSame($boxView->vars['attr']['class'], 'page-side-box');

    }

    public function testCssClassesGetMerged()
    {
        $view = $this->factory->create(TestType::class, null, ['custom_css_class' => 'test_class'])
            ->createView();

        $boxView = $view['body']['info'];
        $this->assertSame($boxView->vars['attr']['class'], 'test_class page-side-box');
    }


}