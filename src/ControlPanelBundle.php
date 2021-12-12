<?php

namespace Braunstetter\ControlPanel;

use Braunstetter\ControlPanel\DependencyInjection\ControlPanelBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ControlPanelBundle extends Bundle
{
    public function getContainerExtension(): ControlPanelBundleExtension
    {
        if (null === $this->extension) {
            $this->extension = new ControlPanelBundleExtension();
        }

        return $this->extension;
    }
}