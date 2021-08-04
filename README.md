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

Let's assume a scenario where we have a huge array like the one below and we need to sort it by a value contained in the array:

```php
$student = array(
	array(
		'name' => array(
			'first_name' => 'Joann',
			'last_name' => 'Daly'
        ),
		'age' => 18, 
		'grade' => 12, 
		'birth_month' => 5
    ),
	array(
		'name' => array(
			'first_name' => 'Jaiden',
			'last_name' => 'Wolf'
		),
		'age' => 15, 
		'grade' => 10, 
		'birth_month' => 8
	),
	array(
		'name' => array(
			'first_name' => 'Lara',
			'last_name' => 'Flores'
		),
		'age' => 8, 
		'grade' => 3, 
		'birth_month' => 2
	)
);
```

- In case the sort by 'age'.

```php
use TheOpenEyes\SortAssociativeArray\SortAssociativeArray;

SortAssociativeArray::column($student, 'age', SORT_DESC);

// 3 Parameters of 'column' method
// 1. Array
// 2. Column name
// 3. Sort Direction - Should be either SORT_ASC or SORT_DESC (Optional, Default is SORT_ASC)
```

- In case the sort by 'first_name'.

```php
use TheOpenEyes\SortAssociativeArray\SortAssociativeArray;

SortAssociativeArray::columnWithChild($student, 'name', 'first_name', SORT_DESC);

// 4 Parameters of 'columnWithChild' method
// 1. Array
// 2. Parent column name
// 3. Child column name
// 4. Sort Direction - Should be either SORT_ASC or SORT_DESC (Optional, Default is SORT_ASC)
```
