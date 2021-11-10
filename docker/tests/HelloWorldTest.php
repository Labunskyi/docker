<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10.11.21
 * Time: 22:47
 */

namespace App\Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;


class HelloWorldTest extends TestCase

{
    public function testHelloWorldTest(): void
    {
        $test   = new HelloWorld();
        $result = $test->hello();

        $this->assertEquals('Hello World!', $result);
    }

}