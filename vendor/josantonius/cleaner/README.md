# PHP Cleaner library

[![Latest Stable Version](https://poser.pugx.org/josantonius/cleaner/v/stable)](https://packagist.org/packages/josantonius/cleaner) [![Total Downloads](https://poser.pugx.org/josantonius/cleaner/downloads)](https://packagist.org/packages/josantonius/cleaner) [![Latest Unstable Version](https://poser.pugx.org/josantonius/cleaner/v/unstable)](https://packagist.org/packages/josantonius/cleaner) [![License](https://poser.pugx.org/josantonius/cleaner/license)](https://packagist.org/packages/josantonius/cleaner)

[Spanish version](README-ES.md)

PHP class for cleaning resources.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Exception Handler](#exception-handler)
- [Contribute](#contribute)
- [Repository](#repository)
- [Author](#author)
- [Licensing](#licensing)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Cleaner library, simply:

    $ composer require Josantonius/Cleaner

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Cleaner\Cleaner;
```
### Available Methods

Available methods in this library:

```php
Cleaner::unregisterGlobals();
Cleaner::stripSlashesDeep();
Cleaner::removeMagicQuotes();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Cleaner\Cleaner;

Cleaner::removeMagicQuotes();
Cleaner::unregisterGlobals();
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Cleaner\\Tests\\', __DIR__ . '/vendor/josantonius/cleaner/tests');

use Josantonius\Cleaner\Tests\CleanerTest;

```
Available test methods in this library:

```php
CleanerTest::testRemoveMagicQuotes();
CleanerTest::testUnregisterGlobals();
```

### Exception Handler

This library uses [exception handler](src/Exception) that you can customize.
### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Author

Maintained by [Josantonius](https://github.com/Josantonius/).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.