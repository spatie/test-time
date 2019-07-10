# A helper to control the flow of time

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/test-time.svg?style=flat-square)](https://packagist.org/packages/spatie/test-time)
[![Build Status](https://img.shields.io/travis/spatie/test-time/master.svg?style=flat-square)](https://travis-ci.org/spatie/test-time)
[![StyleCI](https://github.styleci.io/repos/191573579/shield?branch=master)](https://github.styleci.io/repos/191573579)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/test-time.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/test-time)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/test-time.svg?style=flat-square)](https://packagist.org/packages/spatie/test-time)

* [Installation](#installation)
* [Usage](#usage)
* [Testing](#testing)
* [Changelog](#changelog)
* [Contributing](#contributing)
* [Postcardware](#postcardware)
* [License](#license)

[Carbon](https://github.com/briannesbitt/Carbon) is an excellent library to work with time in PHP projects. 
The `Spatie\TestTime\TestTime` class contains a few functions that under the hood manipulate the time that's considered the current time by Carbon.


```php
// the flow of time is frozen
TestTime::freeze();

// we're now one year in the future
TestTime::addYear();

// will report the real current year + 1
$year = (new Carbon())->format('Y');
```

## Installation

You can install the package via composer:

```bash
composer require spatie/test-time
```

## Usage

You can freeze the time with:

```php
TestTime::freeze();
```

Alternatively you can pass in a carbon instance that will be used as the current time:

```php
TestTime::freeze($carbonInstance);
```

You can also pass a format and time:

```php
TestTime::freeze('Y-m-d', '2019-06-12');
```

You can progress the time with any of the carbon functions starting with `add` or `sub`:

```php
TestTime::addMinute();

TestTime::subHours(5);

// you can also chain calls
TestTime::addMonth(3)->addYear();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [Alex Vanderbist](https://github.com/AlexVanderbist)
- [All Contributors](../../contributors)

## Support us

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

Does your business depend on our contributions? Reach out and support us on [Patreon](https://www.patreon.com/spatie). 
All pledges will be dedicated to allocating workforce on maintenance and new awesome stuff.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
