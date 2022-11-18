<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate video ideas based on keywords & topics from WriteSonic
 * Let AI copywriter generate creative and interesting video ideas for your YouTube channel.
 */
final class VideoIdeas extends AbstractUseCase
{
    public const PARAMS = ['KEYWORDS_LABEL'];
    public const USECASEID = '60584ffdc2cdaa000c2a7957';

    /** @var string */
    protected string $keywords;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $keywords)
    {
        $this->keywords = $keywords;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor keywords attribute
     *
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords ?? $this->keywords_label ?? null;
    }

    /**
     * Setter keywords attribute
     *
     * @return self
     */
    public function setKeywords($value): self
    {
        $this->keywords = $value;
        return $this;
    }

    /**
     * JSON representation of this endpoint
     *
     * @return array
     */
    public function getInputContexts(): array
    {
        try {
            return [
               "KEYWORDS_LABEL" => $this->getKeywords(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
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
     * Accessor for getting UseCaseId attribute
     *
     * @return string
     */
    public function getUseCaseId(): string
    {
        return self::USECASEID;
    }
}
