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
            'start_date' => $this->start_at,
            'end_date'   => $this->end_at,
            'timezone'   => $this->timezone,
            'frequency'  => $this->frequency,
            'interval'   => $this->interval,
            'count'      => $this->count,
        ];
    }
}
