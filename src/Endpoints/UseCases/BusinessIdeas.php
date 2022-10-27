<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate business ideas based on your interest & skills from WriteSonic
 * Find unique startup ideas & opportunities tailored to your skills & passion
 */
final class BusinessIdeas extends AbstractUseCase
{
    public const PARAMS = ['INTEREST_LABEL', 'SKILLS_LABEL'];
    public const USECASEID = '61e1167527174a50fdcb55e3';

    /** @var string */
    protected string $interest;

    /** @var string */
    protected string $skills;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $interest, string $skills)
    {
        $this->interest = $interest;
        $this->skills = $skills;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor interest attribute
     *
     * @return string
     */
    public function getInterest(): string
    {
        return $this->interest;
    }

    /**
     * Setter interest attribute
     *
     * @return self
     */
    public function setInterest($value): self
    {
        $this->interest = $value;
        return $this;
    }

    /**
     * Accessor skills attribute
     *
     * @return string
     */
    public function getSkills(): string
    {
        return $this->skills;
    }

    /**
     * Setter skills attribute
     *
     * @return self
     */
    public function setSkills($value): self
    {
        $this->skills = $value;
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
               "INTEREST_LABEL" => $this->getInterest(),
               "SKILLS_LABEL" => $this->getSkills(),
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
