<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate review for people, product, or service from WriteSonic
 * Quickly write candid testimonials and reviews for people and services
 */
final class TestimonialReviewGenerator extends AbstractUseCase
{
    public const PARAMS = ['NAME_LABEL', 'REVIEW_TITLE_LABEL'];
    public const USECASEID = '607c7ae91ebe15000cbbc7af';

    /** @var string */
    protected string $name;

    /** @var string */
    protected string $reviewTitle;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $name, string $reviewTitle)
    {
        $this->name = $name;
        $this->reviewTitle = $reviewTitle;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor name attribute
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name ?? $this->name_label ?? null;
    }

    /**
     * Setter name attribute
     *
     * @return self
     */
    public function setName($value): self
    {
        $this->name = $value;
        return $this;
    }

    /**
     * Accessor reviewTitle attribute
     *
     * @return string
     */
    public function getReviewTitle(): string
    {
        return $this->reviewTitle ?? $this->review_title_label ?? null;
    }

    /**
     * Setter reviewTitle attribute
     *
     * @return self
     */
    public function setReviewTitle($value): self
    {
        $this->reviewTitle = $value;
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
               "NAME_LABEL" => $this->getName(),
               "REVIEW_TITLE_LABEL" => $this->getReviewTitle(),
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
