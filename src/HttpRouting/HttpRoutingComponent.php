<?php

/**
 * bridge-components - Bridge components for mattferris/application
 * www.bueller.ca/bridge-components
 *
 * HttpRouting/HttpRoutingComponent.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/bridge-components/license
 */

namespace MattFerris\Bridge\Components\HttpRouting;

use MattFerris\Application\Component;
use MattFerris\Http\Routing\DispatcherInterface;
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
     */
    static public function run()
    {
        $request = ServerRequestFactory::fromGlobals();
        $response = $this->container->get('HttpDispatcher')->dispatch($request);
        (new SapiEmitter())->emit($response);
    }
}
