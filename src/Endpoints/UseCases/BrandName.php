<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate unique names for your product or brand from WriteSonic
 * Use AI to come up with creative, quirky, and catchy names for your brand or business.
 */
final class BrandName extends AbstractUseCase
{
    public const PARAMS = ['BRAND_DESCRIPTION_LABEL'];
    public const USECASEID = '61e0224822cc129b33031a80';

    /** @var string */
    protected string $brandDescription;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $brandDescription)
    {
        $this->brandDescription = $brandDescription;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor brandDescription attribute
     *
     * @return string
     */
    public function getBrandDescription(): string
    {
        return $this->brandDescription;
    }

    /**
     * Setter brandDescription attribute
     *
     * @return self
     */
    public function setBrandDescription($value): self
    {
        $this->brandDescription = $value;
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
               "BRAND_DESCRIPTION_LABEL" => $this->getBrandDescription(),
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
