<?php

use App\Models\clints;
use App\Repositories\clintsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class clintsRepositoryTest extends TestCase
{
    use MakeclintsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var clintsRepository
     */
    protected $clintsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->clintsRepo = App::make(clintsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateclints()
    {
        $clints = $this->fakeclintsData();
        $createdclints = $this->clintsRepo->create($clints);
        $createdclints = $createdclints->toArray();
        $this->assertArrayHasKey('id', $createdclints);
        $this->assertNotNull($createdclints['id'], 'Created clints must have id specified');
        $this->assertNotNull(clints::find($createdclints['id']), 'clints with given id must be in DB');
        $this->assertModelData($clints, $createdclints);
    }

    /**
     * @test read
     */
    public function testReadclints()
    {
        $clints = $this->makeclints();
        $dbclints = $this->clintsRepo->find($clints->id);
        $dbclints = $dbclints->toArray();
        $this->assertModelData($clints->toArray(), $dbclints);
    }

    /**
     * @test update
     */
    public function testUpdateclints()
    {
        $clints = $this->makeclints();
        $fakeclints = $this->fakeclintsData();
        $updatedclints = $this->clintsRepo->update($fakeclints, $clints->id);
        $this->assertModelData($fakeclints, $updatedclints->toArray());
        $dbclints = $this->clintsRepo->find($clints->id);
        $this->assertModelData($fakeclints, $dbclints->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteclints()
    {
        $clints = $this->makeclints();
        $resp = $this->clintsRepo->delete($clints->id);
        $this->assertTrue($resp);
        $this->assertNull(clints::find($clints->id), 'clints should not exist in DB');
    }
}
