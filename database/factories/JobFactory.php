<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            // 'salary' => fake()->randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD']),
            'salary' => $this->randomSalary(),
            'location' => 'Remote',
            'schedule' => "Full time",
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
    private function randomSalary(): string
    {
        $amounts = [50000, 90000, 150000]; // Numeric values
        $randomAmount = fake()->randomElement($amounts);
        return '$' . number_format($randomAmount) . ' USD'; // Format as a string
    }
}
