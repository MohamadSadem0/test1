<?php
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'password' => bcrypt('password'), 
            'email' => $this->faker->unique()->safeEmail,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'blood_type' => $this->faker->randomElement(['A+', 'B+', 'AB+', 'O+', 'A-', 'B-', 'AB-', 'O-']),
            'phone_number' => $this->faker->phoneNumber,
            'date_of_birth' => $this->faker->date(),
            'location' => $this->faker->city,
            'type' => $this->faker->randomElement(['admin', 'civilian', 'crises fighter']),
        ];
    }
}
