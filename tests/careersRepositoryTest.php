<?php

use App\Models\careers;
use App\Repositories\careersRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class careersRepositoryTest extends TestCase
{
    use MakecareersTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var careersRepository
     */
    protected $careersRepo;

    public function setUp()
    {
        parent::setUp();
        $this->careersRepo = App::make(careersRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatecareers()
    {
        $careers = $this->fakecareersData();
        $createdcareers = $this->careersRepo->create($careers);
        $createdcareers = $createdcareers->toArray();
        $this->assertArrayHasKey('id', $createdcareers);
        $this->assertNotNull($createdcareers['id'], 'Created careers must have id specified');
        $this->assertNotNull(careers::find($createdcareers['id']), 'careers with given id must be in DB');
        $this->assertModelData($careers, $createdcareers);
    }

    /**
     * @test read
     */
    public function testReadcareers()
    {
        $careers = $this->makecareers();
        $dbcareers = $this->careersRepo->find($careers->id);
        $dbcareers = $dbcareers->toArray();
        $this->assertModelData($careers->toArray(), $dbcareers);
    }

    /**
     * @test update
     */
    public function testUpdatecareers()
    {
        $careers = $this->makecareers();
        $fakecareers = $this->fakecareersData();
        $updatedcareers = $this->careersRepo->update($fakecareers, $careers->id);
        $this->assertModelData($fakecareers, $updatedcareers->toArray());
        $dbcareers = $this->careersRepo->find($careers->id);
        $this->assertModelData($fakecareers, $dbcareers->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletecareers()
    {
        $careers = $this->makecareers();
        $resp = $this->careersRepo->delete($careers->id);
        $this->assertTrue($resp);
        $this->assertNull(careers::find($careers->id), 'careers should not exist in DB');
    }
}
