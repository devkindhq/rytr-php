<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate ideas & intro text for your social media posts from WriteSonic
 * Generate engaging ideas for your Facebook, LinkedIn, and Instagram posts & captions
 */
final class PostCaptions extends AbstractUseCase
{
    public const PARAMS = ['POST_TOPIC_LABEL'];
    public const USECASEID = '6062d819be972a000c6a05a3';

    /** @var string */
    protected string $postTopic;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $postTopic)
    {
        $this->postTopic = $postTopic;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor postTopic attribute
     *
     * @return string
     */
    public function getPostTopic(): string
    {
        return $this->postTopic;
    }

    /**
     * Setter postTopic attribute
     *
     * @return self
     */
    public function setPostTopic($value): self
    {
        $this->postTopic = $value;
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
               "POST_TOPIC_LABEL" => $this->getPostTopic(),
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
