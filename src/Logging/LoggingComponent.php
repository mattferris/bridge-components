<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Logging/LoggingComponent.php
 * @copyright Copyright (c) 2017 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\Logging;

use MattFerris\Application\Component;
use MattFerris\Logging\LoggerInterface;

class LoggingComponent extends Component
{
    /**
     * @var array Providers
     */
    protected $providers = [
        'Logger' => [
            'consumer' => LoggerInterface::class,
            'scope' => 'global'
        ],
    ];
}
