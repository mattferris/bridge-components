<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * HttpRouting/EventsProvider.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\HttpRouting;

use MattFerris\Provider\ProviderInterface;
use MattFerris\Http\Routing\DomainEvents;

class EventsProvider implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function provides($consumer)
    {
        DomainEvents::setDispatcher($consumer);
    }
}
