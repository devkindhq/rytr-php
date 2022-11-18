<?php

namespace Devkind\RytrPhp\Tests;

use Devkind\RytrPhp\Endpoints\Tones;
use Devkind\RytrPhp\Rytr as RytrPhp;
use Devkind\RytrPhp\Util;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class RytrPhpTest extends TestCase
{
    /**
     * @test
     */
    public function rytr_phpis_initialized_properly(): void
    {
        $object  =  new RytrPhp('test');

        $this->assertTrue(get_class($object->Tones) == Tones::class);

        $this->assertTrue($object->getRoot() == 'api.rytr.me');
    }


    /**
     * @test
     */
    public function rytr_phpis_initialized_properly_using_make(): void
    {
        $object  =  RytrPhp::make('test');
        $this->assertTrue(get_class($object->Tones) == Tones::class);
        $this->assertTrue($object->getRoot() == 'api.rytr.me');
    }


    /**
     * @test
     */
    public function rytr_throw_exception_in_case_of_invalid_endpoint(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            $this->assertTrue(get_class($object->Tones) == Tones::class);
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == RuntimeException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfInvalidCredientials(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            /** @var \Devkind\RytrPhp\Endpoints\Tones */
            $endpoint = $object->Tones;
            $this->assertTrue(is_array($endpoint->generate()));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfInvalidPayloadGiven(): void
    {
        try {
            $object  =  new RytrPhp('test');
            /** @var \Devkind\RytrPhp\Endpoints\Tones */
            $endpoint = $object->Tones;
            $this->assertTrue(is_array($endpoint->get()));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \InvalidArgumentException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfInvalidPayloadGiven1(): void
    {
        try {
            $object  =  new RytrPhp('test');
            /** @var \Devkind\RytrPhp\Endpoints\UseCases\BrandName */
            $endpoint = $object->BrandName;

            $endpoint = $endpoint
                ->setBrandDescription("google")
                ->setVariations(10)
                ->setUserId(100)
                ->setFormat('html')
                ->setCreativityLevel('medium')
                ->get();
            $this->assertTrue(is_array($endpoint));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }
    /**
     * @test
     */
    public function apiWorksFineWithGenenrateFunction(): void
    {
        try {
            $object  =  new RytrPhp('test');
            /** @var \Devkind\RytrPhp\Endpoints\UseCases\BrandName */
            $endpoint = $object->BrandName;

            $endpoint = $endpoint->generate("google");
            $this->assertTrue(is_array($endpoint));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }
    /**
     * @test
     */
    public function apiWorksFineWithGetFunction(): void
    {
        try {

            $object  =  new RytrPhp('test');

            /** @var \Devkind\RytrPhp\Endpoints\UseCases\BrandName */
            $endpoint = $object->BrandName;

            $endpoint = $endpoint->get(['brand_description_label' => "google"]);
            $this->assertTrue(is_array($endpoint));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }
}
