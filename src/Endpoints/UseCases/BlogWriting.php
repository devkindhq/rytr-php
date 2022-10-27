<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write articles based on section topics & headlines from WriteSonic
 * Write engaging introduction and section paragraphs for your blog
 */
final class BlogWriting extends \AbstractUseCase
{
    public const PARAMS = ['SECTION_TOPIC_LABEL', 'SECTION_KEYWORDS_LABEL'];
    public const USECASEID = '60584cf2c2cdaa000c2a7954';

    /** @var string */
    protected string $sectionTopic;

    /** @var string */
    protected string $sectionKeywords;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $sectionTopic, string $sectionKeywords)
    {
        $this->sectionTopic = $sectionTopic;
        $this->sectionKeywords = $sectionKeywords;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor sectionTopic attribute
     *
     * @return string
     */
    public function getSectionTopic(): string
    {
        return $this->sectionTopic;
    }

    /**
     * Setter sectionTopic attribute
     *
     * @return self
     */
    public function setSectionTopic($value): self
    {
        $this->sectionTopic = $value;
        return $this;
    }

    /**
     * Accessor sectionKeywords attribute
     *
     * @return string
     */
    public function getSectionKeywords(): string
    {
        return $this->sectionKeywords;
    }

    /**
     * Setter sectionKeywords attribute
     *
     * @return self
     */
    public function setSectionKeywords($value): self
    {
        $this->sectionKeywords = $value;
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
               "SECTION_TOPIC_LABEL" => $this->getSectionTopic(),
               "SECTION_KEYWORDS_LABEL" => $this->getSectionKeywords(),
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
