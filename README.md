## About
+ PushView package support append javascript to view in Laravel
+ Package will be extremely useful when you want to automatically translate text from php and the client side will receive the translated text

```php

class BaseController extends Controller
{
    public function index()
    {
        \PushViewJS::put([
            'translate' => ['confirmation' => trans('labels.confirmation')]
        ]);
        
        return view('welcome');
    }
}

<script>
window.Core = window.Core || {};
Core.translate = {"confirmation":{"title":"Are you sure?","confirm_dirty_form":"Do you want to save the changes made before switching?","yes":"Yes","skip_continue":"Skip & Continue","cancel":"Cancel","delete":{"yes":"Yes delete it!","text":"You won't be able to revert this!"}}};
</script>
```

## Installation

1. Install using Composer

```
composer require lchhieu/push_view
```

If you're using Laravel 5.5 or later you can start using the package at this point. PushView is auto-discovered by the Laravel framework.

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
