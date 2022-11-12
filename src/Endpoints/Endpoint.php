<?php

namespace Devkind\RytrPhp\Endpoints;

use GuzzleHttp\Psr7\Utils;
use InvalidArgumentException;

use Devkind\RytrPhp\Rytr as RytrPhp;


/**
 * Class Endpoint.
 *
 * @mixin RytrPhp
 *
 * @property array payload
 * @property RytrPhp client
 */
class Endpoint
{

    /** @var array */
    protected array $payload = [];


    /** @var RytrPhp $client */
    protected $client;

    /**
     * Endpoint constructor.
     *
     * @param RytrPhp $client
     */
    public function __construct(RytrPhp $client)
    {
        $this->client = $client;
    }

    /**
     * Set our endpoint by accessing it via a property.
     *
     * @param string $property
     *
     * @return $this
     */
    public function __get($property)
    {
        return $this->$property ?? $this->client->__get($property);
    }

    /**
     * Handle dynamic method calls into the model.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return $method();
        }

        return $this->client->$method(...$parameters);
    }

    /**
     * perform HTTP call.
     */
    public function request(string $method, string $endpoint, string $parameters)
    {
        $stream = $parameters == '[]' ? '' : Utils::streamFor($parameters);

        $request = $this->client->request(
            $method,
            $endpoint,
            ['body' => $stream]
        );

        $data = json_decode($request->getBody()->getContents(), true);
        return $data['data'] ?? $data;
    }


    public function get(?array $payload = [])
    {
        $payload = count($payload) == 0 ? $this->payload : $payload;
        $payload = count($payload) == 0 ? json_decode($this->toString(), true) : $payload;

        return $this->request($this->getMethod(), $this->getEndpoint(), json_encode($payload));
    }

    /**
     * JSON representation of this endpoint
     *
     * @return string
     */
    public function toString(): string
    {
        return json_encode($this->toArray(), true);
    }

}
