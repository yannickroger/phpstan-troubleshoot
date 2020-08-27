<?php

use Some\Project\MyClass;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class MyClassTest extends TestCase
{
    /** @var MockObject&MyClass  */
    private $myClass;

    public function setUp(): void
    {
        parent::setUp();

        $this->myClass = $this->createMock(MyClass::class);
    }
}
