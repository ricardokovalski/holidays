# ricardokovalski/holidays

[![Author](http://img.shields.io/badge/author-@ricardokovalski-blue.svg?style=flat-square)](https://github.com/ricardokovalski)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/thephpleague/glide-symfony/blob/master/LICENSE)

## Instalação

```
composer require ricardokovalski/holidays
```

## Uso básico

Para obter uma coleção com todos os feriados (nacionais e não nacionais) e outras datas, basta você seguir a demonstração abaixo.

```php
use Holidays\Collections\AllHolidays;

$collection = new AllHolidays();
$collection->getCollection();
```

Agora se quiser uma coleção de feriados nacionais e ordenados por data em ordem crescente, basta seguir o exemplo abaixo.

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$collection->orderByDate()
    ->ascending()
    ->getCollection();
```

Quer saber qual é o primeiro registro da coleção, basta utiliza o método first().

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$collection->orderByDate()
    ->ascending()
    ->first();
```

E o último registro da coleção?

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$collection->orderByDate()
    ->ascending()
    ->last();
```

