# ricardokovalski/holidays

[![Latest Stable Version](https://poser.pugx.org/ricardokovalski/holidays/v/stable)](https://packagist.org/packages/ricardokovalski/holidays)
[![Author](http://img.shields.io/badge/author-@ricardokovalski-blue.svg?style=flat-square)](https://github.com/ricardokovalski)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/thephpleague/glide-symfony/blob/master/LICENSE)

## Instalação

```
composer require ricardokovalski/holidays
```

## Uso básico

### Coleções

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
$collection->orderByTimestamp()
    ->ascending()
    ->getCollection();
```

Quer saber qual é o primeiro registro da coleção, basta utiliza o método first().

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$collection->orderByTimestamp()
    ->ascending()
    ->first();
```

E o último registro da coleção?

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$collection->orderByTimestamp()
    ->ascending()
    ->last();
```

Filtrar por um período?

```php
use Holidays\Collections\NationalHolidays;

$startDate = \DateTime::createFromFormat('d/m/Y', '01/01/2020');
$endDate = \DateTime::createFromFormat('d/m/Y', '30/06/2020');

$collection = new NationalHolidays();
$collection->between($startDate, $endDate)
    ->orderByTimestamp()
    ->ascending()
    ->getCollection();
```

Obter os feriados do próximo ano?

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays(2021);
$collection->orderByTimestamp()
    ->ascending()
    ->getCollection();
```

### Holiday

Formatando o timestamp da data.

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$holiday = $collection->orderByTimestamp()
    ->ascending()
    ->first();    
    
$holiday->formatter('d/m/Y');
``` 

Avançando no tempo, obtendo a data do feriado do próximo ano.

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$holiday = $collection->orderByTimestamp()
    ->ascending()
    ->first();    
    
$holiday->next();
```

Obtendo a data do feriado do ano passado.

```php
use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$holiday = $collection->orderByTimestamp()
    ->ascending()
    ->first();    
    
$holiday->previous();
```
