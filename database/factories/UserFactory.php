<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //  Schema::create('users', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('name');
    //     $table->string('username');
    //     $table->timestamp('email_verified_at')->nullable();
    //     $table->string('password');
    //     $table->enum('role',['student','dosen','cordinator'])->default('student');
    //     $table->rememberToken();
    //     $table->timestamps();
    // });


    public function definition(): array
    {
        return [
          

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}