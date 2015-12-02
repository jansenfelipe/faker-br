# Faker BR
[![Travis](https://travis-ci.org/jansenfelipe/faker-br.svg?branch=1.0)](https://travis-ci.org/jansenfelipe/faker-br)
[![Latest Stable Version](https://poser.pugx.org/jansenfelipe/faker-br/v/stable.svg)](https://packagist.org/packages/jansenfelipe/faker-br) 
[![Total Downloads](https://poser.pugx.org/jansenfelipe/faker-br/downloads.svg)](https://packagist.org/packages/jansenfelipe/faker-br) 
[![Latest Unstable Version](https://poser.pugx.org/jansenfelipe/faker-br/v/unstable.svg)](https://packagist.org/packages/jansenfelipe/faker-br)
[![MIT license](https://poser.pugx.org/jansenfelipe/nfephp-serialize/license.svg)](http://opensource.org/licenses/MIT)

Provider do [Faker](https://github.com/fzaninotto/Faker) para gerar dados brasileiros falsos com o intuito de testar softwares

### Como utilizar

Adicione a library

```sh
$ composer require jansenfelipe/faker-br
```
Instancie o Faker e adicione o provider

```php
<?php

require __DIR__ .'/vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new FakerBR($faker));

// generate data by accessing properties
echo $faker->cnpj;  //Retorna um CNPJ válido gerado randomicamente
echo $faker->cpf;  //Retorna um CPF válido gerado randomicamente
```

### Gostou? Conheça também

* [CnpjGratis](https://github.com/jansenfelipe/cnpj-gratis)
* [CpfGratis](https://github.com/jansenfelipe/cpf-gratis)
* [CepGratis](https://github.com/jansenfelipe/cep-gratis)
* [NFePHP-serialize](https://github.com/jansenfelipe/nfephp-serialize)

### License

The MIT License (MIT)
