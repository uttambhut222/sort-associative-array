# sort-associative-array
 A Laravel package to sort associative array.
 
## Installation

To get started, require this package

- Via Composer

``` bash
 composer require theopeneyes/sort-associative-array
```

- Via composer.json file

Add the following to the `require` section of your projects `composer.json` file.
``` php
"theopeneyes/sort-associative-array": "dev-main",
```

Run composer update to download the package

``` bash
 composer update
```

## Basic Usage

```php
use TheOpenEyes\SortAssociativeArray\SortAssociativeArray;


SortAssociativeArray::column($array, $column, $dir);	// $dir should be either SORT_ASC or SORT_DESC, Default is SORT_ASC

SortAssociativeArray::columnWithChild($array, $column, $child_column, $dir);	// $dir should be either SORT_ASC or SORT_DESC, Default is SORT_ASC

```
