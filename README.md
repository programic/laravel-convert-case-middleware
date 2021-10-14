# Programic - Laravel Convert Case Middleware

[![Latest Version on Packagist](https://img.shields.io/packagist/v/programic/laravel-convert-case-middleware.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-convert-case-middleware)
[![Total Downloads](https://img.shields.io/packagist/dt/programic/laravel-convert-case-middleware.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-convert-case-middleware)

Convert requests from camel case to snake case. Convert responses from snake case to camel case.

#Installation
1. `composer require programic/laravel-convert-case-middleware`
2. Add the middleware to the appropriate group in `App\Http\Kernel.php`. For example

```
protected $middlewareGroups = [
    'api' => [
        'throttle:60,1',
        'bindings',
        \Programic\LaravelConvertCaseMiddleware\ConvertRequestToSnakeCase::class,
        \Programic\LaravelConvertCaseMiddleware\ConvertResponseToCamelCase::class,
    ],
];
```
