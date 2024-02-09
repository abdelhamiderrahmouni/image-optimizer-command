# Image Optimizer Command

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abdelhamiderrahmouni/image-optimizer-command.svg?style=flat-square)](https://packagist.org/packages/abdelhamiderrahmouni/image-optimizer-command)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/abdelhamiderrahmouni/image-optimizer-command/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/abdelhamiderrahmouni/image-optimizer-command/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/abdelhamiderrahmouni/image-optimizer-command/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/abdelhamiderrahmouni/image-optimizer-command/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/abdelhamiderrahmouni/image-optimizer-command.svg?style=flat-square)](https://packagist.org/packages/abdelhamiderrahmouni/image-optimizer-command)

A package that offers a command for image optimization using spatie/image-optimizer under the hood.

## Pre-requisites

### Optimization tools

The package will use these optimizers if they are present on your system:

- [JpegOptim](https://github.com/tjko/jpegoptim)
- [Optipng](http://optipng.sourceforge.net/)
- [Pngquant 2](https://pngquant.org/)
- [SVGO 1](https://github.com/svg/svgo)
- [Gifsicle](http://www.lcdf.org/gifsicle/)
- [cwebp](https://developers.google.com/speed/webp/docs/precompiled)
- [avifenc](https://github.com/AOMediaCodec/libavif/blob/main/doc/avifenc.1.md)

Here's how to install all the optimizers on Ubuntu/Debian:

```bash
sudo apt-get install jpegoptim
sudo apt-get install optipng
sudo apt-get install pngquant
sudo npm install -g svgo
sudo apt-get install gifsicle
sudo apt-get install webp
sudo apt-get install libavif-bin # minimum 0.9.3
```

And here's how to install the binaries on MacOS (using [Homebrew](https://brew.sh/)):

```bash
brew install jpegoptim
brew install optipng
brew install pngquant
npm install -g svgo
brew install gifsicle
brew install webp
brew install libavif
```

And here's how to install the binaries on Fedora/RHEL/CentOS:

```bash
sudo dnf install epel-release
sudo dnf install jpegoptim
sudo dnf install optipng
sudo dnf install pngquant
sudo npm install -g svgo
sudo dnf install gifsicle
sudo dnf install libwebp-tools
sudo dnf install libavif-tools
```

## Installation
I recommend you use this package in local environment only, even if it is possible to use it in production environment, 
it is not recommended to use it in production.

You can install the package via composer:

```bash
composer require abdelhamiderrahmouni/image-optimizer-command --dev
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="image-optimizer-command-config"
```

This is the contents of the published config file:

```php
return [
    /*
     * The path to the assets folder. Default is public/assets.
     */
    'assets_path' => 'public/assets',
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
