<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write engaging micro-copies for SMS or app notifications from WriteSonic
 * Generate creative and catchy notifications for your business that brings customers back
 */
final class SmsNotifications extends \AbstractUseCase
{
    public const PARAMS = ['CONTEXT_LABEL'];
    public const USECASEID = '6163fe7b1d5d06c1e9693346';

    /** @var string */
    protected string $context;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $context)
    {
        $this->context = $context;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor context attribute
     *
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }

    /**
     * Setter context attribute
     *
     * @return self
     */
    public function setContext($value): self
    {
        $this->context = $value;
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
               "CONTEXT_LABEL" => $this->getContext(),
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
