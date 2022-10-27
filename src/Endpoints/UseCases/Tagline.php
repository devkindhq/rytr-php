<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write short tagline for your product or brand from WriteSonic
 * Generate creative and catchy taglines and headlines for your LinkedIn bio, product, website, blog posts, or news articles.
 */
final class Tagline extends \AbstractUseCase
{
    public const PARAMS = ['DESCRIPTION_LABEL'];
    public const USECASEID = '605838118c0a4a000c69c968';

    /** @var string */
    protected string $description;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $description)
    {
        $this->description = $description;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor description attribute
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Setter description attribute
     *
     * @return self
     */
    public function setDescription($value): self
    {
        $this->description = $value;
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
               "DESCRIPTION_LABEL" => $this->getDescription(),
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
