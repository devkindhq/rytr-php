<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;
 
/**
 * Endpoint class to get Aida from WriteSonic
 *
 *
 * <b> Tried and tested formula of Attention, Interest, Desire, Action that is proven to convert. </b>
 */
final class BrandName extends AbstractUseCase
{
    public const USECASEID = '61e0224822cc129b33031a80';
    public const PARAMS = ['BRAND_DESCRIPTION_LABEL'];


    /** @var string */
    protected string $brand_description;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $brand_description)
    {
        $this->brand_description = $brand_description;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor brand_description attribute
     *
     * @return string
     */
    public function getBrandDescription(): ?string
    {
        return $this->brand_description ?? null;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setBrandDescription(string $value): self
    {
        $this->brand_description = $value;
        return $this;
    }


    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getUseCaseId(): string
    {
        return self::USECASEID;
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
     * Array representation of this endpoint
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
}
