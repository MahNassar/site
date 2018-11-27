<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class clintsApiTest extends TestCase
{
    use MakeclintsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateclints()
    {
        $clints = $this->fakeclintsData();
        $this->json('POST', '/api/v1/clints', $clints);

        $this->assertApiResponse($clints);
    }

    /**
     * @test
     */
    public function testReadclints()
    {
        $clints = $this->makeclints();
        $this->json('GET', '/api/v1/clints/'.$clints->id);

        $this->assertApiResponse($clints->toArray());
    }

    /**
     * @test
     */
    public function testUpdateclints()
    {
        $clints = $this->makeclints();
        $editedclints = $this->fakeclintsData();

        $this->json('PUT', '/api/v1/clints/'.$clints->id, $editedclints);

        $this->assertApiResponse($editedclints);
    }

    /**
     * @test
     */
    public function testDeleteclints()
    {
        $clints = $this->makeclints();
        $this->json('DELETE', '/api/v1/clints/'.$clints->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/clints/'.$clints->id);

        $this->assertResponseStatus(404);
    }
}
