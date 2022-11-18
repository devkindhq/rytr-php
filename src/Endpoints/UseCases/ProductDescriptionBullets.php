<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write a few bullet points for your product from WriteSonic
 * Generate catchy product descriptions to increase customer engagement & conversions for your e-commerce store or website.
 */
final class ProductDescriptionBullets extends AbstractUseCase
{
    public const PARAMS = ['PRODUCT_NAME_LABEL', 'PRODUCT_FEATURES_LABEL'];
    public const USECASEID = '60bb65ca12ba07000cdc8f64';

    /** @var string */
    protected string $productName;

    /** @var string */
    protected string $productFeatures;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $productName, string $productFeatures)
    {
        $this->productName = $productName;
        $this->productFeatures = $productFeatures;
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
     * Accessor productFeatures attribute
     *
     * @return string
     */
    public function getProductFeatures(): string
    {
        return $this->productFeatures ?? $this->product_features_label ?? null;
    }

    /**
     * Setter productFeatures attribute
     *
     * @return self
     */
    public function setProductFeatures($value): self
    {
        $this->productFeatures = $value;
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
               "PRODUCT_FEATURES_LABEL" => $this->getProductFeatures(),
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
