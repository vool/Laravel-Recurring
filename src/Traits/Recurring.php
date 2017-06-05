<?php

/*
 * This file is part of Laravel Recurring.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Recurring\Traits;

use BrianFaust\Recurring\Builder;

trait Recurring
{
    /**
     * @return Builder
     */
    public function recurr(): Builder
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
