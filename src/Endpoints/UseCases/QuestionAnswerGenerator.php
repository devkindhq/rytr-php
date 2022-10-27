<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate questions & answers based on a brief topic description from WriteSonic
 * Need to come up with questions & answers for Quora, company knowledge base, and more? Try out Rytr's AI Q&A generator.
 */
final class QuestionAnswerGenerator extends AbstractUseCase
{
    public const PARAMS = ['TOPIC_DESCRIPTION_LABEL'];
    public const USECASEID = '611e2a98045b460ef10242ce';

    /** @var string */
    protected string $topicDescription;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $topicDescription)
    {
        $this->topicDescription = $topicDescription;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor topicDescription attribute
     *
     * @return string
     */
    public function getTopicDescription(): string
    {
        return $this->topicDescription;
    }

    /**
     * Setter topicDescription attribute
     *
     * @return self
     */
    public function setTopicDescription($value): self
    {
        $this->topicDescription = $value;
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
               "TOPIC_DESCRIPTION_LABEL" => $this->getTopicDescription(),
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
