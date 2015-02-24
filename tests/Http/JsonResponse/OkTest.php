<?php

namespace Abbiya\Test\Http\JsonResponse;

use Abbiya\Http\JsonResponse\Ok;

class OkTest extends \PHPUnit_Framework_Testcase
{
    /**
     * Asserts that new Ok responses have a 200 status code
     *
     * @return void
     */
    public function testConstructor()
    {
        $response = new Ok();
        $this->assertSame(200, $response->getStatusCode());
    }
}
