## About
PushView package support append javascript to view in Laravel

## Installation

1. Install using Composer

```
composer require lchhieu/push_view
```

If you're using Laravel 5.5 or later you can start using the package at this point. Eventy is auto-discovered by the Laravel framework.

2. Add the service provider to the providers array in your `config/app.php`.

```php
    'Lchhieu\PushView\Providers\ViewServiceProvider::class', 
```

3. Add the facade in `config/app.php`

```php
    'PushViewJS'      => Lchhieu\PushView\Facades\JavaScriptFacade::class
```
4. Finaly Pulish the package configuration by running this CMD
   
   php artisan vendor:publish --provider="Lchhieu\PushView\Providers\ViewServiceProvider"
