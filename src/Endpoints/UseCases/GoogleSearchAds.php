<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate Google ad copies for your product from WriteSonic
 * Write creative and original advertisement copies for responsive Google ads
 */
final class GoogleSearchAds extends AbstractUseCase
{
    public const PARAMS = ['PRODUCT_NAME_LABEL', 'PRODUCT_DESCRIPTION_LABEL', 'TARGET_KEYWORD_LABEL'];
    public const USECASEID = '6163f3445bb5990332c018b1';

    /** @var string */
    protected string $productName;

    /** @var string */
    protected string $productDescription;

    /** @var string */
    protected string $targetKeyword;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $productName, string $productDescription, string $targetKeyword)
    {
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->targetKeyword = $targetKeyword;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor productName attribute
     *
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
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
        return $this->productDescription;
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
     * Accessor targetKeyword attribute
     *
     * @return string
     */
    public function getTargetKeyword(): string
    {
        return $this->targetKeyword;
    }

    /**
     * Setter targetKeyword attribute
     *
     * @return self
     */
    public function setTargetKeyword($value): self
    {
        $this->targetKeyword = $value;
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
               "TARGET_KEYWORD_LABEL" => $this->getTargetKeyword(),
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
