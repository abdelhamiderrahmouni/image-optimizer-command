# Image Optimizer Command

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abdelhamiderrahmouni/image-optimizer-command.svg?style=flat-square)](https://packagist.org/packages/abdelhamiderrahmouni/image-optimizer-command)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/abdelhamiderrahmouni/image-optimizer-command/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/abdelhamiderrahmouni/image-optimizer-command/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/abdelhamiderrahmouni/image-optimizer-command/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/abdelhamiderrahmouni/image-optimizer-command/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/abdelhamiderrahmouni/image-optimizer-command.svg?style=flat-square)](https://packagist.org/packages/abdelhamiderrahmouni/image-optimizer-command)

A package that offers a command for image optimization using spatie/image-optimizer under the hood.

## Installation

You can install the package via composer:

```bash
composer require abdelhamiderrahmouni/image-optimizer-command
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="image-optimizer-command-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$imageOptimizerCommand = new AbdelhamidErrahmouni\ImageOptimizerCommand();
echo $imageOptimizerCommand->echoPhrase('Hello, AbdelhamidErrahmouni!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Abdelhamid Errahmouni](https://github.com/abdelhamiderrahmouni)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
