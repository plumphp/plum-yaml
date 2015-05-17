<img src="https://florian.ec/img/plum/logo.png" alt="Plum">
====

> PlumYaml integrates [Symfony Yaml](https://github.com/symfony/yaml) component into Plum. Plum is a data
processing pipeline for PHP.

[![Latest Version](https://img.shields.io/packagist/v/plumphp/plum-yaml.svg)](https://packagist.org/packages/plumphp/plum-yaml)
[![Build Status](https://img.shields.io/travis/plumphp/plum-yaml.svg?style=flat)](https://travis-ci.org/plumphp/plum-yaml)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/plumphp/plum-yaml.svg?style=flat)](https://scrutinizer-ci.com/g/plumphp/plum-yaml/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/plumphp/plum-yaml.svg?style=flat)](https://scrutinizer-ci.com/g/plumphp/plum-yaml/?branch=master)

Developed by [Florian Eckerstorfer](https://florian.ec) in Vienna, Europe.


Installation
------------

You can install PlumYaml using [Composer](http://getcomposer.org).

```shell
$ composer require plumphp/plum-yaml
```


Usage
-----

Please refer to the [Plum documentation](https://github.com/plumphp/plum/blob/master/docs/index.md) for more
information about using Plum.

PlumYaml contains two converters. `YamlDumpConverter` converts an array into YAML and `YamlParseConverter` converts
YAML into an array.

```php
use Plum\PlumYaml\YamlDumpConverter;
use Plum\PlumYaml\YamlParseConverter;

$dumpConverter = new YamlDumpConverter();
$dumpConverter->convert(['foo' => 'bar'); // -> "foo: bar"

$parseConverter = new YamlParseConverter();
$parseConverter->convert('foo: bar'); // -> ["foo" => "bar"]
```


Change Log
----------

### Version 0.1 (17 May 2015)

- Initial release


License
-------

The MIT license applies to plumphp/plum-yaml. For the full copyright and license information,
please view the [LICENSE](https://github.com/plumphp/plum-yaml/blob/master/LICENSE) file distributed with this
source code.
