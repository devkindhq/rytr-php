<?php

namespace Devkind\RytrPhp\Endpoints\UseCases;

/**
 * Endpoint class to get Write sections of website based on its features from WriteSonic
 * Generate creative and persuasive copies for sections of your landing page
 */
final class WebsiteLandingPage extends AbstractUseCase
{
    public const PARAMS = ['WEBSITE_NAME_LABEL', 'ABOUT_WEBSITE_LABEL', 'FEATURES_LABEL'];
    public const USECASEID = '605835258c0a4a000c69c962';

    /** @var string */
    protected string $websiteName;

    /** @var string */
    protected string $aboutWebsite;

    /** @var string */
    protected string $features;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $websiteName, string $aboutWebsite, string $features)
    {
        $this->websiteName = $websiteName;
        $this->aboutWebsite = $aboutWebsite;
        $this->features = $features;
        return $this->request(parent::METHOD, self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor websiteName attribute
     *
     * @return string
     */
    public function getWebsiteName(): string
    {
        return $this->websiteName ?? $this->website_name_label ?? null;
    }

    /**
     * Setter websiteName attribute
     *
     * @return self
     */
    public function setWebsiteName($value): self
    {
        $this->websiteName = $value;
        return $this;
    }

    /**
     * Accessor aboutWebsite attribute
     *
     * @return string
     */
    public function getAboutWebsite(): string
    {
        return $this->aboutWebsite ?? $this->about_website_label ?? null;
    }

    /**
     * Setter aboutWebsite attribute
     *
     * @return self
     */
    public function setAboutWebsite($value): self
    {
        $this->aboutWebsite = $value;
        return $this;
    }

    /**
     * Accessor features attribute
     *
     * @return string
     */
    public function getFeatures(): string
    {
        return $this->features ?? $this->features_label ?? null;
    }

    /**
     * Setter features attribute
     *
     * @return self
     */
    public function setFeatures($value): self
    {
        $this->features = $value;
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
               "WEBSITE_NAME_LABEL" => $this->getWebsiteName(),
               "ABOUT_WEBSITE_LABEL" => $this->getAboutWebsite(),
               "FEATURES_LABEL" => $this->getFeatures(),
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
