<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate interview questions for job roles, podcasts, & shows from WriteSonic
 * Prepare thoughtful and interesting interview questions for any job, podcast, or show
 */
final class InterviewQuestions extends AbstractUseCase
{
    public const PARAMS = ['INTERVIEWEE_BIO_LABEL', 'INTERVIEW_CONTEXT_LABEL'];
    public const USECASEID = '6058693ccdebbb000c210588';

    /** @var string */
    protected string $intervieweeBio;

    /** @var string */
    protected string $interviewContext;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $intervieweeBio, string $interviewContext)
    {
        $this->intervieweeBio = $intervieweeBio;
        $this->interviewContext = $interviewContext;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor intervieweeBio attribute
     *
     * @return string
     */
    public function getIntervieweeBio(): string
    {
        return $this->intervieweeBio ?? $this->interviewee_bio_label ?? null;        
    }

    /**
     * Setter intervieweeBio attribute
     *
     * @return self
     */
    public function setIntervieweeBio($value): self
    {
        $this->intervieweeBio = $value;
        return $this;
    }

    /**
     * Accessor interviewContext attribute
     *
     * @return string
     */
    public function getInterviewContext(): string
    {
        return $this->interviewContext ?? $this->interview_context_label ?? null;        
    }

    /**
     * Setter interviewContext attribute
     *
     * @return self
     */
    public function setInterviewContext($value): self
    {
        $this->interviewContext = $value;
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
               "INTERVIEWEE_BIO_LABEL" => $this->getIntervieweeBio(),
               "INTERVIEW_CONTEXT_LABEL" => $this->getInterviewContext(),
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
