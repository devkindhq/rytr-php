<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate a couple of sentences on any topic from WriteSonic
 * Use AI writer to quickly generate convincing short descriptions on any topic
 */
final class ParagraphContent extends AbstractUseCase
{
    public const PARAMS = ['TOPIC_LABEL'];
    public const USECASEID = '60b877a110f2fb000cb004eb';

    /** @var string */
    protected string $topic;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $topic)
    {
        $this->topic = $topic;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor topic attribute
     *
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * Setter topic attribute
     *
     * @return self
     */
    public function setTopic($value): self
    {
        $this->topic = $value;
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
               "TOPIC_LABEL" => $this->getTopic(),
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
