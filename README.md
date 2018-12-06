# Laravel Simple Feature Flag

This is a simple feature flag system for Laravel.  There are many better, more complex flag systems available.
The point of this one is to simply create a light-weight feature flag system that is configured through
a facade/helper/service using the config and environment system.  Simple!

## Installation Instructions

Install via composer in your project. It is recommended to install it into dev.

`composer require aaronsaray/laravel-simple-feature`

If you're using Laravel 5.5 and above, the service provider will be automatically registered.
If not, you'll need to register `AaronSaray\LaravelSimpleFeature\Providers\LaravelSimpleFeatureProvider`.
In addition, you'd need to register the `Feature` facade. 

Publish the config files.

`php artisan vendor:publish --tag=config`

You can modify the `config/laravel-simple-feature.php` file for your desired feature flags.

## Usage

To use, you can use the following method to get a boolean:

`AaronSaray\LaravelSimpleFeature\Facades\Feature::can('your-feature')`

You can also use `on` and `off`.

You can also inject the service `AaronSaray\LaravelSimpleFeature\Services\LaravelSimpleFeatureService` if you like.
