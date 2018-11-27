<?php

use Faker\Factory as Faker;
use App\Models\careers;
use App\Repositories\careersRepository;

trait MakecareersTrait
{
    /**
     * Create fake instance of careers and save it in database
     *
     * @param array $careersFields
     * @return careers
     */
    public function makecareers($careersFields = [])
    {
        /** @var careersRepository $careersRepo */
        $careersRepo = App::make(careersRepository::class);
        $theme = $this->fakecareersData($careersFields);
        return $careersRepo->create($theme);
    }

    /**
     * Get fake instance of careers
     *
     * @param array $careersFields
     * @return careers
     */
    public function fakecareers($careersFields = [])
    {
        return new careers($this->fakecareersData($careersFields));
    }

    /**
     * Get fake data of careers
     *
     * @param array $postFields
     * @return array
     */
    public function fakecareersData($careersFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'description' => $fake->text,
            'image' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $careersFields);
    }
}
