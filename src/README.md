# internlog

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/ayctor/internlog.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/ayctor/internlog.svg?style=flat-square)](https://packagist.org/packages/ayctor/internlog)


## Install

```bash
composer require ayctor/internlog
```


## Usage

This package provides you with a simple system of logging api request or other events on your application.
Once installed, you can enter a log this way:

Internlog::log(['request' => request()->all()], 'category_name', 'sub-category_name);


## Testing

Run the tests with:

```bash
vendor/bin/phpunit
```


## Security

If you discover any security-related issues, please email jean-baptiste@ayctor.com instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
