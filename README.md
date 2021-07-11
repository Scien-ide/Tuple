# Tuple
An immutable list with a fixed-length whose elements are indexed by their offset in the list.

## Installation
Install into your project using [Composer](https://getcomposer.org/):

```sh
$ composer require scienide/tuple
```

### Requirements
- [PHP](https://php.net/manual/en/install.php) 7.4 or above


## Example

```php
use Tuple;

$tuple = new Tuple(5.0, 3, 'foo');

[$first, $second, $third] = $tuple->list();

foreach ($tuple as $offset => $value) {
    //
}

echo count($tuple);

echo $tuple[2];
```

```
3

foo
```

## Testing
To run the unit tests:

```sh
$ composer test
```
## Static Analysis
To run static code analysis:

```sh
$ composer analyze
```
