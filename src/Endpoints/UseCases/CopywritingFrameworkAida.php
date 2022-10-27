<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate marketing copies in AIDA format from WriteSonic
 * Use Rytr's AI copywriting software to generate creative & catchy copies in AIDA format for your product, service, company, or brand
 */
final class CopywritingFrameworkAida extends AbstractUseCase
{
    public const PARAMS = ['PRODUCT_OR_BRAND_DESCRIPTION_LABEL'];
    public const USECASEID = '60d19b16d63485000cab8c15';

    /** @var string */
    protected string $productOrBrandDescription;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $productOrBrandDescription)
    {
        $this->productOrBrandDescription = $productOrBrandDescription;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor productOrBrandDescription attribute
     *
     * @return string
     */
    public function getProductOrBrandDescription(): string
    {
        return $this->productOrBrandDescription;
    }

    /**
     * Setter productOrBrandDescription attribute
     *
     * @return self
     */
    public function setProductOrBrandDescription($value): self
    {
        $this->productOrBrandDescription = $value;
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
               "PRODUCT_OR_BRAND_DESCRIPTION_LABEL" => $this->getProductOrBrandDescription(),
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
