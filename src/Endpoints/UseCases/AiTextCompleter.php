<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Append a few words at the end of a given text from WriteSonic
 * Let AI text completer finish sentences and paragraphs for you
 */
final class AiTextCompleter extends AbstractUseCase
{
    public const PARAMS = ['INPUT_TEXT_LABEL'];
    public const USECASEID = '6092917aa9c7620013304f43';

    /** @var string */
    protected string $inputText;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $inputText)
    {
        $this->inputText = $inputText;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor inputText attribute
     *
     * @return string
     */
    public function getInputText(): string
    {
        return $this->inputText;
    }

    /**
     * Setter inputText attribute
     *
     * @return self
     */
    public function setInputText($value): self
    {
        $this->inputText = $value;
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
               "INPUT_TEXT_LABEL" => $this->getInputText(),
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
