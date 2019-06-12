<?php

namespace Spatie\TestTime;

use Carbon\Carbon;

/**
 * @mixin \Carbon\Carbon
 *
 * @method  static self        addDays(int $value = 1)                                                             Add days (the $value count passed in) to the instance (using date interval).
 * @method    static self          addDay()                                                                            Add one day to the instance (using date interval).
 * @method    static self          subDays(int $value = 1)                                                             Sub days (the $value count passed in) to the instance (using date interval).
 * @method    static self          subDay()                                                                            Sub one day to the instance (using date interval).
 * @method    static self          addHours(int $value = 1)                                                            Add hours (the $value count passed in) to the instance (using date interval).
 * @method    static self          addHour()                                                                           Add one hour to the instance (using date interval).
 * @method    static self          subHours(int $value = 1)                                                            Sub hours (the $value count passed in) to the instance (using date interval).
 * @method    static self          subHour()                                                                           Sub one hour to the instance (using date interval).
 * @method    static self          addMinutes(int $value = 1)                                                          Add minutes (the $value count passed in) to the instance (using date interval).
 * @method    static self          addMinute()                                                                         Add one minute to the instance (using date interval).
 * @method    static self          subMinutes(int $value = 1)                                                          Sub minutes (the $value count passed in) to the instance (using date interval).
 * @method    static self          subMinute()                                                                         Sub one minute to the instance (using date interval).
 * @method    static self          addSeconds(int $value = 1)                                                          Add seconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          addSecond()                                                                         Add one second to the instance (using date interval).
 * @method    static self          subSeconds(int $value = 1)                                                          Sub seconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          subSecond()                                                                         Sub one second to the instance (using date interval).
 * @method    static self          addMillis(int $value = 1)                                                           Add milliseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          addMilli()                                                                          Add one millisecond to the instance (using date interval).
 * @method    static self          subMillis(int $value = 1)                                                           Sub milliseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          subMilli()                                                                          Sub one millisecond to the instance (using date interval).
 * @method    static self          addMilliseconds(int $value = 1)                                                     Add milliseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          addMillisecond()                                                                    Add one millisecond to the instance (using date interval).
 * @method    static self          subMilliseconds(int $value = 1)                                                     Sub milliseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          subMillisecond()                                                                    Sub one millisecond to the instance (using date interval).
 * @method    static self          addMicros(int $value = 1)                                                           Add microseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          addMicro()                                                                          Add one microsecond to the instance (using date interval).
 * @method    static self          subMicros(int $value = 1)                                                           Sub microseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          subMicro()                                                                          Sub one microsecond to the instance (using date interval).
 * @method    static self          addMicroseconds(int $value = 1)                                                     Add microseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          addMicrosecond()                                                                    Add one microsecond to the instance (using date interval).
 * @method    static self          subMicroseconds(int $value = 1)                                                     Sub microseconds (the $value count passed in) to the instance (using date interval).
 * @method    static self          subMicrosecond()                                                                    Sub one microsecond to the instance (using date interval).
 * @method    static self addYears(int $value = 1)                                                            Add years (the $value count passed in) to the instance (using date interval).
 * @method    static self addYear()                                                                           Add one year to the instance (using date interval).
 * @method    static self subYears(int $value = 1)                                                            Sub years (the $value count passed in) to the instance (using date interval).
 * @method    static self subYear()                                                                           Sub one year to the instance (using date interval).
 */
class TestTime
{
    public static function freeze(Carbon $carbon = null): Carbon
    {
        $frozenTime = $carbon ?? now();

        Carbon::setTestNow($frozenTime);

        return $frozenTime;
    }

    public function __call($name, $arguments)
    {
        return $this->__callStatic($name, $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        $result = (new Carbon)->$name(...$arguments);

        if (!$result instanceof Carbon) {
            return $result;
        };

        Carbon::setTestNow($result);

        return new TestTime();
    }
}
