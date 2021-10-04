<?php

namespace Braunstetter\ControlPanel\Test\unit\form;

use Braunstetter\ControlPanel\Form\PageType;
use Symfony\Component\Form\Test\TypeTestCase;

class PageTypeTest extends TypeTestCase
{
    public function testView()
    {
        $view = $this->factory->create(PageType::class, null, ['title' => 'This is a title'])
            ->createView();

        $this->assertArrayHasKey('title', $view->vars);
        $this->assertSame($view->vars['title'], 'This is a title');

    }

}