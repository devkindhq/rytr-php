<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write responses for messages, reviews, emails & more from WriteSonic
 * Let AI write engaging & thoughtful responses to customer reviews, private messages, professional emails, testimonials & more.
 */
final class ReplyResponseGenerator extends \AbstractUseCase
{
    public const PARAMS = ['MESSAGE_LABEL'];
    public const USECASEID = '611e40d404b47fc3a2297a37';

    /** @var string */
    protected string $message;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $message)
    {
        $this->message = $message;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor message attribute
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Setter message attribute
     *
     * @return self
     */
    public function setMessage($value): self
    {
        $this->message = $value;
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
               "MESSAGE_LABEL" => $this->getMessage(),
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
