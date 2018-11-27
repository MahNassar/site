<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class partnersApiTest extends TestCase
{
    use MakepartnersTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepartners()
    {
        $partners = $this->fakepartnersData();
        $this->json('POST', '/api/v1/partners', $partners);

        $this->assertApiResponse($partners);
    }

    /**
     * @test
     */
    public function testReadpartners()
    {
        $partners = $this->makepartners();
        $this->json('GET', '/api/v1/partners/'.$partners->id);

        $this->assertApiResponse($partners->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepartners()
    {
        $partners = $this->makepartners();
        $editedpartners = $this->fakepartnersData();

        $this->json('PUT', '/api/v1/partners/'.$partners->id, $editedpartners);

        $this->assertApiResponse($editedpartners);
    }

    /**
     * @test
     */
    public function testDeletepartners()
    {
        $partners = $this->makepartners();
        $this->json('DELETE', '/api/v1/partners/'.$partners->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/partners/'.$partners->id);

        $this->assertResponseStatus(404);
    }
}
