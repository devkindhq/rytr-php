<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write brief description for your product or feature from WriteSonic
 * Generate compelling product descriptions to increase customer engagement & conversions for your e-commerce store or website.
 */
final class ProductDescription extends AbstractUseCase
{
    public const PARAMS = ['PRODUCT_NAME_LABEL', 'ABOUT_PRODUCT_LABEL'];
    public const USECASEID = '605832f78c0a4a000c69c960';

    /** @var string */
    protected string $productName;

    /** @var string */
    protected string $aboutProduct;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $productName, string $aboutProduct)
    {
        $this->productName = $productName;
        $this->aboutProduct = $aboutProduct;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor productName attribute
     *
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName ?? $this->product_name_label ?? null;
    }

    /**
     * Setter productName attribute
     *
     * @return self
     */
    public function setProductName($value): self
    {
        $this->productName = $value;
        return $this;
    }

    /**
     * Accessor aboutProduct attribute
     *
     * @return string
     */
    public function getAboutProduct(): string
    {
        return $this->aboutProduct ?? $this->about_product_label ?? null;
    }

    /**
     * Setter aboutProduct attribute
     *
     * @return self
     */
    public function setAboutProduct($value): self
    {
        $this->aboutProduct = $value;
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
               "PRODUCT_NAME_LABEL" => $this->getProductName(),
               "ABOUT_PRODUCT_LABEL" => $this->getAboutProduct(),
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
