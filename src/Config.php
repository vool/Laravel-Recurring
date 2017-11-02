<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Recurring.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FaustBrian\LaravelRecurring;

use Recurr\Frequency;
use Illuminate\Contracts\Support\Arrayable;
use \DateTime;

class Config implements Arrayable
{
    /** @var \DateTime */
    private $startDate;

    /** @var \DateTime */
    private $endDate;

    /** @var string */
    private $timezone;

    /** @var int */
    private $frequency;

    /** @var string */
    private $byDay;

    /** @var string */
    private $until;

    /** @var int */
    private $interval;

    /** @var int */
    private $count;

    /** @var mixed */
    private $exceptions;

    /** @var mixed */
    private $inclusions;

    /** @var array */
    private $frequencies = [
        Frequency::YEARLY   => 'YEARLY',
        Frequency::MONTHLY  => 'MONTHLY',
        Frequency::WEEKLY   => 'WEEKLY',
        Frequency::DAILY    => 'DAILY',
        Frequency::HOURLY   => 'HOURLY',
        Frequency::MINUTELY => 'MINUTELY',
        Frequency::SECONDLY => 'SECONDLY',
    ];

    /**
     * @param string      $startDate
     * @param string|null $endDate
     * @param string      $timezone
     * @param string      $frequency
     * @param string      $byDay
     * @param string      $until
     * @param int         $interval
     * @param int         $count
     * @param mixed       $exceptions
     * @param mixed       $inclusions
     */
    public function __construct(DateTime $startDate, $endDate, $timezone, string $frequency, $byDay, $until, $interval, ?int $count, $exceptions = null, $inclusions = null)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->timezone = $timezone;
        $this->frequency = $frequency;
        $this->byDay = $byDay;
        $this->until = $until;
        $this->interval = $interval;
        $this->count = $count;
        $this->exceptions = $exceptions;
        $this->inclusions = $inclusions;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setStartDate($value): Config
    {
        $this->startDate = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setEndDate($value): Config
    {
        $this->endDate = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $value
     *
     * @return Config
     */
    public function setTimezone($value): Config
    {
        $this->timezone = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrequency(): string
    {
        return $this->frequency;
    }

    /**
     * @param int $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setFrequency($value): Config
    {
        $this->frequency = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getByDay(): string
    {
        return $this->byDay;
    }

    /**
     * @param string $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setByDay($value): Config
    {
        $this->byDay = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil(): string
    {
        return $this->until;
    }

    /**
     * @param string $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setUntil($value): Config
    {
        $this->until = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * @param int $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setInterval($value): Config
    {
        $this->interval = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setCount($value): Config
    {
        $this->count = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getExceptions(): int
    {
        return $this->exceptions;
    }

    /**
     * @param int $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setExceptions($value): Config
    {
        $this->exceptions = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getInclusions(): int
    {
        return $this->inclusions;
    }

    /**
     * @param int $value
     *
     * @return \FaustBrian\Recurring\Config
     */
    public function setInclusions($value): Config
    {
        $this->inclusions = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function getFrequencies(): array
    {
        return $this->frequencies;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'start_date' => $this->startDate,
            'end_date'   => $this->endDate,
            'timezone'   => $this->timezone,
            'frequency'  => $this->frequency,
            'by_day'     => $this->byDay,
            'until'      => $this->until,
            'interval'   => $this->interval,
            'count'      => $this->count,
			'exceptions' => $this->exceptions,
			'inclusions' => $this->inclusions,
        ];
    }
}
