<?php

namespace Abbiya\Test\Http\JsonResponse;

use Abbiya\Http\JsonResponse\PartialContent;

class PartialContentTest extends \PHPUnit_Framework_Testcase
{
    /**
     * Asserts that new PartialContent responses have a 206 status code
     *
     * @return void
     */
    public function testConstructor()
    {
        $response = new PartialContent();
        $this->assertSame(206, $response->getStatusCode());
    }
}
