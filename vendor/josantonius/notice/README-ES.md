# PHP Notice library

[![Latest Stable Version](https://poser.pugx.org/josantonius/notice/v/stable)](https://packagist.org/packages/josantonius/notice) [![Total Downloads](https://poser.pugx.org/josantonius/notice/downloads)](https://packagist.org/packages/josantonius/notice) [![Latest Unstable Version](https://poser.pugx.org/josantonius/notice/v/unstable)](https://packagist.org/packages/josantonius/notice) [![License](https://poser.pugx.org/josantonius/notice/license)](https://packagist.org/packages/josantonius/notice)

[Spanish version](README-ES.md)

Librería PHP para el manejo de errores y avisos.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Métodos disponibles](#métodos-disponibles)
- [Uso](#uso)
- [Tests](#tests)
- [Manejador de excepciones](#manejador-de-excepciones)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Autor](#autor)
- [Licencia](#licencia)

---

### Instalación 

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP Notice library, simplemente escribe:

    $ composer require Josantonius/Notice

### Requisitos

Esta ĺibrería es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

### Cómo empezar y ejemplos

Para utilizar esta librería, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Notice\Notice;
```
### Métodos disponibles

Métodos disponibles en esta librería:

```php
Notice::get();
Notice::getAll();
```
### Uso

Ejemplo de uso para esta librería:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Notice\Notice;

echo "<br>[600] · " . Notice::get(600);
echo "<br>[600] · " . Notice::get(600, 'es');

/*
[600] · This is a test for the error with code 600 in english.
[600] · This is a test for the error with code 600 in spanish.
*/

echo "<br>[800] · " . Notice::get(800);

/*
[800] · Undefined
*/

echo '<pre>'; var_dump(Notice::getAll()); echo '</pre>';

/*
array(2) {
  [600]=>
  string(54) "This is a test for the error with code 600 in english."
  [601]=>
  string(54) "This is a test for the error with code 601 in english."
}
*/

echo '<pre>'; var_dump(Notice::getAll('es')); echo '</pre>';

/*
array(2) {
  [600]=>
  string(58) "Esto es un test para el error con código 600 en español."
  [601]=>
  string(58) "Esto es un test para el error con código 601 en español."
}
*/
```

### Tests 

Para utilizar la clase de [pruebas](tests), simplemente:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Notice\\Tests\\', __DIR__ . '/vendor/josantonius/notice/tests');

use Josantonius\Notice\Tests\NoticeTest;
```
Métodos de prueba disponibles en esta librería:

```php
NoticeTest::testLoad();
NoticeTest::testLoadES();
NoticeTest::testGetEN();
NoticeTest::testGetES();
NoticeTest::testGetUndefinedEN();
NoticeTest::testGetUndefinedES();
NoticeTest::testGetAllEN();
NoticeTest::testGetAllES();
```

### Manejador de excepciones

Esta librería utiliza [control de excepciones](src/Exception) que puedes personalizar a tu gusto.
### Contribuir
1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

### Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Autor

Mantenido por [Josantonius](https://github.com/Josantonius/).

### Licencia

Este proyecto está licenciado bajo la **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.