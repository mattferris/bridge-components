<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * HttpRouting/ServicesProvider.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\HttpRouting;

use MattFerris\Provider\ProviderInterface;
use MattFerris\Di\ContainerInterface;
use MattFerris\Http\Routing\Dispatcher;
use MattFerris\Http\Routing\DispatcherInterface;

class ServicesProvider implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function provides($consumer)
    {
        $consumer->set('HttpDispatcher', function (ContainerInterface $container) {
            return new Dispatcher($container);
        }, true, DispatcherInterface::class);
    }
}
