<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write a short pitch based on your product or business idea from WriteSonic
 * Write a clear and engaging startup pitch for your business ideas
 */
final class BusinessIdeaPitch extends AbstractUseCase
{
    public const PARAMS = ['BUSINESS_IDEA_LABEL'];
    public const USECASEID = '6062df03e20e7d000c15609b';

    /** @var string */
    protected string $businessIdea;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $businessIdea)
    {
        $this->businessIdea = $businessIdea;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor businessIdea attribute
     *
     * @return string
     */
    public function getBusinessIdea(): string
    {
        return $this->businessIdea;
    }

    /**
     * Setter businessIdea attribute
     *
     * @return self
     */
    public function setBusinessIdea($value): self
    {
        $this->businessIdea = $value;
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
               "BUSINESS_IDEA_LABEL" => $this->getBusinessIdea(),
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
