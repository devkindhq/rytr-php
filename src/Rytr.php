<?php

namespace Devkind\RytrPhp;

use GuzzleHttp\Client;
use InvalidArgumentException;
use Devkind\RytrPhp\Util;


class Rytr extends Client
{

    public const HOST = 'https://api.rytr.me/';

    /** @var string $base */
    protected $base = '';

    /** @var string $base */
    protected $token = '';

    /** @var string $root */
    protected $root = '';

    /**
     * Rytr constructor.
     *
     * @param string $token
     * @param string $root
     */
    public function __construct($token, $base =  'v1')
    {
        $this->root = Util::normalizeDomain(static::HOST);
        $base_uri = "https://{$this->root}";
        
        $this->token = $token;

        $this->setBase($base);
        parent::__construct([
            'base_uri' => $base_uri,
            'headers' => $this->getHeaders()
        ]);
    }

    /**
     * @param string $root
     * @param string $token
     *
     * @return Rytr
     */
    public static function make($token, $base = 'v1')
    {
        return new static($token, $base);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return [
                'Authentication' => 'Bearer '.  $this->token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ];
    }
    /**
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param string|null $base
     *
     * @return $this
     */
    public function setBase($base = null)
    {
        if (is_null($base)) {
            $this->base = '';
            return $this;
        }

        $this->base = $base;

        return $this;
    }

    /**
     * Set our endpoint by accessing it like a property.
     *
     * @param string $endpoint
     *
     * @return $this|Endpoint
     * @throws \Exception
     */
    public function __get($endpoint)
    {
        $className = "Devkind\\RytrPhp\\Endpoints\\" . ucfirst(Util::camelize($endpoint));
        if (class_exists($className)) {
            return new $className($this);
        }

        $className = "Devkind\\RytrPhp\\Endpoints\\UseCases\\" . $endpoint;
        if (class_exists($className)) {
            return new $className($this);
        }

        // If user tries to access property that doesn't exist, scold them.
        throw new \RuntimeException('Property does not exist on API');
    }

    /**
     * Set ids for one uri() call.
     *
     * @param string $method
     * @param array  $parameters
     *
     *
     * @return $this
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return $method();
        }
        return $this->__get($method);
    }


    /**
     * Get the value of root
     */
    public function getRoot()
    {
        return $this->root;
    }
}
