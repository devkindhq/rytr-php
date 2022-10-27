<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate SEO-friendly meta title for the page from WriteSonic
 * Write SEO optimized meta titles for your website and blog posts
 */
final class SeoTitle extends AbstractUseCase
{
    public const PARAMS = ['TARGET_KEYWORDS_LABEL'];
    public const USECASEID = '60583a058c0a4a000c69c96d';

    /** @var string */
    protected string $targetKeywords;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $targetKeywords)
    {
        $this->targetKeywords = $targetKeywords;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor targetKeywords attribute
     *
     * @return string
     */
    public function getTargetKeywords(): string
    {
        return $this->targetKeywords;
    }

    /**
     * Setter targetKeywords attribute
     *
     * @return self
     */
    public function setTargetKeywords($value): self
    {
        $this->targetKeywords = $value;
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
               "TARGET_KEYWORDS_LABEL" => $this->getTargetKeywords(),
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
