 ```
    ___        _                     _         _  _      __                                 _
   /   \ __ _ | |_  __ _  ___   ___ | |_  ___ | || |    / /   __ _  _ __  __ _ __   __ ___ | |
  / /\ // _` || __|/ _` |/ __| / _ \| __|/ __|| || |_  / /   / _` || '__|/ _` |\ \ / // _ \| |
 / /_//| (_| || |_| (_| |\__ \|  __/| |_ \__ \|__   _|/ /___| (_| || |  | (_| | \ V /|  __/| |
/___,'  \__,_| \__|\__,_||___/ \___| \__||___/   |_|  \____/ \__,_||_|   \__,_|  \_/  \___||_|
                                    DATA.OKFN COLLECTION - hnhdigital-os/laravel-datasets-okfn
```

Provides datasets from [data.okfn.org](http://data.okfn.org/data) to be used with [H&H|Digital's Laravel Datasets Package](https://github.com/hnhdigital-os/laravel-datasets).

[![Latest Stable Version](https://poser.pugx.org/hnhdigital-os/laravel-datasets-okfn/v/stable.svg)](https://packagist.org/packages/hnhdigital-os/laravel-datasets) [![StyleCI](https://styleci.io/repos/77714232/shield?branch=master)](https://styleci.io/repos/77714232) [![Built for Laravel](https://img.shields.io/badge/Built_for-Laravel-green.svg)](https://laravel.com/) [![License](https://poser.pugx.org/hnhdigital-os/laravel-datasets/license.svg)](https://packagist.org/packages/hnhdigital-os/laravel-datasets)

## Install

Via composer:

$ composer require hnhdigital-os/laravel-datasets-okfn

## Configuration

Enable this dataset collection by editing config/datasets.php:

```php
return [
    'source' => [
        ...
        'hnhdigital-os/laravel-datasets-okfn',
        ...
    ],
];
```

## Available datasets

* Country Codes - (https://github.com/datasets/country-codes)
* Country Population - (https://github.com/datasets/population)
* Country Population in the most recent year - (https://github.com/datasets/population)
* Language Codes - (https://github.com/datasets/language-codes)

## Contributing

Please see [CONTRIBUTING](https://github.com/hnhdigital-os/laravel-datasets/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/hnhdigital-os/laravel-datasets-okfn/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/hnhdigital-os/laravel-datasets/blob/master/LICENSE) for more information.
