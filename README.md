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

## Example
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
