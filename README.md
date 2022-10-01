# Filament-mrk

[![Latest Version on Packagist](https://img.shields.io/packagist/v/morkcode/filament-mrk.svg?style=flat-square)](https://packagist.org/packages/morkcode/filament-mrk)
[![Total Downloads](https://img.shields.io/packagist/dt/morkcode/filament-mrk.svg?style=flat-square)](https://packagist.org/packages/morkcode/filament-mrk)

This package is for personal configuration.

## Installation

You can install the package via composer:

```bash
composer require morkcode/filament-mrk
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-mrk-config"
```

This is the contents of the published config file: (soon)
```php
return [
];
```


## Forms

---

### **Cash Input**

Aling price to the rigth

![cash input](images/cash-input.png)

```php
use FilamentMrk\Forms\Components\CashInput;

CashInput::make('price')
    ->required(),

```

### **Cash Input**

![cash input](images/toggle-check.png)

```php
use FilamentMrk\Forms\Components\ToggleCheck;

ToggleCheck::make('enable')
    ->required(),

```

---

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
