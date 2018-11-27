<?php

use Faker\Factory as Faker;
use App\Models\partners;
use App\Repositories\partnersRepository;

trait MakepartnersTrait
{
    /**
     * Create fake instance of partners and save it in database
     *
     * @param array $partnersFields
     * @return partners
     */
    public function makepartners($partnersFields = [])
    {
        /** @var partnersRepository $partnersRepo */
        $partnersRepo = App::make(partnersRepository::class);
        $theme = $this->fakepartnersData($partnersFields);
        return $partnersRepo->create($theme);
    }

    /**
     * Get fake instance of partners
     *
     * @param array $partnersFields
     * @return partners
     */
    public function fakepartners($partnersFields = [])
    {
        return new partners($this->fakepartnersData($partnersFields));
    }

    /**
     * Get fake data of partners
     *
     * @param array $postFields
     * @return array
     */
    public function fakepartnersData($partnersFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'logo' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $partnersFields);
    }
}
