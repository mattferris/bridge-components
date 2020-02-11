<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Events/EventsComponent.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\Events;

use MattFerris\Application\Component;
use MattFerris\Di\ContainerInterface;
use MattFerris\Events\DispatcherInterface;
use MattFerris\Events\LoggerInterface;

class EventsComponent extends Component
{
    /**
     * @var array Providers
     */
    protected $providers = [
        'Events' => [
            'consumer' => DispatcherInterface::class,
            'scope' => 'global'
        ],
        'EventsLogger' => [
            'consumer' => LoggerInterface::class,
            'scope' => 'global'
        ],
    ];

    /**
     * {@inheritDoc}
     */
    public function __construct(ContainerInterface $container, array $providers = [])
    {
        $container->set('EventDispatcher', new Dispatcher());
        parent::__construct($container, $providers);
    }
}
