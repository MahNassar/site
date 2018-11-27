<?php

use App\Models\partners;
use App\Repositories\partnersRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class partnersRepositoryTest extends TestCase
{
    use MakepartnersTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var partnersRepository
     */
    protected $partnersRepo;

    public function setUp()
    {
        parent::setUp();
        $this->partnersRepo = App::make(partnersRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepartners()
    {
        $partners = $this->fakepartnersData();
        $createdpartners = $this->partnersRepo->create($partners);
        $createdpartners = $createdpartners->toArray();
        $this->assertArrayHasKey('id', $createdpartners);
        $this->assertNotNull($createdpartners['id'], 'Created partners must have id specified');
        $this->assertNotNull(partners::find($createdpartners['id']), 'partners with given id must be in DB');
        $this->assertModelData($partners, $createdpartners);
    }

    /**
     * @test read
     */
    public function testReadpartners()
    {
        $partners = $this->makepartners();
        $dbpartners = $this->partnersRepo->find($partners->id);
        $dbpartners = $dbpartners->toArray();
        $this->assertModelData($partners->toArray(), $dbpartners);
    }

    /**
     * @test update
     */
    public function testUpdatepartners()
    {
        $partners = $this->makepartners();
        $fakepartners = $this->fakepartnersData();
        $updatedpartners = $this->partnersRepo->update($fakepartners, $partners->id);
        $this->assertModelData($fakepartners, $updatedpartners->toArray());
        $dbpartners = $this->partnersRepo->find($partners->id);
        $this->assertModelData($fakepartners, $dbpartners->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepartners()
    {
        $partners = $this->makepartners();
        $resp = $this->partnersRepo->delete($partners->id);
        $this->assertTrue($resp);
        $this->assertNull(partners::find($partners->id), 'partners should not exist in DB');
    }
}
