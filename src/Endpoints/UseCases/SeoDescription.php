<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate SEO-friendly meta description for the page from WriteSonic
 * Write SEO optimized meta description content for any page, blog, or website
 */
final class SeoDescription extends \AbstractUseCase
{
    public const PARAMS = ['PAGE_META_TITLE_LABEL'];
    public const USECASEID = '60583ac98c0a4a000c69c96f';

    /** @var string */
    protected string $pageMetaTitle;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $pageMetaTitle)
    {
        $this->pageMetaTitle = $pageMetaTitle;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor pageMetaTitle attribute
     *
     * @return string
     */
    public function getPageMetaTitle(): string
    {
        return $this->pageMetaTitle;
    }

    /**
     * Setter pageMetaTitle attribute
     *
     * @return self
     */
    public function setPageMetaTitle($value): self
    {
        $this->pageMetaTitle = $value;
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
               "PAGE_META_TITLE_LABEL" => $this->getPageMetaTitle(),
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
