<?php
declare(strict_types=1);

namespace Example;

class MyClass
{
    public function returnABoolean(): bool
    {
        return true;
    }

    public function returnAString(): string
    {
        return "Hello darkness my old friend";
    }
}
//
//public function testReturnsTrue(): void
//{
//    $class = new MyClass();
//
//    self::assertTrue($class->returnABoolean());
//}
//
//public function testReturnsString(): void
//{
//    $class = new MyClass();
//
//    self::assertSame(
//        "Hello darkness my old friend",
//        $class->returnAString()
//    );
//}