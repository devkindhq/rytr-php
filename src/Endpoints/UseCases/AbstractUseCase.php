<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

use InvalidArgumentException;
use Devkind\RytrPhp\Endpoints\Endpoint;
use Devkind\RytrPhp\ILanguages;

/**
 * Endpoint class to get Google Ads from Rytr
 *
 *
 * <b> Quality ads that rank in the search results and drive more traffic. </b>
 */
abstract class AbstractUseCase extends Endpoint
{

    public const ENDPOINT = '/v1/ryte';

    public const PARAMS = [];

    public const METHOD = 'POST';

    /** @var string $language */
    protected $language = '607adac76f8fe5000c1e636d'; //english

    /** @var string $toneId */
    protected $tone = '605820c030f7b1000c1c4f89';

    /** @var string $useCaseId */
    protected string $useCaseId;

    /** @var array $inputContexts */
    protected array $inputContexts;

    /** @var int $variations */
    protected int $variations = 1;

    /** @var string $userId */
    protected string $userId;

    /** @var string $format */
    protected string $format = 'text';

    /** @var string $creativityLevel */
    protected string $creativityLevel = 'default';

    /**
     * Get the value of inputContexts
     */
    abstract public function getInputContexts();

    /**
     * Get the value of useCaseId
     */
    abstract  public function getUseCaseId();

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
        if (!in_array($value, ILanguages::LANGUAGES)) {
            throw new InvalidArgumentException("Invalid language given, language could be one of " . implode(', ', ILanguages::LANGUAGES));
        }
        $this->language = $value;
        return;
    }

    /**
     * set the value of tone
     */
    public function setTone($value = 'economy')
    {
        if (!in_array($value, ['economy', 'business'])) {
            throw new InvalidArgumentException("Invalid language given, language could be one of " . implode(', ', ['economy', 'business']));
        }

        $this->tone = $value;
        return;
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
     * @return string
     */
    public function getMethod(): string
    {
        return self::METHOD;
    }

    /**
     * Get the value of variations
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * Set the value of variations
     *
     * @return  self
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;

        return $this;
    }

    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId ?? random_int(99, 9999);
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of format
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get the value of creativityLevel
     */
    public function getCreativityLevel()
    {
        return $this->creativityLevel;
    }

    /**
     * Set the value of creativityLevel
     *
     * @return  self
     */
    public function setCreativityLevel($creativityLevel)
    {
        $this->creativityLevel = $creativityLevel;

        return $this;
    }

    public function get(?array $payload = [])
    {

        $payload = $this->makePayload($payload);

        var_export($payload);
        if (count(array_intersect_key(array_flip($this->getParams()), $payload['inputContexts'])) !== count($this->getParams())) {
            throw new \InvalidArgumentException(implode(",", array_diff($this->getParams(), array_keys($payload))) . "are missing in the payload");
        }

        return $this->request(
            $this->getMethod(),
            $this->getEndpoint(),
            json_encode($payload)
        );
    }

    private function makePayload(?array $payload = [])
    {
        if(count($payload) > 0){
            foreach ($payload as $key => $value) { 
                $this->{$key} = $value;
            }
        }

        $payload = count($payload) == 0 ? $this->getInputContexts() : $payload;

        if (is_null($payload) || count($payload) == 0) {
            throw new \InvalidArgumentException("Payload is required to make a call.");
        }

        $body = $this->toArray();

        foreach (array_keys($body) as $key) {
            $payload[$key] = isset($payload[$key]) ? $payload[$key] : $body[$key];
        }

        return $payload;

    }


    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [
                "languageId" => $this->getLanguage(),
                "toneId" => $this->getTone(),
                "useCaseId" => $this->getUseCaseId(),
                "inputContexts" => $this->getInputContexts(),
                "variations" => $this->getVariations(),
                "userId" => $this->getUserId(),
                "format" => $this->getFormat(),
                "creativityLevel" => $this->getCreativityLevel()
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException($th->getMessage());
        }
    }
}
