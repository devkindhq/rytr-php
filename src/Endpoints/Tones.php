<?php

namespace Devkind\RytrPhp\Endpoints;

/**
 * Endpoint class to get Google Ads from Rytr
 *
 *
 * <b> Quality ads that rank in the search results and drive more traffic. </b>
 */
final class Tones extends Endpoint
{
    public const ENDPOINT = '/v1/tones';

    public const PARAMS = [];

    public const METHOD = 'GET';

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate($identifier = '')
    {
        return $this->request(
            self::METHOD,
            self::ENDPOINT . (strlen($identifier) == 0 ? '' : '/' . $identifier),
            $this->toString()
        );
    }

    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getParams(): array
    {
        return self::PARAMS;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getMethod(): string
    {
        return self::METHOD;
    }

    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
