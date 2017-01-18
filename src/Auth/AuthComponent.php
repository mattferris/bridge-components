<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Events/ServicesProvider.php
 * @copyright Copyright (c) 2017 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\Auth;

use MattFerris\Application\Component;
use MattFerris\Auth\AuthenticatorInterface;

class AuthComponent extends Component
{
    /**
     * @var array Providers
     */
    protected $providers = [
        'Auth' => [
            'consumer' => AuthenticatorInterface::class,
            'scope' => 'global'
        ],
    ];
}
