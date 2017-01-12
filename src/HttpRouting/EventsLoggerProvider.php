<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * www.bueller.ca/bridge-components
 *
 * HttpRouting/EventsLoggerProvider.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/bridge-components/license
 */

namespace MattFerris\Bridge\Components\HttpRouting;

use MattFerris\Provider\ProviderInterface;
use MattFerris\Http\Routing\DomainEventLoggerHelpers;

class EventsLoggerProvider implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function provides($consumer)
    {
        DomainEventLoggerHelpers::addHelpers($consumer);
    }
}
