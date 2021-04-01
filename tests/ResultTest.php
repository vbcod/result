<?php

namespace Vbcod\Result\Tests;

use Vbcod\Result\Result;
use PHPUnit\Framework\TestCase;

class ResultTest extends TestCase
{
    public function testStatusManipulations()
    {
        $result = new Result();

        $this->assertFalse($result->isSuccess());
        $this->assertFalse($result->isError());

        $result->setStatusToSuccess();
        $this->assertTrue($result->isSuccess());
        $this->assertFalse($result->isError());

        $result->setStatusToError();
        $this->assertTrue($result->isError());
        $this->assertFalse($result->isSuccess());
    }
}
