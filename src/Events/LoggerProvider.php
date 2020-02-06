<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Events/LoggingProvider.php
 * @copyright Copyright (c) 2017 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\Events;

use MattFerris\Provider\ProviderInterface;
use MattFerris\Events\Logger;
use MattFerris\Events\DispatcherInterface;
use Psr\Log\LoggerInterface;

class LoggerProvider implements ProviderInterface
{
    /**
     * @var MattFerris\Events\DispaptcherInterface
     */
    protected $dispatcher;

    /**
     * @var Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @param MattFerris\Events\DispatcherInterface $dispatcher
     * @param Psr\Log\LoggerInterface $logger
     */
    public function __construct(DispatcherInterface $dispatcher, LoggerInterface $logger)
    {
        $this->dispatcher = $dispatcher;
        $this->logger = $logger;
    }

    /**
     * {@inheritDoc}
     */
    public function provides($consumer)
    {
        $consumer->set('EventLogger', new Logger($this->dispatcher, [$this->logger, 'info']));
    }
}
