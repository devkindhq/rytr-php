<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Turn a few key points into a ready to send email from WriteSonic
 * Create catchy emails for marketing, sales, engagement, & more in seconds
 */
final class Email extends AbstractUseCase
{
    public const PARAMS = ['KEY_POINTS_LABEL'];
    public const USECASEID = '60572a629bdd4272b8fe3588';

    /** @var string */
    protected string $keyPoints;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $keyPoints)
    {
        $this->keyPoints = $keyPoints;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor keyPoints attribute
     *
     * @return string
     */
    public function getKeyPoints(): string
    {
        return $this->keyPoints;
    }

    /**
     * Setter keyPoints attribute
     *
     * @return self
     */
    public function setKeyPoints($value): self
    {
        $this->keyPoints = $value;
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
               "KEY_POINTS_LABEL" => $this->getKeyPoints(),
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
