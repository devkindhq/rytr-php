<?php

namespace Devkind\RytrPhp\Tests;

use Devkind\RytrPhp\Endpoints\GoogleAds;
use Devkind\RytrPhp\Rytr as RytrPhp;
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
        $this->assertTrue(get_class($object->GoogleAds) == GoogleAds::class);
        $this->assertTrue($object->GoogleAds->getLanguage() == 'en');
        $this->assertTrue($object->getRoot() == 'api.rytr.com');
    }


    /**
     * @test
     */
    public function rytr_phpis_initialized_properly_using_make(): void
    {
        $object  =  RytrPhp::make('test');
        $this->assertTrue(get_class($object->GoogleAds) == GoogleAds::class);
        $this->assertTrue($object->GoogleAds->getLanguage() == 'en');
        $this->assertTrue($object->getRoot() == 'api.rytr.com');
    }


    /**
     * @test
     */
    public function rytr_throw_exception_in_case_of_invalid_endpoint(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            $this->assertTrue(get_class($object->GoogleAd) == GoogleAds::class);
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
            /** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $this->assertTrue(is_array($endpoint->generate('test', 'test', 'test')));
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
            $object  =  new RytrPhp('test123');
            /** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $this->assertTrue(is_array($endpoint->get()));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \InvalidArgumentException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfInvalidCredientialsV3(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            /** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $array = $endpoint->setProductName('test')
                ->setProductDescription('test')
                ->setSearchTerm('test')
                ->get();
            $this->assertTrue(is_array($array));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfInvalidCredientialsV4(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            /** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $array = $endpoint->setPayload([
                "product_name" => 'test',
                "product_description" => 'test',
                "search_term" => 'test',
            ])->get();
            $this->assertTrue(is_array($array));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfMissingParameter(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            /** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $array = $endpoint->setProductName('test')
                ->setProductDescription('test')
                ->get();
            $this->assertTrue(is_array($array));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \InvalidArgumentException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfInvalidCredientialsV2(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            /** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $this->assertTrue(is_array($endpoint->get([
                "product_name" => 'test',
                "product_description" => 'test',
                "search_term" => 'test',
            ])));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \GuzzleHttp\Exception\ClientException::class);
        }
    }

    /**
     * @test
     */
    public function exceptionIsThrownInCaseOfBlankPayloadGiven(): void
    {
        try {
            $object  =  new RytrPhp('test123');
            /** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
            $endpoint = $object->GoogleAds;
            $this->assertTrue(is_array($endpoint->get([])));
        } catch (\Throwable $th) {
            $this->assertTrue(get_class($th) == \InvalidArgumentException::class);
        }
    }
    
}
