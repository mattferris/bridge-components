<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * www.bueller.ca/bridge-components
 *
 * Events/HttpRoutingComponent.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/bridge-components/license
 */

namespace MattFerris\Bridge\Components\Events;

use MattFerris\Application\Component;
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
}
