# PHP client to communicate with Rytr API

![GitHub Actions](https://github.com/devkindhq/rytr-php/actions/workflows/main.yml/badge.svg)

RytrPhp is a simple SDK implementation of Rytr API. It helps accessing the API in an object oriented way.

Oficial Rytr-me page: https://rytr.me/

Oficial Rytr-me git documentation: https://github.com/rytr-me/documentation

### Getting the API key

please register an account and request an api key at [Rytr](https://rytr.me).

Please check out the tutorials section for more information
- [Find your API key](https://rytr.me/developers/api) 


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

### Defaults

>    protected $language = '607adac76f8fe5000c1e636d'; //english

```language="🇺🇸 English"``` - language in which the texts will be generated - **change using setLangugage()**

>    protected $language = '607adac76f8fe5000c1e636d'; //english

```tone="Casual"``` - tones in which the text will be - **change using setTone()**

>    protected int $variations = 1;

```variations = 1``` - number of texts in response - **change using setVariation()**

>    protected string $format = 'text';

```formats='html'``` - html or text - ** **change using setFormat()****

>    protected string $creativityLevel = 'default';

```creativity_level='default'``` - fault | none | low | medium | high | max - **change using setCreativityLevel()**


```user_id='USER1'``` - "*For userId you need to supply user ID from your database, eg: primary key for users database table.*" -  **change using setUserId()**
 

in order to change the language or tone we can call the setter methods, which is available on all the endpoints.

to set the language

```php
/** @var \Devkind\RytrPhp\Endpoints\Usercases\BrandName */
$endpoint = $rytr->BrandName->setLanguage('english');
```

to set the tone

```php
/** @var \Devkind\RytrPhp\Endpoints\Usercases\BrandName */
$endpoint = $rytr->BrandName->setTone('candid');
```

alternatively:

```php
/** @var \Devkind\RytrPhp\Endpoints\Usercases\BrandName */
$endpoint = $rytr->BrandName->setTone('candid')->setLanguage('english')->setVariation(10);
```

All the endpoints can be  called into three different ways

#### through the `get` method

```php
/** @var \Devkind\RytrPhp\Endpoints\UseCases\BrandName */
$endpoint = $object->BrandName;

$endpoint = $endpoint->get(['brandDescription' => "google"]);
```

#### through the setter methods

```php
/** @var \Devkind\RytrPhp\Endpoints\UseCases\BrandName */
$endpoint = $object->BrandName;

$endpoint = $endpoint
    ->setBrandDescription("google")
    ->setVariations(10)
    ->setUserId(100)
    ->setFormat('html')
    ->setCreativityLevel('medium')
    ->get();
```

#### through the `generate` method

```php
/** @var \Devkind\RytrPhp\Endpoints\UseCases\BrandName */
$endpoint = $object->BrandName;

$endpoint = $endpoint->generate("google");
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
- [Devkind Developer](https://devkind.com.au/)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
