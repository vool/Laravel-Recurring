<?php

/**
 * Configuration options for the Laravel Recurring package
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Field Mapping
    |--------------------------------------------------------------------------
    |
    | Here you can map your app's table fields to those which the Recurring
    | trait is expecting
    |
    */

    'start_date' => 'start_at',
    'end_date' => 'end_at',
    'timezone' => 'timezone',
    'frequency' => 'frequency',
    'interval' => 'interval',
    'count' => 'count',
    'by_day' => 'by_day',
    'until' => 'until',
    'exceptions' => 'exceptions',
    'inclusions' => 'inclusions',

];
