<?php

namespace Devkind\RytrPhp\Endpoints;

use GuzzleHttp\Psr7\Utils;
use InvalidArgumentException;
use Devkind\RytrPhp\Endpoints;
use Devkind\RytrPhp\Languages;
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

    /** @var string $language */
    protected $language = 'en';

    /** @var string $toneId */
    protected $tone = '605820c030f7b1000c1c4f89';


    /** @var string $useCaseId */
    protected string $useCaseId;

    /** @var string $inputContexts */
    protected string $inputContexts;

    /** @var string $variations */
    protected string $variations;

    /** @var string $userId */
    protected string $userId;

    /** @var string $format */
    protected string $format;

    /** @var string $creativityLevel */
    protected string $creativityLevel;
    

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
            $this->getUrl($endpoint),
            ['body' => $stream]
        );

        $data = json_decode($request->getBody()->getContents(), true);
        return  $data;
    }


    /**
     * Get the value of URL
     */
    public function getUrl($endpoint)
    {
        return $endpoint . '?language=' . $this->getLanguage()  ;
    }

    /**
     * Get the value of language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Get the value of tone
     */
    public function getTone()
    {
        return $this->tone;
    }

    /**
     * Set the value of language
     */
    public function setLanguage($value = 'en')
    {
        if(!in_array($value, Languages::LANGUAGES)){
            throw new InvalidArgumentException("Invalid language given, language could be one of ". implode(', ', Languages::LANGUAGES));
        }
        $this->language = $value;
        return;
    }

    /**
     * set the value of tone
     */
    public function setTone($value = 'economy')
    {
        if(!in_array($value, ['economy', 'business'])){
            throw new InvalidArgumentException("Invalid language given, language could be one of ". implode(', ', ['economy', 'business']));
        }

        $this->tone = $value;
        return;
    }

    public function get(?array $payload = [])
    {
        $payload = count($payload) == 0 ? $this->payload : $payload;
        $payload = count($payload) == 0 ? json_decode($this->toString(), true) : $payload;
        
        if (is_null($payload) || count($payload) == 0) {
            throw new \InvalidArgumentException("Payload is required to make a call.");
        }
        
        if (count(array_intersect_key(array_flip($this->getRequiredParameters()), $payload)) !== count($this->getRequiredParameters())) {
            throw new \InvalidArgumentException(implode(",", array_diff($this->getRequiredParameters(), array_keys($payload))) . "are missing in the payload");
        }

        $this->request('GET', $this->getEndpoint(), json_encode($payload));
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
