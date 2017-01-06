<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Di/DiComponent.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
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
