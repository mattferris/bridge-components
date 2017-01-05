<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * www.bueller.ca/bridge-components
 *
 * Di/DiComponent.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/bridge-components/license
 */

namespace MattFerris\Bridge\Components\Di;

use MattFerris\Application\Component;
use MattFerris\Di\ContainerInterface;

class DiComponent extends Component
{
    /**
     * @var array Providers
     */
    protected $providers = [
        'Services' => [
            'consumer' => ContainerInterface::class,
            'scope' => 'global'
        ]
    ];
}
