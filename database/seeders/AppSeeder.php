<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Author;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   function run()
    {
        $this->createAuthors();
    }
    function createAuthors(){
        Book::factory(10)
        ->hasAuthors(3,
        [
            'state'=>'actualizado',
            //  'releaseDate'=>null,
        ])
        ->create([
            'name'=>'abd',
            
        ]);
    }
}

