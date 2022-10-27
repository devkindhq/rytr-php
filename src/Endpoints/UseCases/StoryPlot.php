<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate creative plot outline based on story ideas from WriteSonic
 * Quickly write engaging and creative fiction stories using AI
 */
final class StoryPlot extends \AbstractUseCase
{
    public const PARAMS = ['STORY_IDEA_LABEL'];
    public const USECASEID = '60cdad891d63cb00138240d3';

    /** @var string */
    protected string $storyIdea;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $storyIdea)
    {
        $this->storyIdea = $storyIdea;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor storyIdea attribute
     *
     * @return string
     */
    public function getStoryIdea(): string
    {
        return $this->storyIdea;
    }

    /**
     * Setter storyIdea attribute
     *
     * @return self
     */
    public function setStoryIdea($value): self
    {
        $this->storyIdea = $value;
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
               "STORY_IDEA_LABEL" => $this->getStoryIdea(),
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
