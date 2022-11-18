<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate Ad copies for your product or brand from WriteSonic
 * Write creative and original advertisement copies for Facebook, Twitter, LinkedIn, and other social media channels.
 */
final class FacebookTwitterLinkedinAds extends AbstractUseCase
{
    public const PARAMS = ['PRODUCT_NAME_LABEL', 'PRODUCT_DESCRIPTION_LABEL'];
    public const USECASEID = '60572a629bdd4272b8fe3585';

    /** @var string */
    protected string $productName;

    /** @var string */
    protected string $productDescription;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $productName, string $productDescription)
    {
        $this->productName = $productName;
        $this->productDescription = $productDescription;
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
     * Accessor productDescription attribute
     *
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->productDescription ?? $this->product_description_label ?? null;

    }

    /**
     * Setter productDescription attribute
     *
     * @return self
     */
    public function setProductDescription($value): self
    {
        $this->productDescription = $value;
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
               "PRODUCT_DESCRIPTION_LABEL" => $this->getProductDescription(),
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
