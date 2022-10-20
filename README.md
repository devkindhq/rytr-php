# PHP client to communicate with Rytr API

![GitHub Actions](https://github.com/devkind-au/rytr-php/actions/workflows/main.yml/badge.svg)

RytrPhp is a simple SDK implementation of Rytr API. It helps accessing the API in an object oriented way.

### Getting the API key

please register an account and request an api key at [Rytr](https://rytr.com). `<br/>` Please check out the tutorials section for more information`<br/>`   `<ul>` `<li>` [Find your API key](../docs/Find%20Api%20Key) `</li>` `<li>`  [Test an endpoint](../docs/Test%20An%20Endpoint)`</li>` `</ul>`

## Installation

You can install the package via composer:

```bash
composer require devkind/rytr-php
```

## Usage

### Initialization:

```php
use Devkind\RytrPhp;

/** @var \Devkind\RytrPhp */
$rytr  =  new RytrPhp(API_KEY);
```

alternatively we can initialize static

```php
/** @var \Devkind\RytrPhp */
$rytr  =  \Devkind\RytrPhp::make(API_KEY);
```

## Objects / Endpoints:

Endpoints are basically the type of content that is supported by Rytr.

Each endpoint requireds an `$tone` and `$language` parameter to query from rytr.

```
/** @var string $language */
    protected $language = 'en';

    /** @var string $tone */
    protected $tone = 'economy';
```

it supports following tones :

> economy, business

and it supports following languages :

> en, nl, fr, de, it, pl, es, pt-pt, pt-br, ru, ja, zh, bg, cs, da, el, hu, lt, lv, ro, sk, sl, sv, fi, et

in order to change the language or tone we can call the setter methods, which is available on all the endpoints.

to set the language

```php
/** @var \Devkind\RytrPhp\Endpoints\GenerateImage */
$endpoint = $rytr->GenerateImage->setLanguage('br');
```

to set the tone

```php
/** @var \Devkind\RytrPhp\Endpoints\GenerateImage */
$endpoint = $rytr->GenerateImage->setTone('business');
```

alternatively:

```php
/** @var \Devkind\RytrPhp\Endpoints\GenerateImage */
$endpoint = $rytr->GenerateImage->setTone('br')->setLanguage('br');
```

All the endpoints can be  called into three different ways

#### as a payload

```php
$object  =  new RytrPhp('test123');
/** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
$endpoint = $object->GoogleAds;

$array = $endpoint->setPayload([
    "product_name" => 'test',
    "product_description" => 'test',
    "search_term" => 'test',
])->get();
```

#### through the setter methods

```php
$object  =  new RytrPhp('test123');
/** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
$endpoint = $object->GoogleAds;
/** @var array */
$array = $endpoint->setProductName('test')
    ->setProductDescription('test')
    ->setSearchTerm('test')
    ->get();
```

#### through the `generate` method

```php
/** @var \Devkind\RytrPhp\Endpoints\GoogleAds */
$endpoint = $rytr->GoogleAds;
/** @var array */
$endpoint->generate(
	$product_name,
	$product_description,
	$search_term
);
```

#### through the `get` method

```php
/** @var array */
$endpoint = $rytr->GoogleAds->get([
    "product_name" => 'test',
    "product_description" => 'test',
    "search_term" => 'test',
]);
```

### Supported Objects / Endpoints:

#### [Click here ](https://github.com/devkindhq/rytr-php/blob/main/endpoints.md) to view the entire documentation of supported endpoints


```### Testing

```bash
composer test
```
### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email backend@devkind.com.au instead of using the issue tracker.

## Credits

- [Devkind Developer](https://github.com/devkindhq)
- [Devkind Developer]
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
