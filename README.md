# Uploadcare for Laravel

This is a simple Laravel service provider for [Uploadcare's official PHP library](https://github.com/uploadcare/uploadcare-php).


## Prerequisites
- Laravel 5
- PHP 7.0 or higher


## Installation
1. Run `composer require pedzed/laravel-uploadcare`
1. Add this line to the `providers` array of `config/app.php`:  
    ```
    PedZed\LaravelUploadcare\UploadcareServiceProvider::class,
    ```
1. Run `php artisan vendor:publish`
1. Add `UPLOADCARE_PUBLIC_KEY` and `UPLOADCARE_PRIVATE_KEY` to your environment variables.
    You can get the values from https://uploadcare.com/dashboard.
1. Call the [`Uploadcare\Api`](https://github.com/uploadcare/uploadcare-php/blob/master/src/Uploadcare/Api.php) class through `app()->uploadcare`.


## Usage
For the usage, please check Uploadcare's API: https://github.com/uploadcare/uploadcare-php#readme.

### Examples
```php
{!! app()->uploadcare->widget->getInputTag('file_id') !!}

{!! app()->uploadcare->widget->getScriptTag() !!}
```


## License
The MIT License (MIT)

Copyright (c) 2016 pedzed

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
