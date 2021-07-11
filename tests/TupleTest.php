<?php

namespace Tuple\Tests;

use Tuple;
use RuntimeException;
use PHPUnit\Framework\TestCase;

/**
 * @group Tuple
 * @covers \Tuple
 */
class TupleTest extends TestCase
{
    /**
     * @test
     */
    public function access() : void
    {
        $tuple = new Tuple(5.0, 3, 'foo');

        $this->assertEquals(5.0, $tuple[0]);
        $this->assertEquals(3, $tuple[1]);
        $this->assertEquals('foo', $tuple[2]);
    }

    /**
     * @test
     */
    public function countable() : void
    {
        $tuple = new Tuple(5.0, 3, 'foo');

        $this->assertCount(3, $tuple);
    }

    /**
     * @test
     */
    public function iterate() : void
    {
        $tuple = new Tuple(5.0, 3, 'foo');

        $this->assertEquals([5.0, 3, 'foo'], iterator_to_array($tuple));
    }

    /**
     * @test
     */
    public function list() : void
    {
        $tuple = new Tuple(5.0, 3, 'foo');

        [$first, $second, $third] = $tuple->list();

        $this->assertEquals(5.0, $first);
        $this->assertEquals(3, $second);
        $this->assertEquals('foo', $third);
    }

    /**
     * @test
     */
    public function mutate() : void
    {
        $tuple = new Tuple(5.0, 3, 'foo');

        $this->expectException(RuntimeException::class);

        $tuple[2] = 'bar';
    }
}
