<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    //  Schema::create('students', function (Blueprint $table) {
    //     $table->string('nim', 50)->primary();
    //     $table->string('nama_lengkap', 255);
    //     $table->integer('angkatan');
    //     $table->string('email_akademik', 100);
    //     $table->string('program_studi', 100);
    //     $table->string('email_pribadi', 100);
    //     $table->string('pass_word', 50);
    //     $table->float('ipk');
    //     $table->timestamps();

    //     $table->unsignedBigInteger('user_id')->unique(); // foreign key ke tabel users
    //     $table->foreign('user_id')->references('id')->on('users');
    // });
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nama_lengkap' => $this->faker->name(),
            'angkatan' => $this->faker->numberBetween(2010, 2020),
            'email_akademik' => $this->faker->unique()->safeEmail(),
            'program_studi' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Elektro', 'Teknik Industri', 'Teknik Sipil', 'Teknik Mesin']),
            'email_pribadi' => $this->faker->unique()->safeEmail(),
            'pass_word' => $this->faker->password(),
            'ipk' => $this->faker->randomFloat(2, 2.00, 4.00),
            'user_id' => $this->faker->unique()->numberBetween(1, 100),
            
            
        ];
    }
}
