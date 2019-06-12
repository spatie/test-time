<?php

namespace Spatie\TestTime\Tests;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Spatie\TestTime\TestTime;

class TestTimeTest extends TestCase
{
    /** @test */
    public function it_can_control_the_flow_of_time()
    {
        $now = Carbon::createFromFormat('Y-m-d H:i:s', '2019-01-02 03:44:55');

        TestTime::freeze($now);
        $this->assertEquals('2019-01-02 03:44:55', (new Carbon())->format('Y-m-d H:i:s'));

        TestTime::addYear();
        $this->assertEquals('2020', (new Carbon())->format('Y'));

        TestTime::addYear()->addYear();
        $this->assertEquals('2022', (new Carbon())->format('Y'));
    }
}
