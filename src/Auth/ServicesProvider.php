<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Auth/ServicesProvider.php
 * @copyright Copyright (c) 2017 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\auth;

use MattFerris\Provider\ProviderInterface;
use MattFerris\Auth\Authenticator;

class ServicesProvider implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function provides($consumer)
    {
        $consumer->set('Auth', new Authenticator());
    }
}
