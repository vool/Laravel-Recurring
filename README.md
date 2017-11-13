# Laravel Recurring

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-recurring
```

## Usage

``` php
<?php

namespace App;

use FaustBrian\LaravelRecurring\Traits\RecurringTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use RecurringTrait;
}
```

```php
Route::get('/', function () {
    $task = App\Task::first();

    $task->recurr()->first();

    $task->recurr()->last();

    $task->recurr()->next();

    $task->recurr()->current();

    $task->recurr()->rule();

    $task->recurr()->schedule();
});
```

## Examples
```php
    $task = new App\Task();

    $task->start_at = '2017/1/1';

    $task->until = '2017/12/12';

    $task->by_day = 'MO,FR';

    $task->frequency = 'WEEKLY';

    $task->timezone = 'Europe/Amsterdam';

    $start = new DateTime('2017/5/5');

    $end = new DateTime('2017/5/15');

    print_r($task->recurr()->scheduleBetween($start, $end));
	
	// Using exceptions and inclusions
	
	$task->exceptions = ['2017/05/08'];
	
	$task->inclusions = ['2017/05/10', '2017/05/11'];
	
	print_r($task->recurr()->scheduleBetween($start, $end));
```

### Using Exception and Inclusion Dates Directly from Related Models

Exceptions and inclusions can be passed as a single date string, an array of date strings, or as an `Eloquent\Collection`.
The value will be plucked from the `date` column.

Example exceptions migration
```php
	Schema::create('exceptions', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('event_id')->unsigned();
		$table->datetime('date');
		$table->timestamps();
	});
```

Assuming Task model has a hasMany relation to Exception, e.g.
```php
	public function exceptions()
	{
		return $this->hasMany(Exception::class);
	}
```

The exceptions can be passed to recurr directly.
```php
	$task = App\Task::with('exceptions')->find(1);
	
	print_r($task->recurr()->schedule());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
