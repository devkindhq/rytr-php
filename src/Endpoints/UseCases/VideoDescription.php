<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write short description for your YouTube video from WriteSonic
 * Let AI generate an engaging description for your video to hook your subscribers and audience
 */
final class VideoDescription extends \AbstractUseCase
{
    public const PARAMS = ['VIDEO_TITLE_LABEL'];
    public const USECASEID = '6058536ec2cdaa000c2a795e';

    /** @var string */
    protected string $videoTitle;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $videoTitle)
    {
        $this->videoTitle = $videoTitle;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor videoTitle attribute
     *
     * @return string
     */
    public function getVideoTitle(): string
    {
        return $this->videoTitle;
    }

    /**
     * Setter videoTitle attribute
     *
     * @return self
     */
    public function setVideoTitle($value): self
    {
        $this->videoTitle = $value;
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
               "VIDEO_TITLE_LABEL" => $this->getVideoTitle(),
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
