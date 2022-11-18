<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate ideas and content structure for articles from WriteSonic
 * The easiest way to come up with catchy blog, essay, and article topics and content structures using AI writing assistant
 */
final class BlogIdeaOutline extends AbstractUseCase
{
    public const PARAMS = ['PRIMARY_KEYWORD_LABEL'];
    public const USECASEID = '60a40cf5da9d76000ccc2828';

    /** @var string */
    protected string $primaryKeyword;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $primaryKeyword)
    {
        $this->primaryKeyword = $primaryKeyword;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor primaryKeyword attribute
     *
     * @return string
     */
    public function getPrimaryKeyword(): string
    {
        return $this->primaryKeyword ?? $this->primary_keyword_label ?? null;
    }

    /**
     * Setter primaryKeyword attribute
     *
     * @return self
     */
    public function setPrimaryKeyword($value): self
    {
        $this->primaryKeyword = $value;
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
               "PRIMARY_KEYWORD_LABEL" => $this->getPrimaryKeyword(),
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
