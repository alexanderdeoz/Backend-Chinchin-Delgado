<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'code'=> $this->faker->lexify(),
          'date'=>$this->faker->date(),
          'description'=>$this->faker->paragraph(),
          'genere'=>$this->faker->word(),
          'title'=>$this->faker->word()
        ];
    }
}
