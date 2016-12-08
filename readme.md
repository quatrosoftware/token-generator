[![Packagist License](https://poser.pugx.org/jsocha/bitbucket/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/jsocha/token-generator/version.png)](https://packagist.org/packages/jsocha/token-generator)
[![Total Downloads](https://poser.pugx.org/jsocha/token-generator/d/total.png)](https://packagist.org/packages/jsocha/token-generator)
## Simple token generator

## Installation

Require this package with composer:

```shell
composer require jsocha/token-generator dev-master
```

## Usage

```php
$token = TokenGenerator::make(32); // It will generate 32 characters length token
```
