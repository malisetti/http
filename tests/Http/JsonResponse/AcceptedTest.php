<?php

namespace Abbiya\Test\Http\JsonResponse;

use Abbiya\Http\JsonResponse\Accepted;

class AcceptedTest extends \PHPUnit_Framework_Testcase
{
    /**
     * Asserts that new Accepted responses have a 202 status code
     *
     * @return void
     */
    public function testConstructor()
    {
        $response = new Accepted();
        $this->assertSame(202, $response->getStatusCode());
    }
}
