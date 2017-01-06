<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Events/ServicesProvider.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\Events;

use MattFerris\Provider\ProviderInterface;
use MattFerris\Events\Dispatcher;
use MattFerris\Events\Logger;

class ServicesProvider implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function provides($consumer)
    {
        $dispatcher = new Dispatcher();
        $consumer->set('EventDispatcher', $dispatcher);
        $consumer->set('EventLogger', new Logger($dispatcher));
    }
}
