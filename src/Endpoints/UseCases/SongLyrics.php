<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Generate short lyrics based on a song idea from WriteSonic
 * Write creative and original lyrics using Rytr's AI-powered song generator
 */
final class SongLyrics extends \AbstractUseCase
{
    public const PARAMS = ['SONG_IDEA_LABEL'];
    public const USECASEID = '60e6f4316ab0b5000c848c51';

    /** @var string */
    protected string $songIdea;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $songIdea)
    {
        $this->songIdea = $songIdea;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor songIdea attribute
     *
     * @return string
     */
    public function getSongIdea(): string
    {
        return $this->songIdea;
    }

    /**
     * Setter songIdea attribute
     *
     * @return self
     */
    public function setSongIdea($value): self
    {
        $this->songIdea = $value;
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
               "SONG_IDEA_LABEL" => $this->getSongIdea(),
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
