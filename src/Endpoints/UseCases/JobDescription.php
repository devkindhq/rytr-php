<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write a job description based on the role from WriteSonic
 * Create engaging job descriptions for any position to attract the best candidates
 */
final class JobDescription extends AbstractUseCase
{
    public const PARAMS = ['JOB_ROLE_LABEL'];
    public const USECASEID = '60586b31cdebbb000c21058d';

    /** @var string */
    protected string $jobRole;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $jobRole)
    {
        $this->jobRole = $jobRole;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor jobRole attribute
     *
     * @return string
     */
    public function getJobRole(): string
    {
        return $this->jobRole ?? $this->job_role_label ?? null;        
    }

    /**
     * Setter jobRole attribute
     *
     * @return self
     */
    public function setJobRole($value): self
    {
        $this->jobRole = $value;
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
               "JOB_ROLE_LABEL" => $this->getJobRole(),
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
