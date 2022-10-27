<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write short description for your YouTube channel from WriteSonic
 * Generate a catchy description for your YouTube video channel to get more subscribers
 */
final class VideoChannelDescription extends AbstractUseCase
{
    public const PARAMS = ['CHANNEL_PURPOSE_LABEL'];
    public const USECASEID = '605856eec2cdaa000c2a7965';

    /** @var string */
    protected string $channelPurpose;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $channelPurpose)
    {
        $this->channelPurpose = $channelPurpose;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor channelPurpose attribute
     *
     * @return string
     */
    public function getChannelPurpose(): string
    {
        return $this->channelPurpose;
    }

    /**
     * Setter channelPurpose attribute
     *
     * @return self
     */
    public function setChannelPurpose($value): self
    {
        $this->channelPurpose = $value;
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
               "CHANNEL_PURPOSE_LABEL" => $this->getChannelPurpose(),
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
