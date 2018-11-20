<?php

namespace Example\Tests\Unit;

use Example\MyClass;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{

    public function testReturnsTrue(): void
    {
        $class = new MyClass();

        self::assertTrue($class->returnABoolean());
    }

    public function testReturnsString(): void
    {
        $class = new MyClass();

        self::assertSame(
            "Hello darkness my old friend",
            $class->returnAString()
        );
    }

}
