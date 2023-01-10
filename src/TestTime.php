<?php

namespace Spatie\TestTime;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use InvalidArgumentException;

/**
 * @mixin \Carbon\Carbon
 *
 * @method static self create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0, $tz = null) Create a new Carbon instance from a specific date and time.
 * @method static self createFromDate($year = null, $month = null, $day = null, $tz = null) Create a Carbon instance from just a date. The time portion is set to now.
 * @method static self createFromTime($hour = 0, $minute = 0, $second = 0, $tz = null) Create a Carbon instance from just a time. The date portion is set to today.
 * @method static self createFromTimeString($time, $tz = null) Create a Carbon instance from a time string. The date portion is set to today.
 * @method static self createFromFormat($format, $time, $tz = null) Create a Carbon instance from a specific format.
 * @method static self years() Set current instance year to the given value.
 * @method static self year(int $value) Set current instance year to the given value.
 * @method static self setYears() Set current instance year to the given value.
 * @method static self setYear(int $value) Set current instance year to the given value.
 * @method static self months(int $value) Set current instance month to the given value.
 * @method static self month(int $value) Set current instance month to the given value.
 * @method static self setMonths(int $value) Set current instance month to the given value.
 * @method static self setMonth(int $value) Set current instance month to the given value.
 * @method static self days(int $value) Set current instance day to the given value.
 * @method static self day(int $value) Set current instance day to the given value.
 * @method static self setDays(int $value) Set current instance day to the given value.
 * @method static self setDay(int $value) Set current instance day to the given value.
 * @method static self hours(int $value) Set current instance hour to the given value.
 * @method static self hour(int $value) Set current instance hour to the given value.
 * @method static self setHours(int $value) Set current instance hour to the given value.
 * @method static self setHour(int $value) Set current instance hour to the given value.
 * @method static self minutes(int $value) Set current instance minute to the given value.
 * @method static self minute(int $value) Set current instance minute to the given value.
 * @method static self setMinutes(int $value) Set current instance minute to the given value.
 * @method static self setMinute(int $value) Set current instance minute to the given value.
 * @method static self seconds(int $value) Set current instance second to the given value.
 * @method static self second(int $value) Set current instance second to the given value.
 * @method static self setSeconds(int $value) Set current instance second to the given value.
 * @method static self setSecond(int $value) Set current instance second to the given value.
 * @method static self millis(int $value) Set current instance millisecond to the given value.
 * @method static self milli(int $value) Set current instance millisecond to the given value.
 * @method static self setMillis(int $value) Set current instance millisecond to the given value.
 * @method static self setMilli(int $value) Set current instance millisecond to the given value.
 * @method static self milliseconds(int $value) Set current instance millisecond to the given value.
 * @method static self millisecond(int $value) Set current instance millisecond to the given value.
 * @method static self setMilliseconds(int $value) Set current instance millisecond to the given value.
 * @method static self setMillisecond(int $value) Set current instance millisecond to the given value.
 * @method static self micros() Set current instance microsecond to the given value.
 * @method static self micro(int $value) Set current instance microsecond to the given value.
 * @method static self setMicros() Set current instance microsecond to the given value.
 * @method static self setMicro(int $value) Set current instance microsecond to the given value.
 * @method static self microseconds() Set current instance microsecond to the given value.
 * @method static self microsecond(int $value) Set current instance microsecond to the given value.
 * @method static self setMicroseconds() Set current instance microsecond to the given value.
 * @method static self setMicrosecond(int $value) Set current instance microsecond to the given value.
 * @method static self addDays(int $value = 1) Add days (the $value count passed in) to the instance (using date interval).
 * @method static self addDay() Add one day to the instance (using date interval).
 * @method static self subDays(int $value = 1) Sub days (the $value count passed in) to the instance (using date interval).
 * @method static self subDay() Sub one day to the instance (using date interval).
 * @method static self addHours(int $value = 1) Add hours (the $value count passed in) to the instance (using date interval).
 * @method static self addHour() Add one hour to the instance (using date interval).
 * @method static self subHours(int $value = 1) Sub hours (the $value count passed in) to the instance (using date interval).
 * @method static self subHour() Sub one hour to the instance (using date interval).
 * @method static self addMinutes(int $value = 1) Add minutes (the $value count passed in) to the instance (using date interval).
 * @method static self addMinute() Add one minute to the instance (using date interval).
 * @method static self subMinutes(int $value = 1) Sub minutes (the $value count passed in) to the instance (using date interval).
 * @method static self subMinute() Sub one minute to the instance (using date interval).
 * @method static self addSeconds(int $value = 1) Add seconds (the $value count passed in) to the instance (using date interval).
 * @method static self addSecond() Add one second to the instance (using date interval).
 * @method static self subSeconds(int $value = 1) Sub seconds (the $value count passed in) to the instance (using date interval).
 * @method static self subSecond() Sub one second to the instance (using date interval).
 * @method static self addMillis(int $value = 1) Add milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static self addMilli() Add one millisecond to the instance (using date interval).
 * @method static self subMillis(int $value = 1) Sub milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static self subMilli() Sub one millisecond to the instance (using date interval).
 * @method static self addMilliseconds(int $value = 1) Add milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static self addMillisecond() Add one millisecond to the instance (using date interval).
 * @method static self subMilliseconds(int $value = 1) Sub milliseconds (the $value count passed in) to the instance (using date interval).
 * @method static self subMillisecond() Sub one millisecond to the instance (using date interval).
 * @method static self addMicros(int $value = 1) Add microseconds (the $value count passed in) to the instance (using date interval).
 * @method static self addMicro() Add one microsecond to the instance (using date interval).
 * @method static self subMicros(int $value = 1) Sub microseconds (the $value count passed in) to the instance (using date interval).
 * @method static self subMicro() Sub one microsecond to the instance (using date interval).
 * @method static self addMicroseconds(int $value = 1) Add microseconds (the $value count passed in) to the instance (using date interval).
 * @method static self addMicrosecond() Add one microsecond to the instance (using date interval).
 * @method static self subMicroseconds(int $value = 1) Sub microseconds (the $value count passed in) to the instance (using date interval).
 * @method static self subMicrosecond() Sub one microsecond to the instance (using date interval).
 * @method static self addMonths(int $value = 1) Add months (the $value count passed in) to the instance (using date interval).
 * @method static self addMonth() Add one month to the instance (using date interval).
 * @method static self subMonths(int $value = 1) Sub months (the $value count passed in) to the instance (using date interval).
 * @method static self subMonth() Sub one month to the instance (using date interval).
 * @method static self addYears(int $value = 1) Add years (the $value count passed in) to the instance (using date interval).
 * @method static self addYear() Add one year to the instance (using date interval).
 * @method static self subYears(int $value = 1) Sub years (the $value count passed in) to the instance (using date interval).
 * @method static self subYear() Sub one year to the instance (using date interval).
 */
class TestTime
{
    public static function freeze(): Carbon
    {
        $frozenTime = static::getCarbon(func_get_args());

        Carbon::setTestNow($frozenTime);
        CarbonImmutable::setTestNow($frozenTime);

        return $frozenTime;
    }

    public static function unfreeze(): void
    {
        Carbon::setTestNow(null);
        CarbonImmutable::setTestNow(null);
    }

    public static function freezeAtSecond(): Carbon
    {
        $frozenTime = static::getCarbon(func_get_args())->startOfSecond();

        return static::freeze($frozenTime);
    }

    public function __call($name, $arguments)
    {
        return $this->__callStatic($name, $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        $result = (new Carbon)->$name(...$arguments);

        if (! $result instanceof Carbon) {
            return $result;
        }

        Carbon::setTestNow($result);
        CarbonImmutable::setTestNow($result);

        return new TestTime();
    }

    protected static function getCarbon(array $args): Carbon
    {
        if (count($args) === 0) {
            return Carbon::now();
        }

        if (count($args) === 1) {
            if (! $args[0] instanceof Carbon) {
                throw new InvalidArgumentException('You must pass a Carbon instance to `freeze`');
            }

            return $args[0];
        }

        if (count($args) === 2) {
            return Carbon::createFromFormat($args[0], $args[1]);
        }

        if (count($args) === 3) {
            return Carbon::createFromFormat($args[0], $args[1], $args[2]);
        }

        throw new InvalidArgumentException('You can only pass a maximum of two arguments to `freeze`');
    }
}
