<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * Logging/ServicesProvider.php
 * @copyright Copyright (c) 2017 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\Logging;

use MattFerris\Provider\ProviderInterface;
use MattFerris\Configuration\ConfigurationInterface;
use MattFerris\Logging\Logger;
use MattFerris\Logging\Helper\InterpolationHelper;
use MattFerris\Logging\Handler\FileHandler;
use Psr\Log\LogLevel;

class ServicesProvider implements ProviderInterface
{
    /**
     * @var MattFerris\Configuration\ConfigurationInterface
     */
    protected $config;

    /**
     * @param MattFerris\Configuration\ConfigurationInterface $config
     */
    public function __construct(ConfigurationInterface $config)
    {
        $this->config = $config;
    }

    /**
     * {@inheritDoc}
     */
    public function provides($consumer)
    {
        $handlers = [];

        if ($this->config->has('app.logfile')) {
            $handlers[] = [
                'handlers' => new FileHandler($this->config->get('app.logfile')),
                'maxlevel' => LogLevel::WARNING
            ];
        }

        if ($this->config->has('app.debugfile')) {
            $handlers[] = [
                'handlers' => new FileHandler($this->config->get('app.debugfile'))
            ];
        }

        $logger = new Logger($handlers, [new InterpolationHelper()]);
        $consumer->set('Logger', $logger);
    }
}
