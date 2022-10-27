<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate marketing copies in PAS format from WriteSonic
 * Use Rytr's AI writing tool to create engaging and creative copies based on Problem, Agitate, and Solution copywriting framework.
 */
final class CopywritingFrameworkPas extends \AbstractUseCase
{
    public const PARAMS = ['PRODUCT_OR_BRAND_DESCRIPTION_LABEL'];
    public const USECASEID = '60d1ac3e548c6b000c8fce5b';

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
