<?php

use Faker\Factory as Faker;
use App\Models\clints;
use App\Repositories\clintsRepository;

trait MakeclintsTrait
{
    /**
     * Create fake instance of clints and save it in database
     *
     * @param array $clintsFields
     * @return clints
     */
    public function makeclints($clintsFields = [])
    {
        /** @var clintsRepository $clintsRepo */
        $clintsRepo = App::make(clintsRepository::class);
        $theme = $this->fakeclintsData($clintsFields);
        return $clintsRepo->create($theme);
    }

    /**
     * Get fake instance of clints
     *
     * @param array $clintsFields
     * @return clints
     */
    public function fakeclints($clintsFields = [])
    {
        return new clints($this->fakeclintsData($clintsFields));
    }

    /**
     * Get fake data of clints
     *
     * @param array $postFields
     * @return array
     */
    public function fakeclintsData($clintsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'logo' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $clintsFields);
    }
}
