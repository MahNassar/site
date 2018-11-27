<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class careersApiTest extends TestCase
{
    use MakecareersTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatecareers()
    {
        $careers = $this->fakecareersData();
        $this->json('POST', '/api/v1/careers', $careers);

        $this->assertApiResponse($careers);
    }

    /**
     * @test
     */
    public function testReadcareers()
    {
        $careers = $this->makecareers();
        $this->json('GET', '/api/v1/careers/'.$careers->id);

        $this->assertApiResponse($careers->toArray());
    }

    /**
     * @test
     */
    public function testUpdatecareers()
    {
        $careers = $this->makecareers();
        $editedcareers = $this->fakecareersData();

        $this->json('PUT', '/api/v1/careers/'.$careers->id, $editedcareers);

        $this->assertApiResponse($editedcareers);
    }

    /**
     * @test
     */
    public function testDeletecareers()
    {
        $careers = $this->makecareers();
        $this->json('DELETE', '/api/v1/careers/'.$careers->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/careers/'.$careers->id);

        $this->assertResponseStatus(404);
    }
}
