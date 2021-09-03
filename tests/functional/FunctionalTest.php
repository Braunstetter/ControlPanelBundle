<?php

namespace Braunstetter\ControlPanel\Test\functional;

use Braunstetter\ControlPanel\Test\app\src\TestKernel;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;

class FunctionalTest extends TestCase
{

    protected Testkernel $kernel;

    protected function setUp(): void
    {
        parent::setUp();

        $kernel = new TestKernel('dev', true);
        $kernel->boot();

        $this->kernel = $kernel;
    }

    public function test_()
    {
        $client = new KernelBrowser($this->kernel);
        $client->request('GET', '/test');
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

}
