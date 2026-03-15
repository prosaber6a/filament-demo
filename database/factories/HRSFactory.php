<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\HR;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<HR>
 */
class HRSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agent_id' => Agent::factory(),
            'name' => $this->faker->name(),
            'father' => $this->faker->name(),
            'mother' => $this->faker->name(),
            'dob' => $this->faker->date(),
            'mofa_id' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'old_mofa_id' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'birth_place' => $this->faker->city(),
            'prev_nationality' => $this->faker->country(),
            'nationality' => $this->faker->country(),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'marital_status' => $this->faker->randomElement(['Married', 'Unmarried']),
            'sect' => $this->faker->word(),
            'religion' => $this->faker->randomElement(['Muslim', 'Non-Muslim']),
            'address' => $this->faker->address(),
            'passport_no' => $this->faker->unique()->regexify('[A-Z0-9]{8}'),
            'passport_issue_date' => $this->faker->date(),
            'passport_expiry_date' => $this->faker->date(),
            'passport_issue_place' => $this->faker->city(),
            'visa_no' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'visa_issue_date' => $this->faker->date(),
            'sponsor_name' => $this->faker->name(),
            'sponsor_id' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'visa_issue_place_ar' => $this->faker->city(),
            'visa_issue_place_en' => $this->faker->city(),
            'qualification_ar' => $this->faker->word(),
            'qualification_en' => $this->faker->word(),
            'profession_ar' => $this->faker->word(),
            'profession_en' => $this->faker->word(),
            'musaned_no' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'wakala_no' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'police_clearance_no' => $this->faker->unique()->regexify('[A-Z0-9]{10}'),
            'police_clearance_issue_date' => $this->faker->date(),
            'driving_license_type' => $this->faker->randomElement([null, 'Light', 'Medium','Heavy','Motorcycle', 'Three-Wheeler', 'PSV', 'Others']),
            'stay_duration' => $this->faker->randomElement(['2 Years', '6 Months'])
        ];
    }
}
