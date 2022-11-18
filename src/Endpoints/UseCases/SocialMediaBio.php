<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write introduction & about me bios for your profile from WriteSonic
 * Write creative and engaging bios for your social media handles including LinkedIn, Instagram, Twitter, Facebook, and more!
 */
final class SocialMediaBio extends AbstractUseCase
{
    public const PARAMS = ['ABOUT_YOU_LABEL'];
    public const USECASEID = '60633095de064b000c8f5cc8';

    /** @var string */
    protected string $aboutYou;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $aboutYou)
    {
        $this->aboutYou = $aboutYou;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor aboutYou attribute
     *
     * @return string
     */
    public function getAboutYou(): string
    {
        return $this->aboutYou ?? $this->about_you_label ?? null;

    }

    /**
     * Setter aboutYou attribute
     *
     * @return self
     */
    public function setAboutYou($value): self
    {
        $this->aboutYou = $value;
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
               "ABOUT_YOU_LABEL" => $this->getAboutYou(),
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
