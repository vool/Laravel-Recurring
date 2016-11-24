<?php

namespace BrianFaust\Recurring;

trait Recurring
{
    /**
     * @return Builder
     */
    public function recurr() : Builder
    {
        return new Builder($this);
    }

    /**
     * Configuration for the Recurring Trait.
     *
     * @var array
     */
    public function getRecurringConfig()
    {
        return [
            'start_date' => 'start_at',
            'end_date'   => 'end_at',
            'timezone'   => 'timezone',
            'frequency'  => 'frequency',
            'interval'   => 'interval',
            'count'      => 'count',
        ];
    }
}
