<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * github.com/mattferris/bridge-components
 *
 * HttpRouting/HttpRoutingComponent.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * github.com/mattferris/bridge-components/blob/master/LICENSE
 */

namespace MattFerris\Bridge\Components\HttpRouting;

use MattFerris\Application\Component;
use MattFerris\Http\Routing\DispatcherInterface;
use MattFerris\Di\ContainerInterface;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response\SapiEmitter;

class HttpRoutingComponent extends Component
{
    /**
     * @var array Providers
     */
    protected $providers = [
        'Routing' => [
            'consumer' => DispatcherInterface::class,
            'scope' => 'global',
        ],
    ];

    /**
     * Bootstrap an HTTP request/response cycle
     *
     * @param \MattFerris\Di\ContainerInterface $container
     */
    static public function run(ContainerInterface $container)
    {
        $request = ServerRequestFactory::fromGlobals();
        $response = $container->get('HttpDispatcher')->dispatch($request);
        (new SapiEmitter())->emit($response);
    }
}
