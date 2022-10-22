<?php

namespace Devkind\RytrPhp\Endpoints;

use GuzzleHttp\Psr7\Utils;
use InvalidArgumentException;
use Devkind\RytrPhp\Endpoints;

use Devkind\RytrPhp\Rytr as RytrPhp;


/**
 * Class Endpoint.
 *
 * @mixin RytrPhp
 *
 * @property string endpoint
 * @property array ids
 */
class Endpoint implements Endpoints
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

        if (in_array($method, array_keys(static::ENDPOINTS))) {
            if ($parameters === []) {
                throw new InvalidArgumentException('Calling ' . $method . ' from ' . $this->client->api . ' requires an id');
            }

            return $this->client->$method(...$parameters);
        }

        return $this->client->$method(...$parameters);
    }

    /**
     * Get the value of language
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
        // if (is_null($payload) || count($payload) == 0) {
        //     throw new \InvalidArgumentException("Payload is required to make a call.");
        // }

        // if (count(array_intersect_key(array_flip($this->getParams()), $payload)) !== count($this->getParams())) {
        //     throw new \InvalidArgumentException(implode(",", array_diff($this->getParams(), array_keys($payload))) . "are missing in the payload");
        // }

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
