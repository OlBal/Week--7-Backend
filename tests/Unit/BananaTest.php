<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Owner;

class BananaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertSame(Owner::haveWeBananas(0), "No we have no bananas");
        $this->assertSame(Owner::haveWeBananas(2), "Yes we have 2 bananas");
        $this->assertSame(Owner::haveWeBananas(1), "Yes we have 1 banana");
    }
}
